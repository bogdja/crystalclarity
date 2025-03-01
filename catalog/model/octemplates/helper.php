<?php
/**
 * @copyright    OCTemplates
 * @support      https://octemplates.net/
 * @license      LICENSE.txt
 */

class ModelOctemplatesHelper extends Controller {

    public function getOctCartProducts() {
        $cart_query = $this->db->query("SELECT product_id FROM " . DB_PREFIX . "cart WHERE api_id = '" . (isset($this->session->data['api_id']) ? (int)$this->session->data['api_id'] : 0) . "' AND customer_id = '" . (int)$this->customer->getId() . "' AND session_id = '" . $this->db->escape($this->session->getId()) . "'");
    
        if ($cart_query->num_rows > 0) {
            $product_ids = array_column($cart_query->rows, 'product_id');
            $unique_product_ids = array_unique($product_ids);
            return $unique_product_ids;
        } else {
            return [];
        }
    }

    public function getModuleIdByCode($code) {
        if (!$code || strlen($code) < 3) {
            return null;
        }
        $query = $this->db->query("SELECT module_id FROM `" . DB_PREFIX . "module` WHERE `code` = '" . $this->db->escape($code) . "'");
        return $query->num_rows ? $query->row['module_id'] : null;
    }

	public function addOctReviewData($review_id, $data) {
        if (!$review_id || !$data) {
            return;
        }
		$this->db->query("INSERT INTO " . DB_PREFIX . "oct_product_reviews SET review_id = '" . (int)$review_id . "', positive_text = '" . $this->db->escape($data['positive_text']) . "', negative_text = '" . $this->db->escape($data['negative_text']) . "'");
	}

    public function getOctReviewData($review_id) {

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_product_reviews WHERE review_id = '" . (int)$review_id . "'");
        $reputation_query = $this->db->query("SELECT SUM(plus_reputation) AS positive_votes FROM " . DB_PREFIX . "oct_product_reviews_reputation WHERE review_id = '" . (int)$review_id . "'");
        $positive_votes = isset($reputation_query->row['positive_votes']) ? (int)$reputation_query->row['positive_votes'] : 0;
    
        if ($query->num_rows) {
            return array(
                'positive_text' => $query->row['positive_text'],
                'negative_text' => $query->row['negative_text'],
                'admin_answer'  => $query->row['admin_answer'],
                'positive_votes'=> $positive_votes
            );
        } else {
            return array(
                'positive_text' => '',
                'negative_text' => '',
                'admin_answer'  => '',
                'positive_votes'=> $positive_votes
            );
        }
    } 

    public function addOctProductReputation($data = array()) {
        $sql = "INSERT INTO " . DB_PREFIX . "oct_product_reviews_reputation SET review_id = '" . (int)$data['review_id'] . "', ip = '" . $this->db->escape($data['ip']) . "'";

        $sql .= ", plus_reputation = (plus_reputation + 1)";

        $this->db->query($sql);
    }

    public function checkOctUserIp($ip, $review_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_product_reviews_reputation WHERE ip = '" . $this->db->escape($ip) . "' AND review_id = '" . (int)$review_id . "'");

        return $query->rows;
    }

    public function getManualRecommendations($products) {

        if(empty($products)) return array();

        $recommended_products = array();

        foreach ($products as $product) {
            $manual_query = $this->db->query("
                SELECT pr.related_id 
                FROM " . DB_PREFIX . "product_related pr 
                JOIN " . DB_PREFIX . "product p ON (pr.related_id = p.product_id) 
                JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) 
                WHERE pr.product_id = '" . (int)$product['product_id'] . "' 
                AND p.status = '1' 
                AND p.date_available <= NOW() 
                AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' 
                AND p.quantity > 0 
                LIMIT 5
            ");

            foreach ($manual_query->rows as $result) {
                if (!isset($recommended_products[$result['related_id']])) {
                    $recommended_products[$result['related_id']] = $result['related_id'];
                }
            }
        }

        return $recommended_products;
    }

    public function getAutomaticRecommendations($products) {

        if(empty($products)) return array();

        $recommended_products = array();

        foreach ($products as $product) {
            $auto_query = $this->db->query("
                SELECT op2.product_id, COUNT(*) as count 
                FROM " . DB_PREFIX . "order_product op1 
                JOIN " . DB_PREFIX . "order_product op2 ON op1.order_id = op2.order_id 
                JOIN " . DB_PREFIX . "product p ON (op2.product_id = p.product_id) 
                JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) 
                WHERE op1.product_id = '" . (int)$product['product_id'] . "' 
                AND op2.product_id != '" . (int)$product['product_id'] . "' 
                AND p.status = '1' 
                AND p.date_available <= NOW() 
                AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' 
                AND p.quantity > 0 
                GROUP BY op2.product_id 
                ORDER BY count DESC 
                LIMIT 5
            ");

            foreach ($auto_query->rows as $result) {
                if (!isset($recommended_products[$result['product_id']])) {
                    $recommended_products[$result['product_id']] = $result['product_id'];
                }
            }
        }

        return $recommended_products;
    }
}