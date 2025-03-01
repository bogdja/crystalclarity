<?php
/**
 * @copyright    OCTemplates
 * @support      https://octemplates.net/
 * @license      LICENSE.txt
 */

class ControllerOCTemplatesEventsHelper extends Controller {

    public function compareRemove() {
        if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

            $this->load->language('octemplates/oct_deals');
        
            $json = array();
        
            if (!isset($this->session->data['compare']) || !isset($this->request->post['product_id'])) {
                $json['error'] = $this->language->get('text_empty');
            } else {
                $product_id = (int)$this->request->post['product_id'];
        
                $this->load->model('catalog/product');
        
                $product_info = $this->model_catalog_product->getProduct($product_id);
        
                if ($product_info) {
                    if (in_array($product_id, $this->session->data['compare'])) {
                        $key = array_search($product_id, $this->session->data['compare']);
                        unset($this->session->data['compare'][$key]);
                        $json['success'] = sprintf($this->language->get('compare_remove_success'), $this->url->link('product/product', 'product_id=' . (int)$this->request->post['product_id']), $product_info['name'], $this->url->link('product/compare'));
                        $json['total_compare'] = (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0);
                    }
                }
            }
        
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
        } else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
    }

    public function wishlistRemove() {
        if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $this->load->language('octemplates/oct_deals');
        
            $json = array();
        
            if (isset($this->request->post['product_id'])) {
                $product_id = (int)$this->request->post['product_id'];
            } else {
                $product_id = 0;
            }
        
            $this->load->model('catalog/product');
        
            $product_info = $this->model_catalog_product->getProduct($product_id);
        
            if ($product_info) {
                if ($this->customer->isLogged()) {
                    // Edit customers wishlist
                    $this->load->model('account/wishlist');
        
                    $this->model_account_wishlist->deleteWishlist($this->request->post['product_id']);
        
                    $json['success'] = sprintf($this->language->get('wishlist_remove_success'), $this->url->link('product/product', 'product_id=' . (int)$this->request->post['product_id']), $product_info['name'], $this->url->link('account/wishlist'));
                    $json['total_wishlist'] = $this->model_account_wishlist->getTotalWishlist();
                } else {
                    if (isset($this->session->data['wishlist']) && (($key = array_search($this->request->post['product_id'], $this->session->data['wishlist'])) !== false)) {
                        unset($this->session->data['wishlist'][$key]);
                    }
        
                    $json['success'] = sprintf($this->language->get('wishlist_remove_success'), $this->url->link('product/product', 'product_id=' . (int)$this->request->post['product_id']), $product_info['name'], $this->url->link('account/wishlist'));
                    $json['total_wishlist'] = (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0);
                }
            }
        
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));
        } else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
    }

    public function allCartProducts() {
        
        $this->load->model('octemplates/helper');
		$product_ids = $this->model_octemplates_helper->getOctCartProducts();

		if (!empty($product_ids)) {
			return implode(',', $product_ids);
		}

		return '';
    }

    public function octReviewReputation() {
        $json = array();

        $this->load->language('octemplates/oct_deals');

        if (isset($this->request->get['review_id'])) {

            $this->load->model('octemplates/helper');

            $check_ip = $this->model_octemplates_helper->checkOctUserIp($this->request->server['REMOTE_ADDR'], $this->request->get['review_id']);

            if ($check_ip) {
            $json['error'] = $this->language->get('error_ip_exist');
            }

            if (!isset($json['error'])) {

                $filter_data = array(
                    'review_id' => (int)$this->request->get['review_id'],
                    'ip' => $this->request->server['REMOTE_ADDR']
                );

                $this->model_octemplates_helper->addOctProductReputation($filter_data);

                $json['success'] = $this->language->get('text_ip_vote_success');

            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function octProductReviews() {

        if (isset($this->request->post['product_id']) && !empty($this->request->post['product_id'])) {
            $this->request->get['product_id'] = $this->request->post['product_id'];
        }

        $data['product_id'] = $product_id = (int) $this->request->get['product_id'] ?? 0;

        if (!$product_id) {
            $data['product_id'] = (int) $this->request->get['oct_product_id'] ?? 0;
        }

        $this->load->language('product/product');
        $this->load->model('catalog/review');
        $this->load->model('octemplates/helper');

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        $reviews_per_page = $this->config->get('theme_oct_deals_data_pr_reviews_limit') ? (int) $this->config->get('theme_oct_deals_data_pr_reviews_limit') : 20;
        
        $review_total = $this->model_catalog_review->getTotalReviewsByProductId($data['product_id']);
        
        $results = $this->model_catalog_review->getReviewsByProductId(
            $data['product_id'],
            ($page - 1) * $reviews_per_page,
            $reviews_per_page
        );

        $data['reviews'] = array();
        foreach ($results as $result) {
            $oct_review_data = $this->model_octemplates_helper->getOctReviewData($result['review_id']);
            $data['reviews'][] = array(
                'author'         => $result['author'],
                'positive_text'  => isset($oct_review_data['positive_text']) ? $oct_review_data['positive_text'] : '',
                'negative_text'  => isset($oct_review_data['negative_text']) ? $oct_review_data['negative_text'] : '',
                'admin_answer'   => isset($oct_review_data['admin_answer']) ? nl2br($oct_review_data['admin_answer']) : '',
                'positive_votes' => isset($oct_review_data['positive_votes']) ? $oct_review_data['positive_votes'] : 0,
                'review_id'      => $result['review_id'],
                'text'           => nl2br($result['text']),
                'rating'         => (int)$result['rating'],
                'date_added'     => $this->load->controller('octemplates/main/oct_functions/OctDateTime', array($result['date_added'], 1))
            );
        }
        
        $data['has_more'] = (($page * $reviews_per_page) < $review_total) ? true : false;
        $data['next_page'] = $page + 1;
        
        $data['ajax'] = false;
        if (!empty($this->request->server['HTTP_X_REQUESTED_WITH']) &&
            strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $data['ajax'] = true;
        }

        $output = $this->load->view('product/review', $data);

        if ($data['ajax']) {
            $this->response->setOutput($output);
        } else {
            return $output;
        }
    }
}