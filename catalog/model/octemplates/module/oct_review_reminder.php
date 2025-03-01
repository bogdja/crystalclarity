<?php
/**
 * @copyright    OCTemplates
 * @support      https://octemplates.net/
 * @license      LICENSE.txt
 */

class ModelOctemplatesModuleOctReviewReminder extends Model {

    public function getRemindersToSend() {
        
        $daysAfterOrder = (int)$this->config->get('oct_review_reminder_days_after_order');
        $allowedOrderStatuses = $this->config->get('oct_review_reminder_order_status');

        $startOfDay = date('Y-m-d H:i:s', strtotime('-' . $daysAfterOrder . ' days midnight'));
        $endOfDay = date('Y-m-d H:i:s', strtotime('-' . $daysAfterOrder . ' days 23:59:59'));

        $ordersQuery = $this->db->query("
            SELECT o.order_id, o.customer_id, o.date_added, o.telephone, o.language_id, o.email, o.firstname as customer_name, o.lastname as customer_lastname, o.order_status_id
            FROM `" . DB_PREFIX . "order` o 
            LEFT JOIN `" . DB_PREFIX . "oct_review_reminder` r ON o.order_id = r.order_id 
            WHERE o.order_status_id IN ('" . implode("','", $allowedOrderStatuses) . "') 
            AND o.date_added BETWEEN '" . $this->db->escape($startOfDay) . "' AND '" . $this->db->escape($endOfDay) . "' 
            AND r.order_id IS NULL 
            ORDER BY o.date_added ASC 
            LIMIT 150
        ");

        $reminders = $ordersQuery->rows;

        foreach ($reminders as $reminder) {
            if (!$this->isReminderAlreadySent($reminder['order_id'])) {
                $this->addReminderRecord($reminder);
            }
        }

        return $reminders;
    }

    public function addReminderRecord($reminder) {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "oct_review_reminder` SET `order_id` = '" . (int)$reminder['order_id'] . "', `customer_id` = '" . (int)$reminder['customer_id'] . "', `email` = '" . $this->db->escape($reminder['email']) . "', `telephone` = '" . $this->db->escape($reminder['telephone']) . "', `date_added` = NOW(), `is_sent` = 0");
    }

    public function isReminderAlreadySent($orderId) {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "oct_review_reminder` WHERE `order_id` = '" . (int)$orderId . "'");
        return $query->row['total'] > 0;
    }

    public function markReminderAsSent($orderId) {
        $this->db->query("UPDATE `" . DB_PREFIX . "oct_review_reminder` SET `is_sent` = 1 WHERE `order_id` = '" . (int)$orderId . "'");
    }

    public function delReminderRecord($orderId) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "oct_review_reminder` WHERE `order_id` = '" . (int)$orderId . "'");
    }
}