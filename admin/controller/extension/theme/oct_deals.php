<?php
/**
 * @copyright    OCTemplates
 * @support      https://octemplates.net/
 * @license      LICENSE.txt
 */

class ControllerExtensionThemeOCTDeals extends Controller {
	private $error = [];
	private $gretret = [];
	private $oct_theme = 'oct_deals';
	private $version = '1.6.1';

	public function index() {
		$this->load->language('octemplates/theme/'. $this->oct_theme);

		$oct_models = [
			'setting/setting',
			'catalog/category',
			'catalog/product',
			'localisation/language',
			'catalog/information',
			'tool/image',
			'setting/store',
			'customer/customer_group',
			'octemplates/main/oct_settings',
		];

		$oct_styles = [
			'view/javascript/octemplates/codemirror/lib/codemirror.css',
			'view/javascript/summernote/summernote.css',
			'view/javascript/octemplates/spectrum/spectrum.css',
			'view/stylesheet/'. $this->oct_theme .'.css',
		];

		$oct_scripts = [
			'view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js',
			'view/javascript/octemplates/codemirror/lib/codemirror.js',
			'view/javascript/octemplates/codemirror/mode/javascript/javascript.js',
			'view/javascript/octemplates/codemirror/mode/css/css.js',
			'view/javascript/summernote/summernote.js',
			'view/javascript/summernote/summernote-image-attributes.js',
			'view/javascript/summernote/opencart.js',
			'view/javascript/octemplates/spectrum/spectrum.js',
			'view/javascript/octemplates/oct_main.js',
		];

		$oct_error_data = [
			'warning',
			'license',
			'product_limit',
			'product_description_length',
			'image_category',
			'image_sub_category',
			'image_thumb',
			'image_popup',
			'image_product',
			'image_manufacturer',
			'image_additional',
			'image_related',
			'image_compare',
			'image_wishlist',
			'image_cart',
			'image_location',
		];

		foreach ($oct_models as $oct_model) {
			$this->load->model($oct_model);
		}

		foreach ($oct_styles as $oct_style) {
			$this->document->addStyle($oct_style);
		}

		foreach ($oct_scripts as $oct_script) {
			$this->document->addScript($oct_script);
		}

		$store_id = isset($this->request->get['store_id']) ? $this->request->get['store_id'] : 0;

		if (isset($this->request->get['store_id']) && $this->request->get['store_id']) {
			$this->load->model('setting/store');

			$store = $this->model_setting_store->getStore($this->request->get['store_id']);

			$data['heading_title'] = $theme_title = $this->language->get('heading_title') . ' ('. $store['name'] .')';

            $this->document->setTitle($this->language->get('heading_title'));
        } else {
	        $data['heading_title'] = $theme_title = $this->language->get('heading_title') . ' ('. $this->config->get('config_name') .')';

            $this->document->setTitle($theme_title);
        }
		
		if(($this->{$this->_1481607973(0)}->{$this->_1481607973(1)}[$this->_1481607973(2)]==$this->_1481607973(3))&&$this->{$this->_1908729617(0)}()){if(isset($this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(5)])&&!empty($this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(5)])){$this->{$this->_1481607973(6)}->{$this->_1481607973(7)}($this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(5)]);unset($this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(5)]);}else{$this->{$this->_1481607973(6)}->{$this->_1481607973(7)}([]);}if(isset($this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(8)])&&!empty($this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(8)])){$this->{$this->_1481607973(6)}->{$this->_1481607973(9)}($this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(8)]);unset($this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(8)]);}else{$this->{$this->_1481607973(6)}->{$this->_1481607973(9)}([]);}$this->{$this->_1481607973(10)}->{$this->_1481607973(11)}($this->_1481607973(12).$this->{$this->_1481607973(13)},$this->{$this->_1481607973(0)}->{$this->_1481607973(4)},$this->{$this->_1481607973(0)}->{$this->_1481607973(15)}[$this->_1481607973(16)]);$this->generateCss($this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.$this->_1481607973(14)],$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_css_code'],$store_id);$this->cacheDelete();$this->{$this->_1481607973(24)}->{$this->_1481607973(17)}['success']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}($this->_2074209311(2));$this->{$this->_2074209311(3)}->{$this->_2074209311(4)}($this->{$this->_2074209311(5)}->{$this->_2074209311(6)}($this->_1481607973(18).$this->{$this->_1481607973(13)},$this->_1481607973(23).'='.$this->{$this->_1481607973(24)}->{$this->_1481607973(17)}[$this->_1481607973(23)].'&'.$this->_1481607973(16).'='.$this->{$this->_1481607973(0)}->{$this->_1481607973(15)}[$this->_1481607973(16)],true));}

		foreach ($oct_error_data as $error) {
			if (isset($this->error[$error])) {
				$data['error_'.$error] = $this->error[$error];
			} else {
				$data['error_'.$error] = '';
			}
		}

		if (isset($this->request->post['theme_oct_deals_data_pr_reviews_limit'])) {
			$data['theme_oct_deals_data_pr_reviews_limit'] = (int)$this->request->post['theme_oct_deals_data_pr_reviews_limit'];
		} elseif ($this->config->get('theme_oct_deals_data_pr_reviews_limit')) {
			$data['theme_oct_deals_data_pr_reviews_limit'] = (int)$this->config->get('theme_oct_deals_data_pr_reviews_limit');
		} else {
			$data['theme_oct_deals_data_pr_reviews_limit'] = 20;
		}

		if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=theme', true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/theme/'. $this->oct_theme, 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true)
		];

		$data['action'] = $this->url->link('extension/theme/'. $this->oct_theme, 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true);
		$data['cache_delete'] = $this->url->link('extension/theme/'. $this->oct_theme .'/cacheDelete', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true);
		$data['clear_modification'] = $this->url->link('extension/theme/'. $this->oct_theme .'/refresh', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=theme', true);

		if (file_exists(DIR_SYSTEM ."library/octemplates/quickstart/". $this->oct_theme .".sql") || file_exists(DIR_SYSTEM ."library/octemplates/quickstart/". $this->oct_theme .".json")) {
			$data['quick_start'] = $this->url->link('extension/theme/'. $this->oct_theme .'/octQuickStart', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true);
		}

		if (isset($this->request->get['store_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$setting_info = $this->model_setting_setting->getSetting('theme_'. $this->oct_theme, $this->request->get['store_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];
		$data['store_id'] = $store_id;

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['theme_'. $this->oct_theme .'_directory'] = $this->oct_theme;

		$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		foreach ($this->octSettings() as $config) {
			if (isset($this->request->post[$config])) {
				$data[$config] = $this->request->post[$config];
			} elseif (isset($setting_info[$config])) {
				$data[$config] = $setting_info[$config];
			} else {
				$data[$config] = $this->config->get($config);
			}
		}

		$products = array();
        if (isset($this->request->post['theme_oct_deals_popup_cart_recommend_products'])) {
			$products = $this->request->post['theme_oct_deals_popup_cart_recommend_products'];
		} else if (!empty($setting_info['theme_oct_deals_popup_cart_recommend_products'])) {
			$products = $setting_info['theme_oct_deals_popup_cart_recommend_products'];
		}

		$data['product_relateds'] = array();

        if (!empty($products)) {

            foreach ($products as $product_id) {
                $related_info = $this->model_catalog_product->getProduct($product_id);
    
                if ($related_info) {
                    $data['product_relateds'][] = array(
                        'product_id' => $related_info['product_id'],
                        'name'       => $related_info['name']
                    );
                }
            }
        }

		$data['update'] = false;

		$data['hasblog'] = $this->model_octemplates_main_oct_settings->checkIfTableExist(DB_PREFIX . 'oct_blogarticle_related_product') ? true : false;
		
		if (!isset($data['theme_'. $this->oct_theme .'_version']) || $data['theme_'. $this->oct_theme .'_version'] != $this->version) {
			$data['update'] = $this->url->link('extension/theme/'. $this->oct_theme .'/update', 'user_token=' . $this->session->data['user_token'] . '&type=theme' . '&store_id=' . $this->request->get['store_id'], true);
		}

		if (isset($data['theme_'. $this->oct_theme .'_data']['payments']['customers']) && !empty($data['theme_'. $this->oct_theme .'_data']['payments']['customers'])) {
			foreach ($data['theme_'. $this->oct_theme .'_data']['payments']['customers'] as $key => $img) {
				if (isset($img['image']) && !empty($img['image']) && file_exists(DIR_IMAGE.$img['image'])) {
					$data['theme_'. $this->oct_theme .'_data']['payments']['customers'][$key]['thumb_image'] = $this->model_tool_image->resize($img['image'], 52, 32);
				} else {
					$data['theme_'. $this->oct_theme .'_data']['payments']['customers'][$key]['thumb_image'] = $this->model_tool_image->resize('no_image.png', 52, 32);
				}
			}
		}

		if (isset($data['theme_'. $this->oct_theme .'_data']['contact_image']) && !empty($data['theme_'. $this->oct_theme .'_data']['contact_image']) && file_exists(DIR_IMAGE.$data['theme_'. $this->oct_theme .'_data']['contact_image'])) {
			$data['contact_image_thumb'] = $this->model_tool_image->resize($data['theme_'. $this->oct_theme .'_data']['contact_image'], 100, 100);
		} else {
			$data['contact_image_thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 30, 30);
		$data['contact_placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['links_categories'] = [];

		if (isset($data['theme_'. $this->oct_theme .'_data']['footer_category_links']) && !empty($data['theme_'. $this->oct_theme .'_data']['footer_category_links'])) {
			foreach ($data['theme_'. $this->oct_theme .'_data']['footer_category_links'] as $category_id) {
				$category_info = $this->model_catalog_category->getCategory($category_id);

				if ($category_info) {
					$data['links_categories'][] = [
						'category_id' => $category_info['category_id'],
						'name'        => ($category_info['path']) ? $category_info['path'] . ' &gt; ' . $category_info['name'] : $category_info['name']
					];
				}
			}
		}

		$data['oct_locations'] = $this->model_octemplates_main_oct_settings->getOCTLocations();
		$data['oct_megamenu'] = $this->model_octemplates_main_oct_settings->getMenuItems();

		$header_links = [];

		if (isset($data['theme_'. $this->oct_theme .'_data']['header_information_links']) && !empty($data['theme_'. $this->oct_theme .'_data']['header_information_links'])) {
			foreach ($data['theme_'. $this->oct_theme .'_data']['header_information_links'] as $key=>$information_id) {
				$information_info = $this->model_catalog_information->getInformation($information_id);

				if ($information_info) {
					$information_desc = $this->model_catalog_information->getInformationDescriptions($information_id);
					$information_href = $this->model_catalog_information->getInformationSeoUrls($information_id);

					foreach ($data['languages'] as $langs) {
						$header_links[$key][$langs['language_id']]['title'] = $information_desc[$langs['language_id']]['title'];
						$header_links[$key][$langs['language_id']]['link'] = !empty($information_href) ? '/'. $information_href[$store_id][$langs['language_id']] : '/index.php?route=information/information&information_id='.$information_id;
					}
				}
			}
		}

		if (!empty($header_links)) {
			$data['theme_'. $this->oct_theme .'_data']['header_links'] = $header_links;
		}

		$footer_links = [];

		if (isset($data['theme_'. $this->oct_theme .'_data']['footer_information_links']) && !empty($data['theme_'. $this->oct_theme .'_data']['footer_information_links'])) {
			foreach ($data['theme_'. $this->oct_theme .'_data']['footer_information_links'] as $key=>$information_id) {
				$information_info = $this->model_catalog_information->getInformation($information_id);

				if ($information_info) {
					$information_desc = $this->model_catalog_information->getInformationDescriptions($information_id);
					$information_href = $this->model_catalog_information->getInformationSeoUrls($information_id);

					foreach ($data['languages'] as $langs) {
						$footer_links[$key][$langs['language_id']]['title'] = $information_desc[$langs['language_id']]['title'];
						$footer_links[$key][$langs['language_id']]['link'] = !empty($information_href) ? '/'. $information_href[$store_id][$langs['language_id']] : '/index.php?route=information/information&information_id='.$information_id;
					}
				}
			}
		}

		if (!empty($footer_links)) {
			$data['theme_'. $this->oct_theme .'_data']['footer_links'] = $footer_links;
		}

		$mobile_links = [];

		if (isset($data['theme_'. $this->oct_theme .'_data']['mobile_information_links']) && !empty($data['theme_'. $this->oct_theme .'_data']['mobile_information_links'])) {
			foreach ($data['theme_'. $this->oct_theme .'_data']['mobile_information_links'] as $key=>$information_id) {
				$information_info = $this->model_catalog_information->getInformation($information_id);

				if ($information_info) {
					$information_desc = $this->model_catalog_information->getInformationDescriptions($information_id);
					$information_href = $this->model_catalog_information->getInformationSeoUrls($information_id);

					foreach ($data['languages'] as $langs) {
						$mobile_links[$key][$langs['language_id']]['title'] = $information_desc[$langs['language_id']]['title'];
						$mobile_links[$key][$langs['language_id']]['link'] = !empty($information_href) ? '/'. $information_href[$store_id][$langs['language_id']] : '/index.php?route=information/information&information_id='.$information_id;
					}
				}
			}
		}

		if (!empty($mobile_links)) {
			$data['theme_'. $this->oct_theme .'_data']['mobile_links'] = $mobile_links;
		}

		if (!isset($data['theme_'. $this->oct_theme .'_image_logo_width']) || (isset($data['theme_'. $this->oct_theme .'_image_logo_width']) && empty($data['theme_'. $this->oct_theme .'_image_logo_width']))) {
			$data['theme_'. $this->oct_theme .'_image_logo_width'] = 141;
		}

		if (!isset($data['theme_'. $this->oct_theme .'_image_logo_height']) || (isset($data['theme_'. $this->oct_theme .'_image_logo_height']) && empty($data['theme_'. $this->oct_theme .'_image_logo_height']))) {
			$data['theme_'. $this->oct_theme .'_image_logo_height'] = 64;
		}

		$data['stores'][] = [
			'store_id' => 0,
			'name'     => $this->language->get('text_default_theme'),
			'href'		=> $this->url->link('extension/theme/'. $this->oct_theme, 'user_token=' . $this->session->data['user_token'] . '&store_id=0', true)
		];

		$stores = $this->model_setting_store->getStores();

		foreach ($stores as $store) {
			$store_info = $this->model_setting_setting->getSetting('theme_'. $this->oct_theme, $store['store_id']);

			$data['stores'][] = [
				'store_id' => $store['store_id'],
				'name'     => $store['name'],
				'href'		=> $store_info ? $this->url->link('extension/theme/'. $this->oct_theme, 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store['store_id'], true) : $this->url->link('extension/theme/'. $this->oct_theme .'/installStore', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store['store_id'], true)
			];
		}

		$data['customer_groups'] = [];

		$filter_data = [
			'sort'  => 'cgd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => 100000
		];

		$results = $this->model_customer_customer_group->getCustomerGroups($filter_data);

		foreach ($results as $result) {
			$data['customer_groups'][] = array(
				'customer_group_id' => $result['customer_group_id'],
				'name'              => $result['name']
			);
		}

		if (isset($data['theme_'. $this->oct_theme .'_data']['product_delivery']) && !empty($data['theme_'. $this->oct_theme .'_data']['product_delivery'])) {
			foreach ($data['theme_'. $this->oct_theme .'_data']['product_delivery'] as &$delivery_item) {
				if (isset($delivery_item['image']) && is_file(DIR_IMAGE . $delivery_item['image'])) {
					$delivery_item['image_cached'] = $this->model_tool_image->resize($delivery_item['image'], 100, 100);
				} else {
					$delivery_item['image_cached'] = $this->model_tool_image->resize('no_image.png', 100, 100);
				}
			}
			unset($delivery_item);

			usort($data['theme_'. $this->oct_theme .'_data']['product_delivery'], function($a, $b) {
				return $a['sort_order'] <=> $b['sort_order'];
			});
		}

		if (isset($data['theme_'. $this->oct_theme .'_data']['product_payment']) && !empty($data['theme_'. $this->oct_theme .'_data']['product_payment'])) {
			foreach ($data['theme_'. $this->oct_theme .'_data']['product_payment'] as &$payment_item) {
				if (isset($payment_item['image']) && is_file(DIR_IMAGE . $payment_item['image'])) {
					$payment_item['image_cached'] = $this->model_tool_image->resize($payment_item['image'], 100, 100);
				} else {
					$payment_item['image_cached'] = $this->model_tool_image->resize('no_image.png', 100, 100);
				}
			}
			unset($payment_item);

			usort($data['theme_'. $this->oct_theme .'_data']['product_payment'], function($a, $b) {
				return $a['sort_order'] <=> $b['sort_order'];
			});
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/theme/'. $this->oct_theme, $data));
	}

	public function installStore() {
		$this->load->language('octemplates/theme/'. $this->oct_theme);

		$this->load->model('setting/setting');

		$store_id = isset($this->request->get['store_id']) ? $this->request->get['store_id'] : 0;

		$store_info = $this->model_setting_setting->getSetting('theme_'. $this->oct_theme, $store_id);

		if ($store_info) {
			$this->response->redirect($this->url->link('extension/theme/'. $this->oct_theme, 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id, true));
		} else {
			$setting_info = $this->model_setting_setting->getSetting('theme_'. $this->oct_theme, 0);

			$data['theme_'. $this->oct_theme .'_directory'] = $this->oct_theme;

			foreach ($this->octSettings() as $config) {
				if (isset($setting_info[$config])) {
					$data[$config] = $setting_info[$config];
				} else {
					$data[$config] = $this->config->get($config);
				}
			}

			$this->model_setting_setting->editSetting('theme_'. $this->oct_theme, $this->request->post, $this->request->get['store_id']);

			$this->generateCss($this->request->post['theme_'. $this->oct_theme .'_data_colors'], $this->request->post['theme_'. $this->oct_theme .'_data_colors'], $store_id);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/theme/'. $this->oct_theme, 'user_token=' . $this->session->data['user_token'] . '&store_id='. $store_id, true));
		}
	}

	public function getIcons() {
		if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	        $data = [];

	        if (isset($this->request->get['icone_id']) && isset($this->request->get['input_id'])) {
				$this->load->model('octemplates/main/oct_settings');

	            $data['icone_id'] = $this->request->get['icone_id'];
	            $data['input_id'] = $this->request->get['input_id'];

	            $data['fa_icons'] = $this->model_octemplates_main_oct_settings->faIcons();

	            $this->response->setOutput($this->load->view('octemplates/oct_icons', $data));
	        }
        }
    }

    private function generateCss($data, $css_code, $store_id) {
		$css = '';

		if (isset($data['main_color']) && !empty($data['main_color'])) {
			$css .= ".ocf-theme-light-block .ocf-search-btn-static, .ocf-theme-light-block .ocf-search-btn-popover, .ocf-theme-light-block .ocf-search-btn-static.ocf-disabled, .ocf-theme-light-block .ocf-search-btn-popover.ocf-disabled, .ocf-noUi-connect:before, .ocf-noUi-handle {background-color:" . $data['main_color'] . " !important;}" . PHP_EOL;

			$css .= ":root {--ds-primary-color:". $data['main_color'] .";}".PHP_EOL;
		}

		if (isset($data['background_color']) && !empty($data['background_color'])) {
			$css .= ":root {--ds-body-bg-light-color:". $data['background_color'] .";}".PHP_EOL;
		}

		if (isset($data['main_link_color']) && !empty($data['main_link_color'])) {
			$css .= ":root {--ds-links-color:". $data['main_link_color'] .";}".PHP_EOL;
		}

		if (isset($data['top_background_color']) && !empty($data['top_background_color'])) {
			$css .= ".light-theme .ds-header {background:". $data['top_background_color'] .";}".PHP_EOL;
		}

		if (isset($data['top_link_color']) && !empty($data['top_link_color'])) {
			$css .= ".ds-dropdown-links .blue-link, .ds-switcher button {color:". $data['top_link_color'] .";}".PHP_EOL;
		}

		if (isset($data['top_link_color_hover']) && !empty($data['top_link_color_hover'])) {
			$css .= ".ds-dropdown-links .blue-link:hover {color:". $data['top_link_color_hover'] .";}".PHP_EOL;
		}

		if (isset($data['footer_background_color']) && !empty($data['footer_background_color'])) {
			$css .= ":root {--ds-footer-bg-light-color:". $data['footer_background_color'] .";}".PHP_EOL;
		}

		if (isset($data['footer_text_color']) && !empty($data['footer_text_color'])) {
			$css .= ".light-theme .ds-footer-subscribe-text, .light-theme .ds-footer-item .secondary-text, .light-theme .ds-footer-socials .secondary-text {color:". $data['footer_text_color'] .";}".PHP_EOL;
		}

		if (isset($data['footer_contact_link_color']) && !empty($data['footer_contact_link_color'])) {
			$css .= ".ds-footer .blue-link {color:". $data['footer_contact_link_color'] .";}".PHP_EOL;
		}

		if (isset($data['footer_contact_link_hover_color']) && !empty($data['footer_contact_link_hover_color'])) {
			$css .= ".ds-footer .blue-link:hover {color:". $data['footer_contact_link_hover_color'] .";}".PHP_EOL;
		}

		if (isset($data['footer_link_color']) && !empty($data['footer_link_color'])) {
			$css .= ".light-theme .ds-footer-links li a, .light-theme ul.ds-footer-item li a {color:". $data['footer_link_color'] .";}".PHP_EOL;
		}

		if (isset($data['footer_link_hover_color']) && !empty($data['footer_link_hover_color'])) {
			$css .= ".ds-footer-links li a:hover, ul.ds-footer-item li a:hover {color:". $data['footer_link_hover_color'] .";}".PHP_EOL;
		}

		if (isset($data['footer_title_color']) && !empty($data['footer_title_color'])) {
			$css .= ".light-theme .ds-footer-item-title {color:". $data['footer_title_color'] .";}".PHP_EOL;
			$css .= ".light-theme .ds-footer-item-title svg path {fill:". $data['footer_title_color'] .";}".PHP_EOL;
		}

		if (isset($data['interactive_color']) && !empty($data['interactive_color'])) {
			$css .= ":root {--ds-interactive-color:". $data['interactive_color'] .";}".PHP_EOL;
		}

		if (isset($data['special_price_color']) && !empty($data['special_price_color'])) {
			$css .= ".ds-price-new.red-text {color:". $data['special_price_color'] .";}".PHP_EOL;
		}

		if (!isset($data['compare'])) {
			$css .= ".ds-header-compare-button, .ds-mobile-bottom-nav-item-compare, .ds-compare-btn {display: none!important;}".PHP_EOL;
		}

		if (!isset($data['wishlist'])) {
			$css .= ".ds-header-wishlist-button, .ds-mobile-bottom-nav-item-wishlist, .ds-wishlist-btn {display: none!important;}".PHP_EOL;
		}

		if (!empty($css_code)) {
			$css .= ".oct_dynamic_stylesheet_begin{display: none;}".PHP_EOL;
			$css .= html_entity_decode($css_code, ENT_QUOTES, 'UTF-8');
			$css .= ".oct_dynamic_stylesheet_end{display: none;}".PHP_EOL;
		}

		file_put_contents(DIR_CATALOG . 'view/theme/'. $this->oct_theme .'/stylesheet/dynamic_stylesheet_'. $store_id .'.css', $css);
    }

	protected function deleteOldGeneratedFiles($path) {
		if (!is_dir($path)) {
			return;
		}
	
		$files = scandir($path);
		foreach ($files as $file) {
			if ($file === '.' || $file === '..') {
				continue;
			}
	
			$fullPath = $path . $file;
	
			if (is_file($fullPath) && preg_match('/^[a-f0-9]{32}\.(css|js)$/i', $file)) {
				@unlink($fullPath);
			}
		}
	}	

    public function cacheDelete() {
		if ($this->validateModification()) {
			$this->load->language('octemplates/theme/' . $this->oct_theme);
	
			$maintenance = $this->config->get('config_maintenance');
			$this->load->model('setting/setting');
	
			$this->cache->delete('octemplates');
	
			$this->model_setting_setting->editSettingValue('config', 'config_maintenance', true);
	
			if (isset($this->request->get['store_id'])) {
				$store_id = $this->request->get['store_id'];
			} else {
				$store_id = 0;
			}
	
			$setting_info = $this->model_setting_setting->getSetting('theme_' . $this->oct_theme, $store_id);
	
			$oct_colors   = !empty($setting_info['theme_' . $this->oct_theme . '_data_colors']) ? $setting_info['theme_' . $this->oct_theme . '_data_colors'] : [];
			$oct_css_code = !empty($setting_info['theme_' . $this->oct_theme . '_css_code'])    ? $setting_info['theme_' . $this->oct_theme . '_css_code']    : '';
	
			$this->generateCss($oct_colors, $oct_css_code, $store_id);
	
			$minifyDir = rtrim(dirname(DIR_APPLICATION), '/') . '/catalog/view/theme/oct_deals/stylesheet/css/';
			if (is_dir($minifyDir)) {
				$this->deleteOldGeneratedFiles($minifyDir);
			}

			$this->delTree(DIR_CACHE);
	
			if (!file_exists(DIR_CACHE)) {
				mkdir(DIR_CACHE);
	
				$addindexf = fopen(DIR_CACHE . 'index.html', 'w');
				fclose($addindexf);
			}
	
			$this->session->data['success'] = $this->language->get('text_success');
	
			$this->model_setting_setting->editSettingValue('config', 'config_maintenance', $maintenance);
		}
	
		$this->response->redirect(
			$this->url->link(
				'extension/theme/' . $this->oct_theme,
				'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'],
				true
			)
		);
	}

	private function delTree($dir) {
		$files = array_diff(scandir($dir), ['.','..']);

		foreach ($files as $file) {
			(is_dir("$dir/$file")) ? $this->delTree("$dir/$file") : unlink("$dir/$file");
		}

		return rmdir($dir);
	}

	public function refresh($reload = true) {
		$this->load->language('marketplace/modification');

		$this->load->model('setting/modification');

		if ($this->validateModification()) {
			// Just before files are deleted, if config settings say maintenance mode is off then turn it on
			$maintenance = $this->config->get('config_maintenance');

			$this->load->model('setting/setting');

			$this->model_setting_setting->editSettingValue('config', 'config_maintenance', true);

			//Log
			$log = [];

			// Clear all modification files
			$files = [];

			// Make path into an array
			$path = [DIR_MODIFICATION . '*'];

			// While the path array is still populated keep looping through
			while (count($path) != 0) {
				$next = array_shift($path);

				foreach (glob($next) as $file) {
					// If directory add to path array
					if (is_dir($file)) {
						$path[] = $file . '/*';
					}

					// Add the file to the files to be deleted array
					$files[] = $file;
				}
			}

			// Reverse sort the file array
			rsort($files);

			// Clear all modification files
			foreach ($files as $file) {
				if ($file != DIR_MODIFICATION . 'index.html') {
					// If file just delete
					if (is_file($file)) {
						unlink($file);

					// If directory use the remove directory function
					} elseif (is_dir($file)) {
						rmdir($file);
					}
				}
			}

			// Begin
			$xml = [];

			// Load the default modification XML
			$xml[] = file_get_contents(DIR_SYSTEM . 'modification.xml');

			// This is purly for developers so they can run mods directly and have them run without upload after each change.
			$files = glob(DIR_SYSTEM . '*.ocmod.xml');

			if ($files) {
				foreach ($files as $file) {
					$xml[] = file_get_contents($file);
				}
			}

			// Get the default modification file
			$results = $this->model_setting_modification->getModifications();

			foreach ($results as $result) {
				if ($result['status']) {
					$xml[] = $result['xml'];
				}
			}

			$modification = [];

			foreach ($xml as $xml) {
				if (empty($xml)){
					continue;
				}

				$dom = new DOMDocument('1.0', 'UTF-8');
				$dom->preserveWhiteSpace = false;
				$dom->loadXml($xml);

				// Log
				$log[] = 'MOD: ' . $dom->getElementsByTagName('name')->item(0)->textContent;

				// Wipe the past modification store in the backup array
				$recovery = [];

				// Set the a recovery of the modification code in case we need to use it if an abort attribute is used.
				if (isset($modification)) {
					$recovery = $modification;
				}

				$files = $dom->getElementsByTagName('modification')->item(0)->getElementsByTagName('file');

				foreach ($files as $file) {
					$operations = $file->getElementsByTagName('operation');

					$files = explode('|', $file->getAttribute('path'));

					foreach ($files as $file) {
						$path = '';

						// Get the full path of the files that are going to be used for modification
						if ((substr($file, 0, 7) == 'catalog')) {
							$path = DIR_CATALOG . substr($file, 8);
						}

						if ((substr($file, 0, 5) == 'admin')) {
							$path = DIR_APPLICATION . substr($file, 6);
						}

						if ((substr($file, 0, 6) == 'system')) {
							$path = DIR_SYSTEM . substr($file, 7);
						}

						if ($path) {
							$files = glob($path, GLOB_BRACE);

							if ($files) {
								foreach ($files as $file) {
									// Get the key to be used for the modification cache filename.
									if (substr($file, 0, strlen(DIR_CATALOG)) == DIR_CATALOG) {
										$key = 'catalog/' . substr($file, strlen(DIR_CATALOG));
									}

									if (substr($file, 0, strlen(DIR_APPLICATION)) == DIR_APPLICATION) {
										$key = 'admin/' . substr($file, strlen(DIR_APPLICATION));
									}

									if (substr($file, 0, strlen(DIR_SYSTEM)) == DIR_SYSTEM) {
										$key = 'system/' . substr($file, strlen(DIR_SYSTEM));
									}

									// If file contents is not already in the modification array we need to load it.
									if (!isset($modification[$key])) {
										$content = file_get_contents($file);

										$modification[$key] = preg_replace('~\r?\n~', "\n", $content);
										$original[$key] = preg_replace('~\r?\n~', "\n", $content);

										// Log
										$log[] = PHP_EOL . 'FILE: ' . $key;
									}

									foreach ($operations as $operation) {
										$error = $operation->getAttribute('error');

										// Ignoreif
										$ignoreif = $operation->getElementsByTagName('ignoreif')->item(0);

										if ($ignoreif) {
											if ($ignoreif->getAttribute('regex') != 'true') {
												if (strpos($modification[$key], $ignoreif->textContent) !== false) {
													continue;
												}
											} else {
												if (preg_match($ignoreif->textContent, $modification[$key])) {
													continue;
												}
											}
										}

										$status = false;

										// Search and replace
										if ($operation->getElementsByTagName('search')->item(0)->getAttribute('regex') != 'true') {
											// Search
											$search = $operation->getElementsByTagName('search')->item(0)->textContent;
											$trim = $operation->getElementsByTagName('search')->item(0)->getAttribute('trim');
											$index = $operation->getElementsByTagName('search')->item(0)->getAttribute('index');

											// Trim line if no trim attribute is set or is set to true.
											if (!$trim || $trim == 'true') {
												$search = trim($search);
											}

											// Add
											$add = $operation->getElementsByTagName('add')->item(0)->textContent;
											$trim = $operation->getElementsByTagName('add')->item(0)->getAttribute('trim');
											$position = $operation->getElementsByTagName('add')->item(0)->getAttribute('position');
											$offset = $operation->getElementsByTagName('add')->item(0)->getAttribute('offset');

											if ($offset == '') {
												$offset = 0;
											}

											// Trim line if is set to true.
											if ($trim == 'true') {
												$add = trim($add);
											}

											// Log
											$log[] = 'CODE: ' . $search;

											// Check if using indexes
											if ($index !== '') {
												$indexes = explode(',', $index);
											} else {
												$indexes = [];
											}

											// Get all the matches
											$i = 0;

											$lines = explode("\n", $modification[$key]);

											for ($line_id = 0; $line_id < count($lines); $line_id++) {
												$line = $lines[$line_id];

												// Status
												$match = false;

												// Check to see if the line matches the search code.
												if (stripos($line, $search) !== false) {
													// If indexes are not used then just set the found status to true.
													if (!$indexes) {
														$match = true;
													} elseif (in_array($i, $indexes)) {
														$match = true;
													}

													$i++;
												}

												// Now for replacing or adding to the matched elements
												if ($match) {
													switch ($position) {
														default:
														case 'replace':
															$new_lines = explode("\n", $add);

															if ($offset < 0) {
																array_splice($lines, $line_id + $offset, abs($offset) + 1, [str_replace($search, $add, $line)]);

																$line_id -= $offset;
															} else {
																array_splice($lines, $line_id, $offset + 1, [str_replace($search, $add, $line)]);
															}
															break;
														case 'before':
															$new_lines = explode("\n", $add);

															array_splice($lines, $line_id - $offset, 0, $new_lines);

															$line_id += count($new_lines);
															break;
														case 'after':
															$new_lines = explode("\n", $add);

															array_splice($lines, ($line_id + 1) + $offset, 0, $new_lines);

															$line_id += count($new_lines);
															break;
													}

													// Log
													$log[] = 'LINE: ' . $line_id;

													$status = true;
												}
											}

											$modification[$key] = implode("\n", $lines);
										} else {
											$search = trim($operation->getElementsByTagName('search')->item(0)->textContent);
											$limit = $operation->getElementsByTagName('search')->item(0)->getAttribute('limit');
											$replace = trim($operation->getElementsByTagName('add')->item(0)->textContent);

											// Limit
											if (!$limit) {
												$limit = -1;
											}

											// Log
											$match = [];

											preg_match_all($search, $modification[$key], $match, PREG_OFFSET_CAPTURE);

											// Remove part of the the result if a limit is set.
											if ($limit > 0) {
												$match[0] = array_slice($match[0], 0, $limit);
											}

											if ($match[0]) {
												$log[] = 'REGEX: ' . $search;

												for ($i = 0; $i < count($match[0]); $i++) {
													$log[] = 'LINE: ' . (substr_count(substr($modification[$key], 0, $match[0][$i][1]), "\n") + 1);
												}

												$status = true;
											}

											// Make the modification
											$modification[$key] = preg_replace($search, $replace, $modification[$key], $limit);
										}

										if (!$status) {
											// Abort applying this modification completely.
											if ($error == 'abort') {
												$modification = $recovery;
												// Log
												$log[] = 'NOT FOUND - ABORTING!';
												break 5;
											}
											// Skip current operation or break
											elseif ($error == 'skip') {
												// Log
												$log[] = 'NOT FOUND - OPERATION SKIPPED!';
												continue;
											}
											// Break current operations
											else {
												// Log
												$log[] = 'NOT FOUND - OPERATIONS ABORTED!';
											 	break;
											}
										}
									}
								}
							}
						}
					}
				}

				// Log
				$log[] = '----------------------------------------------------------------';
			}

			// Log
			$ocmod = new Log('ocmod.log');
			$ocmod->write(implode("\n", $log));

			// Write all modification files
			foreach ($modification as $key => $value) {
				// Only create a file if there are changes
				if ($original[$key] != $value) {
					$path = '';

					$directories = explode('/', dirname($key));

					foreach ($directories as $directory) {
						$path = $path . '/' . $directory;

						if (!is_dir(DIR_MODIFICATION . $path)) {
							@mkdir(DIR_MODIFICATION . $path, 0777);
						}
					}

					$handle = fopen(DIR_MODIFICATION . $key, 'w');

					fwrite($handle, $value);

					fclose($handle);
				}
			}

			// Maintance mode back to original settings
			$this->model_setting_setting->editSettingValue('config', 'config_maintenance', $maintenance);

			// Do not return success message if refresh() was called with $data
			$this->session->data['success'] = $this->language->get('text_success');

			$handle = fopen(DIR_LOGS . 'ocmod.log', 'w+');

			fclose($handle);

			$url = '';

			if (isset($this->request->get['store_id'])) {
				$url .= '&store_id=' . $this->request->get['store_id'];
			} else {
				$url .= '&store_id=0';
			}

			if ($reload) {
				$this->response->redirect($this->url->link('extension/theme/'. $this->oct_theme, 'user_token=' . $this->session->data['user_token'] . '&type=theme' . $url, true));
			}
		}
	}

	public function octInstallEvents() {

		$this->octUninstallEvents();

		// Install theme events
		$this->load->model('setting/event');
	
		$events = [
			[
				'code' => 'octemplates-deals-header',
				'trigger' => 'catalog/view/common/header/before',
				'action' => 'octemplates/events/header'
			],
			[
				'code' => 'octemplates-deals-footer',
				'trigger' => 'catalog/view/common/footer/before',
				'action' => 'octemplates/events/footer'
			],
			[
				'code' => 'octemplates-deals-google-ecommerce-set-data',
				'trigger' => 'catalog/controller/checkout/success/before',
				'action' => 'octemplates/events/ecommerce/setOctEcommerceData'
			],
			[
				'code' => 'octemplates-deals-google-ecommerce-get-data',
				'trigger' => 'catalog/view/common/success/before',
				'action' => 'octemplates/events/ecommerce/getOctEcommerceData'
			],
			[
				'code' => 'octemplates-deals-live-search',
				'trigger' => 'catalog/view/common/search/before',
				'action' => 'octemplates/events/live_search'
			],
			[
				'code' => 'octemplates-deals-microdata',
				'trigger' => 'catalog/view/*/before',
				'action' => 'octemplates/events/microdata'
			],
			[
				'code' => 'octemplates-deals-admin-user-account-frontend',
				'trigger' => 'admin/view/extension/module/account/after',
				'action' => 'octemplates/events/user_account/adminFront'
			],
			[
				'code' => 'octemplates-deals-user-account-frontend',
				'trigger' => 'catalog/view/extension/module/account/before',
				'action' => 'octemplates/events/user_account/userFront'
			],
			[
				'code' => 'octemplates-deals-user-account-pageinfo',
				'trigger' => 'catalog/view/account/account/before',
				'action' => 'octemplates/events/user_account/accountPageInfo'
			],
			[
				'code' => 'octemplates-deals-user-account-sms-otp',
				'trigger' => 'catalog/view/account/login/before',
				'action' => 'octemplates/events/user_account/accountLoginOtp'
			],
			[
				'code' => 'octemplates-deals-admin-menu',
				'trigger' => 'admin/view/common/column_left/before',
				'action' => 'octemplates/events/admin_menu'
			],
			[
				'code' => 'octemplates-deals-admin-header',
				'trigger' => 'admin/controller/common/header/before',
				'action' => 'octemplates/events/admin_header/headerBack'
			],
			[
				'code' => 'octemplates-deals-admin-header-front',
				'trigger' => 'admin/view/common/header/before',
				'action' => 'octemplates/events/admin_header/headerFront'
			],
			[
				'code' => 'octemplates-deals-admin-header-front-replace',
				'trigger' => 'admin/view/common/header/after',
				'action' => 'octemplates/events/admin_header/headerAddOctData'
			],
			[
				'code' => 'octemplates-deals-product-views-history',
				'trigger' => 'catalog/controller/product/product/before',
				'action' => 'octemplates/events/product_views_history'
			],
			[
				'code' => 'octemplates-deals-category-module',
				'trigger' => 'catalog/view/extension/module/category/before',
				'action' => 'octemplates/events/category_module'
			],
			[
				'code' => 'octemplates-deals-menu-module',
				'trigger' => 'catalog/view/common/menu/before',
				'action' => 'octemplates/events/menu_module'
			],
			[
				'code' => 'octemplates-deals-catalog-product-view-before-modification',
				'trigger' => 'catalog/view/product/product/before',
				'action' => 'octemplates/events/catalog_product_modification'
			],
			[
				'code' => 'octemplates-deals-admin-review-add',
				'trigger' => 'admin/model/catalog/review/addReview/after',
				'action' => 'octemplates/events/admin_review/afterAdd'
			],
			[
				'code' => 'octemplates-deals-admin-review-edit',
				'trigger' => 'admin/model/catalog/review/editReview/after',
				'action' => 'octemplates/events/admin_review/afterEdit'
			],
			[
				'code' => 'octemplates-deals-admin-review-edit-form',
				'trigger' => 'admin/view/catalog/review_form/before',
				'action' => 'octemplates/events/admin_review/adminEditForm'
			],
			[
				'code' => 'octemplates-deals-load-language',
				'trigger' => 'catalog/language/*/after',
				'action' => 'octemplates/events/load_custom_language'
			],
			[
				'code' => 'octemplates-deals-order-sms-notify',
				'trigger' => 'catalog/model/checkout/order/addOrder/after',
				'action' => 'octemplates/events/sms_notify/order'
			]
		];
	
		foreach ($events as $event) {
			if (!$this->model_setting_event->getEventByCode($event['code'])) {
				$this->model_setting_event->addEvent($event['code'], $event['trigger'], $event['action'], 1, 550);
			}
		}
	}

	public function octUninstallEvents() {
		// Uninstall theme events
		$this->load->model('setting/event');

		$eventCodes = [
			'octemplates-deals-header',
			'octemplates-deals-footer',
			'octemplates-deals-google-ecommerce-set-data',
			'octemplates-deals-google-ecommerce-get-data',
			'octemplates-deals-live-search',
			'octemplates-deals-microdata',
			'octemplates-deals-admin-user-account-frontend',
			'octemplates-deals-user-account-frontend',
			'octemplates-deals-user-account-pageinfo',
			'octemplates-deals-user-account-sms-otp',
			'octemplates-deals-admin-menu',
			'octemplates-deals-product-views-history',
			'octemplates-deals-admin-header',
			'octemplates-deals-admin-header-front',
			'octemplates-deals-admin-header-front-replace',
			'octemplates-deals-category-module',
			'octemplates-deals-menu-module',
			'octemplates-deals-catalog-product-view-before-modification',
			'octemplates-deals-admin-review-add',
			'octemplates-deals-admin-review-edit',
			'octemplates-deals-admin-review-edit-form',
			'octemplates-deals-load-language',
			'octemplates-deals-order-sms-notify'
		];

		foreach ($eventCodes as $code) {
			if ($this->model_setting_event->getEventByCode($code)) {
				$this->model_setting_event->deleteEventByCode($code);
			}
		}
	}

	public function update() {
		if (isset($this->request->get['store_id'])) {
			$url = '&store_id=' . $this->request->get['store_id'];
			$store_id = $this->request->get['store_id'];
		} else {
			$url = '&store_id=0';
			$store_id = 0;
		}

		$this->load->model('setting/setting');
		$this->load->model('setting/store');
		$this->load->model('setting/event');
		$this->load->model('localisation/language');
		$this->load->model('octemplates/main/oct_settings');

		$stores = $this->model_setting_store->getStores();

		if ($stores) {
			$this->model_setting_setting->editSettingValue('theme_'. $this->oct_theme, 'theme_'. $this->oct_theme .'_version', $this->version, 0);

			foreach ($stores as $store) {
				$this->model_setting_setting->editSettingValue('theme_'. $this->oct_theme, 'theme_'. $this->oct_theme .'_version', $this->version, $store['store_id']);
			}
		} else {
			$this->model_setting_setting->editSettingValue('theme_'. $this->oct_theme, 'theme_'. $this->oct_theme .'_version', $this->version, $store_id);
		}
		
		// add module permissions
		$modulesPermission = [
			'octemplates/module/oct_review_reminder',
			'octemplates/module/oct_sms_notify',
			'octemplates/module/oct_otp_login',
			'octemplates/module/oct_abandoned_cart',
			'octemplates/module/oct_smart_register',
		];

		foreach ($modulesPermission as $module) {
			$this->addModulePermission($module);
		}

		/*
		// events
		$modules = [
			[
				'setting' => 'oct_fastorder_data',
				'key' => 'oct_fastorder_data.status',
				'value' => 1,
				'controller' => 'octemplates/module/oct_fastorder/addEvent'
			],
			[
				'setting' => 'oct_404_page',
				'key' => 'oct_404_page_status',
				'value' => 'on',
				'controller' => 'octemplates/module/oct_404_page/addEvent'
			]
		];
		
		// add events
		foreach ($modules as $module) {
			$data = $this->model_setting_setting->getSetting($module['setting']);
		
			if ($this->getValueByKey($data, $module['key']) == $module['value']) {
				$this->load->controller($module['controller']);
			}
		}*/	

		$filesToDelete = [
			'oct_deals_theme_langs.ocmod.xml'
		];
		
		foreach ($filesToDelete as $file) {
			$filePath = DIR_SYSTEM . $file;
			if (file_exists($filePath)) {
				unlink($filePath);
			}
		}	

		if (is_dir($this->request->server['DOCUMENT_ROOT'] . '/min/')) {
			$this->delTree($this->request->server['DOCUMENT_ROOT'] . '/min/');
		}

		$bestseller_check_query = $this->db->query("SHOW KEYS FROM " . DB_PREFIX . "order_product  WHERE Key_name = 'product_id'");

		if ($bestseller_check_query->num_rows == 0) {
			$mysql_bestseller = "ALTER TABLE " . DB_PREFIX . "order_product ADD INDEX product_id (product_id) ";
			$query_bestseller = $this->db->query($mysql_bestseller);
		}

		$this->octInstallEvents();
		$this->refresh(false);
		$this->cacheDelete();

	}

	public function octSettings() {
		return [
			'theme_'. $this->oct_theme .'_status',
			'theme_'. $this->oct_theme .'_version',
			'theme_'. $this->oct_theme .'_license',
			'theme_'. $this->oct_theme .'_scripts_in_footer',
			'theme_'. $this->oct_theme .'_data_colors',
			'theme_'. $this->oct_theme .'_css_code',
			'theme_'. $this->oct_theme .'_js_code',
			'theme_'. $this->oct_theme .'_webp',
			'theme_'. $this->oct_theme .'_no_quantity_last',
			'theme_'. $this->oct_theme .'_no_quantity_grayscale',
			'theme_'. $this->oct_theme .'_sort_data',
			'theme_'. $this->oct_theme .'_data',
			'theme_'. $this->oct_theme .'_data_osucsess',
			'theme_'. $this->oct_theme .'_data_atributes',
			'theme_'. $this->oct_theme .'_data_cat_atr_limit',
			'theme_'. $this->oct_theme .'_data_model',
			'theme_'. $this->oct_theme .'_popup_cart_status',
			'theme_'. $this->oct_theme .'_popup_free_shipping_from',
			'theme_'. $this->oct_theme .'_popup_minimum_order_amount',
			'theme_'. $this->oct_theme .'_popup_cart_recommend_status',
			'theme_'. $this->oct_theme .'_popup_cart_autorelated_status',
			'theme_'. $this->oct_theme .'_popup_cart_relatedbysales_status',
			'theme_'. $this->oct_theme .'_popup_cart_recommend_width',
			'theme_'. $this->oct_theme .'_popup_cart_recommend_height',
			'theme_'. $this->oct_theme .'_popup_cart_data',
			'theme_'. $this->oct_theme .'_isPopup',
			'theme_'. $this->oct_theme .'_data_pr_atr_limit',
			'theme_'. $this->oct_theme .'_product_limit',
			'theme_'. $this->oct_theme .'_product_description_length',
			'theme_'. $this->oct_theme .'_image_logo_width',
			'theme_'. $this->oct_theme .'_image_logo_height',
			'theme_'. $this->oct_theme .'_image_category_width',
			'theme_'. $this->oct_theme .'_image_category_height',
			'theme_'. $this->oct_theme .'_image_sub_category_width',
			'theme_'. $this->oct_theme .'_image_sub_category_height',
			'theme_'. $this->oct_theme .'_image_thumb_width',
			'theme_'. $this->oct_theme .'_image_thumb_height',
			'theme_'. $this->oct_theme .'_image_popup_width',
			'theme_'. $this->oct_theme .'_image_popup_height',
			'theme_'. $this->oct_theme .'_image_product_width',
			'theme_'. $this->oct_theme .'_image_product_height',
			'theme_'. $this->oct_theme .'_image_manufacturer_width',
			'theme_'. $this->oct_theme .'_image_manufacturer_height',
			'theme_'. $this->oct_theme .'_image_additional_width',
			'theme_'. $this->oct_theme .'_image_additional_height',
			'theme_'. $this->oct_theme .'_image_related_width',
			'theme_'. $this->oct_theme .'_image_related_height',
			'theme_'. $this->oct_theme .'_image_compare_width',
			'theme_'. $this->oct_theme .'_image_compare_height',
			'theme_'. $this->oct_theme .'_image_wishlist_width',
			'theme_'. $this->oct_theme .'_image_wishlist_height',
			'theme_'. $this->oct_theme .'_image_cart_width',
			'theme_'. $this->oct_theme .'_image_cart_height',
			'theme_'. $this->oct_theme .'_image_location_width',
			'theme_'. $this->oct_theme .'_image_location_height',
			'theme_'. $this->oct_theme .'_alert_status',
			'theme_'. $this->oct_theme .'_alert_data',
			'theme_'. $this->oct_theme .'_bar_data',
			'theme_'. $this->oct_theme .'_live_search_status',
			'theme_'. $this->oct_theme .'_live_search_data',
			'theme_'. $this->oct_theme .'_feedback_status',
			'theme_'. $this->oct_theme .'_feedback_data',
			'theme_'. $this->oct_theme .'_seo_title_status',
			'theme_'. $this->oct_theme .'_seo_title_data',
			'theme_'. $this->oct_theme .'_seo_url_status',
			'theme_'. $this->oct_theme .'_seo_url_data',
			'theme_'. $this->oct_theme .'_seo_home_status',
			'theme_'. $this->oct_theme .'_seo_home_data',
			'theme_'. $this->oct_theme .'_seo_home_image_status',
			'theme_'. $this->oct_theme .'_seo_home_image_data',

			
		];
	}

	public function install() {
		$this->load->model('setting/setting');
		$this->load->model('user/user_group');
		$this->load->model('octemplates/main/oct_settings');
		$this->load->model('octemplates/design/oct_banner_plus');
        $this->load->model('octemplates/design/oct_slideshow_plus');
        $this->load->model('octemplates/faq/oct_product_faq');
        $this->load->model('octemplates/module/oct_product_main_image_option');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/theme/'. $this->oct_theme);
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/theme/'. $this->oct_theme);

		$this->model_setting_setting->editSetting('theme_'. $this->oct_theme, [
			'theme_'. $this->oct_theme .'_status' => 0,
			'theme_'. $this->oct_theme .'_version' => $this->version,
			'theme_'. $this->oct_theme .'_license' => '',
			'theme_'. $this->oct_theme .'_directory' => $this->oct_theme,
			'theme_'. $this->oct_theme .'_product_limit' => 24,
			'theme_'. $this->oct_theme .'_product_description_length' => 250,
			'theme_'. $this->oct_theme .'_image_sub_category_width' => 60,
			'theme_'. $this->oct_theme .'_image_sub_category_height' => 60,
			'theme_'. $this->oct_theme .'_image_logo_width' => 75,
			'theme_'. $this->oct_theme .'_image_logo_height' => 35,
			'theme_'. $this->oct_theme .'_image_category_width' => 180,
			'theme_'. $this->oct_theme .'_image_category_height' => 160,
			'theme_'. $this->oct_theme .'_image_manufacturer_width' => 60,
			'theme_'. $this->oct_theme .'_image_manufacturer_height' => 60,
			'theme_'. $this->oct_theme .'_image_thumb_width' => 800,
			'theme_'. $this->oct_theme .'_image_thumb_height' => 800,
			'theme_'. $this->oct_theme .'_image_popup_width' => 800,
			'theme_'. $this->oct_theme .'_image_popup_height' => 800,
			'theme_'. $this->oct_theme .'_image_product_width' => 228,
			'theme_'. $this->oct_theme .'_image_product_height' => 228,
			'theme_'. $this->oct_theme .'_image_additional_width' => 80,
			'theme_'. $this->oct_theme .'_image_additional_height' => 80,
			'theme_'. $this->oct_theme .'_image_related_width' => 228,
			'theme_'. $this->oct_theme .'_image_related_height' => 228,
			'theme_'. $this->oct_theme .'_image_compare_width' => 90,
			'theme_'. $this->oct_theme .'_image_compare_height' => 90,
			'theme_'. $this->oct_theme .'_image_wishlist_width' => 100,
			'theme_'. $this->oct_theme .'_image_wishlist_height' => 100,
			'theme_'. $this->oct_theme .'_image_cart_width' => 100,
			'theme_'. $this->oct_theme .'_image_cart_height' => 100,
			'theme_'. $this->oct_theme .'_image_location_width' => 360,
			'theme_'. $this->oct_theme .'_image_location_height' => 320,
			'theme_'. $this->oct_theme .'_scripts_in_footer' => 0,
			'theme_'. $this->oct_theme .'_data_pr_atr_limit' => 5,
			'theme_'. $this->oct_theme .'_css_code' => '',
			'theme_'. $this->oct_theme .'_js_code' => '',
			'theme_'. $this->oct_theme .'_webp' => 0,
			'theme_'. $this->oct_theme .'_no_quantity_last' => 1,
			'theme_'. $this->oct_theme .'_no_quantity_grayscale' => 1,
			'theme_'. $this->oct_theme .'_data_atributes' => 0,
			'theme_'. $this->oct_theme .'_data_cat_atr_limit' => 5,
			'theme_'. $this->oct_theme .'_data_model' => 0,
			'theme_'. $this->oct_theme .'_data_colors' => [
				'main_color' => 'rgb(0, 168, 232)',
				'background_color' => 'rgb(248, 251, 253)',
				'main_link_color' => 'rgb(0, 168, 232)',
				'special_price_color' => 'rgb(213, 56, 61)',
				'interactive_color' => 'rgb(82, 187, 56)',
				'top_background_color' => 'rgb(255, 255, 255)',
				'top_link_color' => 'rgb(0, 168, 232)',
				'top_link_color_hover' => 'rgb(0, 168, 232)',
				'footer_background_color' => 'rgb(255, 255, 255)',
				'footer_text_color' => 'rgb(0, 52, 89)',
				'footer_link_color' => 'rgb(0, 52, 89)',
				'footer_link_hover_color' => 'rgb(0, 168, 232)',
				'footer_contact_link_color' => 'rgb(0, 168, 232)',
				'footer_contact_link_hover_color' => 'rgb(0, 168, 232)',
				'footer_title_color' => 'rgb(0, 23, 31)',
				'compare' => 1,
				'wishlist' => 1,
			],
			'theme_'. $this->oct_theme .'_sort_data' => [
				'deff_sort' => 'p.sort_order-ASC',
				'sorts' => [
					'p.sort_order-ASC',
					'p.sort_order-DESC',
					'pd.name-ASC',
					'pd.name-DESC',
					'p.price-ASC',
					'p.price-DESC',
					'p.model-ASC',
					'p.model-DESC',
					'p.quantity-ASC',
					'p.quantity-DESC',
					'p.viewed-ASC',
					'p.viewed-DESC',
					'p.date_added-ASC',
					'p.date_added-DESC',
					'rating-ASC',
					'rating-DESC',
				],
			],
			'theme_'. $this->oct_theme .'_data' => [
				'minify' => 1,
				'footer_scripts' => 0,
				'micro' => 1,
				'dark_theme' => 1,
				'font' => 0,
				'width' => 1,
				'open_graph' => 0,
				'header_information_links' => [],
				'header_account' => 1,
				'header_cur' => 1,
				'isbuttoninteractive' => 1,
				'oct_popup_options' => 1,
				'header_lang' => 1,
				'footer_totop' => 1,
				'footer_subscribe' => 1,
				'footer_link_contact' => 1,
				'footer_link_return' => 1,
				'footer_link_sitemap' => 1,
				'footer_link_man' => 1,
				'footer_link_cert' => 1,
				'footer_link_partners' => 1,
				'footer_link_specials' => 1,
				'footer_information_links' => [],
				'footer_category_links' => [],
				'mobile_information_links' => [],
				'megamenu' => [
					'status' => 1,
					'dtitle' => [],
					'dcategories' => 1,
					'limit' => 0,
					'icon' => 1,
					'page' => 1,
					'view' => 1,
					'sort' => 1,
				],
				'contact_address' => [],
				'contact_telephone' => $this->config->get('config_telephone'),
				'contact_open' => [],
				'contact_map' => '',
				'contact_email' => $this->config->get('config_email'),
				'contact_skype' => '',
				'contact_whatsapp' => $this->config->get('config_telephone'),
				'contact_viber' => $this->config->get('config_telephone'),
				'contact_telegram' => $this->config->get('config_telephone'),
				'contact_messenger' => '',
				'contact_paymants' => [],
				'contact_socials' => [],
				'contact_image' => '',
				'man_logo' => 1,
				'contact_view_map' => 1,
				'contact_view_locations' => 1,
				'contact_view_socials' => 1,
				'contact_view_time' => 1,
				'contact_view_phone' => 1,
				'contact_view_address' => 1,
				'contact_view_html' => [],
				'category_desc_position' => 'bottom',
				'category_desc_up' => '0',
				'category_desc_in_page' => 1,
				'category_view_subcats' => 1,
				'category_subcat_products' => 1,
				'category_cat_image' => 1,
				'category_page' => 1,
				'category_view_sort_oder' => 1,
				'category_view_quantity' => 1,
				'category_show_more' => 1,
				'category_infinite_scroll' => 0,
				'category_subcategory_photo' => 1,
				'category_show_type' => 'width-50',
				'product_dop_tab' => 0,
				'product_dop_tab_title' => [],
				'product_dop_tab_text' => [],
				'product_js_button' => '',
				'product_model' => 1,
				'product_blog_related' => 0,
				'product_zoom' => 0,
				'product_faq' => 1,
				'product_sets' => 0,
				'product_quantity_show' => 1,
				'product_advantage' => 0,
				'product_advantages' => [],
				'product_delivery' => [],
				'product_payment' => [],
				'product_atributes' => 1,
                'product_timer' => 1,
				'preload_images' => 1,
				'socials' => [
					0 => [
						'icone' => 'fab fa-facebook-f',
						'link' => '',
						'title' => 'Facebook'
					],
					1 => [
						'icone' => 'fab fa-twitter',
						'link' => '',
						'title' => 'Twitter'
					],
					2 => [
						'icone' => 'fab fa-instagram',
						'link' => '',
						'title' => 'Instagram'
					],
				],
				'payments' => [
					'privat24' => 1,
					'visa' => 1,
					'skrill' => 0,
					'interkassa' => 0,
					'lp' => 0,
					'pp' => 0,
					'mc' => 1,
					'maestro' => 0,
					'customers' => [],
				]
			],
			'theme_'. $this->oct_theme .'_popup_cart_status' => 1,
			'theme_'. $this->oct_theme .'_isPopup' => 1,
			'theme_'. $this->oct_theme .'_popup_free_shipping_from' => 0,
			'theme_'. $this->oct_theme .'_popup_minimum_order_amount' => 0,
			'theme_'. $this->oct_theme .'_popup_cart_recommend_status' => 0,
			'theme_'. $this->oct_theme .'_popup_cart_autorelated_status' => 0,
			'theme_'. $this->oct_theme .'_popup_cart_relatedbysales_status' => 0,
			'theme_'. $this->oct_theme .'_popup_cart_recommend_width' => 98,
			'theme_'. $this->oct_theme .'_popup_cart_recommend_height' => 98,
			'theme_'. $this->oct_theme .'_popup_cart_data' => [],
			'theme_'. $this->oct_theme .'_alert_status' => 0,
			'theme_'. $this->oct_theme .'_alert_data' => [
				'orders' => 0,
				'products' => 0,
				'oct_modules' => 0,
			],
			'theme_'. $this->oct_theme .'_bar_data' => [
				'status' => 1,
				'position' => 'right',
				'show_wishlist' => 1,
				'show_compare' => 1,
				'show_cart' => 1,
				'show_views' => 1,
				'show_account' => 1,
			],
			'theme_'. $this->oct_theme .'_feedback_status' => 1,
			'theme_'. $this->oct_theme .'_feedback_data' => [
				'feedback_messenger' => 1,
				'feedback_viber' => 1,
				'feedback_telegram' => 1,
				'feedback_skype' => 1,
				'feedback_whatsapp' => 1,
				'feedback_email' => 1,
				'feedback_callback' => 1,
				'feedback_contact_link' => 1,
			],
			'theme_'. $this->oct_theme .'_live_search_status' => 1,
			'theme_'. $this->oct_theme .'_live_search_data' => [
				'delay' => 500,
				'price' => 1,
				'model' => 1,
				'sku' => 1,
				'description' => 0,
				'category' => 1,
				'category_images' => 1,
				'found_in_categories' => 1,
				'manufacturer' => 1,
				'manufacturer_images' => 1,
				'search_fallback' => 1,
				'search_fallback_start' => 4,
				'count_symbol' => 3,
				'count_subresults' => 4,
				'limit_products' => 8,
				'limit_entities' => 12,
			],
			'theme_'. $this->oct_theme .'_seo_url_status' => 0,
			'theme_'. $this->oct_theme .'_seo_url_data' => [
				'lang_prefix' => [],
				'product' => '[name]-[model]-[lang_prefix]',
				'category' => '[name]-[lang_prefix]',
				'manufacturer' => '[name]-[lang_prefix]',
				'information' => '[name]-[lang_prefix]',
				'blog_category' => '[name]-[lang_prefix]',
				'blog_article' => '[name]-[lang_prefix]',
			],
			'theme_'. $this->oct_theme .'_seo_title_status' => 0,
			'theme_'. $this->oct_theme .'_seo_title_data' => [
				'product' => [
					'title_status' => 0,
					'title_empty' => 0,
					'title' => '',
					'description_status' => 0,
					'description_empty' => 0,
					'description' => ''
				],
				'category' => [
					'title_status' => 0,
					'title_empty' => 0,
					'title' => '',
					'description_status' => 0,
					'description_empty' => 0,
					'description' => ''
				],
				'manufacturer' => [
					'title_status' => 0,
					'title' => '',
					'description_status' => 0,
					'description' => ''
				]
			],	
			'theme_'. $this->oct_theme .'_seo_home_status' => 0,
			'theme_'. $this->oct_theme .'_seo_home_data' => [
				'title' => '',
				'description' => ''
			],
			'theme_'. $this->oct_theme .'_seo_home_image_status' => 0,
			'theme_'. $this->oct_theme .'_seo_home_image_data' => [
				'image' => ''
			],
		]);

		if (isset($this->request->get['store_id'])) {
			$store_id = $this->request->get['store_id'];
		} else {
			$store_id = 0;
		}

		//$this->model_setting_setting->editSettingValue('developer', 'developer_sass', 1, $store_id);

		$this->model_octemplates_main_oct_settings->installOCTLocation();
		$this->model_octemplates_main_oct_settings->installOCTMenu();
        $this->model_octemplates_main_oct_settings->installOCTFields();
		$this->model_octemplates_main_oct_settings->installReviewsTables();
		$this->model_octemplates_design_oct_banner_plus->createDBTables();
        $this->model_octemplates_design_oct_slideshow_plus->createDBTables();
        $this->model_octemplates_faq_oct_product_faq->createDBTables();
        $this->model_octemplates_module_oct_product_main_image_option->makeDB();

		$this->model_setting_setting->editSetting('oct_product_main_image_option', [
	        'oct_product_main_image_option_status' => '0'
        ]);


		$this->addOctPermissions('blog', glob(DIR_APPLICATION . 'controller/octemplates/blog/*.php'));
		$this->addOctPermissions('faq', glob(DIR_APPLICATION . 'controller/octemplates/faq/*.php'));
		$this->addOctPermissions('design', glob(DIR_APPLICATION . 'controller/octemplates/design/*.php'));
		$this->addOctPermissions('module', glob(DIR_APPLICATION . 'controller/octemplates/module/*.php'));
		$this->addOctPermissions('stickers', glob(DIR_APPLICATION . 'controller/octemplates/stickers/*.php'));
		$this->addOctPermissions('menu', glob(DIR_APPLICATION . 'controller/octemplates/menu/*.php'));
		$this->octInstallEvents();
	}

	public function octQuickStart() {
		if (file_exists(DIR_SYSTEM ."library/octemplates/quickstart/". $this->oct_theme .".sql") && $this->config->get('theme_'. $this->oct_theme .'_license')) {
			$this->load->model('octemplates/blog/oct_blogsettings');
			$this->model_octemplates_blog_oct_blogsettings->createDBTables();

			$this->load->model('octemplates/module/oct_popup_call_phone');
			$this->model_octemplates_module_oct_popup_call_phone->makeDB();

			$this->load->model('octemplates/module/oct_popup_found_cheaper');
			$this->model_octemplates_module_oct_popup_found_cheaper->makeDB();

			$this->load->model('octemplates/module/oct_product_tabs_settings');
			$this->model_octemplates_module_oct_product_tabs_settings->makeDB();

			$this->load->model('octemplates/module/oct_sreview_reviews');
			$this->model_octemplates_module_oct_sreview_reviews->installTables();

			$this->load->model('octemplates/module/oct_subscribe');
			$this->model_octemplates_module_oct_subscribe->makeDB();

			$this->octInstallEvents();

			//$settings = json_decode(file_get_contents(DIR_SYSTEM ."library/octemplates/quickstart/". $this->oct_theme .".json"));
			$database = DIR_SYSTEM ."library/octemplates/quickstart/". $this->oct_theme .".sql";
			$lines = file($database);

			if ($lines) {
				$sql = '';

				$oct_license = $this->config->get('theme_'. $this->oct_theme .'_license');
				$config_currency = $this->config->get('config_currency');
				$config_admin_language = $this->config->get('config_admin_language');
				$config_language = $this->config->get('config_language');

				$man_descr = $this->db->query("SELECT COUNT(*) as total FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '". DB_DATABASE ."' AND TABLE_NAME = '". DB_PREFIX ."manufacturer_description'");

				$del_man_descr = ($man_descr->row['total'] == 0) ? true : false;

				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."attribute`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."attribute_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."attribute_group`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."attribute_group_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."banner`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."banner_image`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."category`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."category_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."category_filter`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."category_path`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."category_to_layout`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."category_to_store`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."extension`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."information`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."information_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."information_to_layout`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."information_to_store`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."language`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."layout`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."layout_module`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."layout_route`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."manufacturer`");

				if (!$del_man_descr) {
					$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."manufacturer_description`");
					$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."manufacturer_to_layout`");
				}

				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."manufacturer_to_store`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."module`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_banner_plus`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_banner_plus_image`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_banner_plus_image_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogarticle`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogarticle_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogarticle_image`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogarticle_related`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogarticle_related_product`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogarticle_to_category`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogarticle_to_layout`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogarticle_to_store`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogcategory`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogcategory_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogcategory_path`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogcategory_to_layout`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogcategory_to_store`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_blogcomments`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_extra_tabs`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_extra_tabs_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_faq`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_location`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_menu`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_menu_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_menu_to_customer_group`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_menu_to_store`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_product_extra_tabs`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_slideshow_plus`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_slideshow_plus_image`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_slideshow_plus_image_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_slideshow_plus_product`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_sreview_reviews`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_sreview_reviews_vote`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_sreview_subject`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_sreview_subject_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_sreview_subject_to_store`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."oct_subscribe`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."option`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."option_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."option_value`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."option_value_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_attribute`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_discount`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_filter`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_image`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_option`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_option_value`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_related`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_reward`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_special`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_to_category`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_to_layout`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."product_to_store`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."setting`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."order_status`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."weight_class_description`");
				$this->db->query("TRUNCATE TABLE `". DB_PREFIX ."length_class_description`");

				foreach($lines as $line) {
					if ($line && (substr($line, 0, 2) != '--') && (substr($line, 0, 1) != '#')) {
						$sql .= $line;

						if (preg_match('/;\s*$/', $line)) {
							$sql = str_replace("CREATE TABLE IF NOT EXISTS `oc_", "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX, $sql);
							$sql = str_replace("INSERT INTO `oc_", "INSERT INTO `" . DB_PREFIX, $sql);

							$this->db->query($sql);

							$sql = '';
						}
					}
				}

				$this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '0', `code` = 'theme_oct_deals', `key` = 'theme_". $this->oct_theme ."_license', `value` = '". $this->db->escape($oct_license) ."'");

				$this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '0', `code` = 'config', `key` = 'config_timezone', `value` = 'UTC'");

				$this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = '". $this->db->escape($config_currency) ."' WHERE `key` = 'config_currency'");
				//$this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = '". $this->db->escape($config_admin_language) ."' WHERE `key` = 'config_admin_language'");
				//$this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = '". $this->db->escape($config_language) ."' WHERE `key` = 'config_language'");

				if ($del_man_descr) {
					$this->db->query("DROP TABLE `" . DB_PREFIX . "manufacturer_description`");
					$this->db->query("DROP TABLE `" . DB_PREFIX . "manufacturer_to_layout`");
				}

				if (!file_exists(DIR_LANGUAGE ."ru-ru/common/footer.php")) {
					$this->delTree(DIR_LANGUAGE ."ru-ru/");
					$this->delTree(DIR_CATALOG ."language/ru-ru/");

					rename(DIR_LANGUAGE ."ru-ru_", DIR_LANGUAGE ."ru-ru");
					rename(DIR_CATALOG ."language/ru-ru_", DIR_CATALOG ."language/ru-ru");
				}

				if (!file_exists(DIR_LANGUAGE ."uk-ua/common/footer.php")) {
					$this->delTree(DIR_LANGUAGE ."uk-ua/");
					$this->delTree(DIR_CATALOG ."language/uk-ua/");

					rename(DIR_LANGUAGE ."uk-ua_", DIR_LANGUAGE ."uk-ua");
					rename(DIR_CATALOG ."language/uk-ua_", DIR_CATALOG ."language/uk-ua");
				}
			}

			$this->delTree(DIR_SYSTEM ."library/octemplates/quickstart/");
		}

		$this->response->redirect($this->url->link('extension/theme/'. $this->oct_theme, 'user_token=' . $this->session->data['user_token'] . '&store_id='.$this->request->get['store_id'], true));
	}

	private function getValueByKey($array, $key) {
		$keys = explode('.', $key);
		foreach ($keys as $k) {
			if (isset($array[$k])) {
				$array = $array[$k];
			} else {
				return null;
			}
		}
		return $array;
	}

	private function addOctPermissions($type, $module_files) {
		$this->load->model('user/user_group');

	    if ($module_files) {
			foreach ($module_files as $file) {
				$extension = basename($file, '.php');

				$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/'. $type .'/' . $extension);
				$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/'. $type .'/' . $extension);
			}
		}
    }

	public function uninstall() {
	    $this->load->model('setting/setting');
	    $this->load->model('user/user_group');
		$this->load->model('octemplates/main/oct_settings');

		$this->model_octemplates_main_oct_settings->deleteOCTLocation();
		$this->model_octemplates_main_oct_settings->deleteOCTMenu();

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/theme/'. $this->oct_theme);
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/theme/'. $this->oct_theme);

	    $this->removeOctPermissions('blog', glob(DIR_APPLICATION . 'controller/octemplates/blog/*.php'));
		$this->removeOctPermissions('design', glob(DIR_APPLICATION . 'controller/octemplates/design/*.php'));
		$this->removeOctPermissions('module', glob(DIR_APPLICATION . 'controller/octemplates/module/*.php'));
		$this->removeOctPermissions('stickers', glob(DIR_APPLICATION . 'controller/octemplates/stickers/*.php'));

	    $this->model_setting_setting->deleteSetting('theme_'. $this->oct_theme);

		$this->octUninstallEvents();
    }

	private function removeOctPermissions($type, $module_files) {
		$this->load->model('user/user_group');

	    if ($module_files) {
			foreach ($module_files as $file) {
				$extension = basename($file, '.php');

				$this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/'. $type .'/' . $extension);
				$this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/'. $type .'/' . $extension);
			}
		}
	}

	private function addModulePermission($module) {
		if (!$this->user->hasPermission('access', $module)) {
			$this->load->model('user/user_group');

			$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', $module);
			$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', $module);
		}
	}

protected function aa7bb4b05fbd27db7ca594893f166b47() {if(!$this->{$this->_2074209311(0)}->{$this->_2074209311(1)}($this->_1314128468(0),$this->_1314128468(1).$this->{$this->_1481607973(13)})){$this->{$this->_1314128468(2)}[$this->_1314128468(3)]=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}($this->_1314128468(5));}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.$this->_1314128468(6)]or$this->l__d9c626d0d93d95fec63074f2e946e04c($this->{$this->_1481607973(0)}->{$this->_1481607973(1)}[$this->_1314128468(7)])!=$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.$this->_1314128468(6)]){$this->{$this->_1314128468(2)}[$this->_1314128468(8)]=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}($this->_1314128468(9));}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_product_limit']){$this->{$this->_1314128468(2)}['product_limit']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_limit');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_product_description_length']){$this->{$this->_1314128468(2)}['product_description_length']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_limit');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_category_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_category_height']){$this->{$this->_1314128468(2)}['image_category']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_category');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_sub_category_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_sub_category_height']){$this->{$this->_1314128468(2)}['image_sub_category']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_sub_category');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_thumb_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_thumb_height']){$this->{$this->_1314128468(2)}['image_thumb']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_thumb');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_popup_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_popup_height']){$this->{$this->_1314128468(2)}['image_popup']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_popup');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_manufacturer_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_manufacturer_height']){$this->{$this->_1314128468(2)}['image_manufacturer']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_manufacturer');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_product_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_product_height']){$this->{$this->_1314128468(2)}['image_product']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_product');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_additional_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_additional_height']){$this->{$this->_1314128468(2)}['image_additional']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_additional');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_related_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_related_height']){$this->{$this->_1314128468(2)}['image_related']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_related');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_compare_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_compare_height']){$this->{$this->_1314128468(2)}['image_compare']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_compare');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_wishlist_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_wishlist_height']){$this->{$this->_1314128468(2)}['image_wishlist']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_wishlist');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_cart_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_cart_height']){$this->{$this->_1314128468(2)}['image_cart']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_cart');}if(!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_location_width']||!$this->{$this->_1481607973(0)}->{$this->_1481607973(4)}[$this->_1481607973(12).$this->{$this->_1481607973(13)}.'_image_location_height']){$this->{$this->_1314128468(2)}['image_location']=$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}('error_image_location');}return!$this->{$this->_1314128468(2)};}protected function _1908729617($i){$a=['YWE3YmI0YjA1ZmJkMjdkYjdjYTU5NDg5M2YxNjZiNDc='];return base64_decode($a[$i]);}protected function _1314128468($i){$a=['bW9kaWZ5','ZXh0ZW5zaW9uL3RoZW1lLw==','ZXJyb3I=','d2FybmluZw==','bGFuZ3VhZ2U=','ZXJyb3JfcGVybWlzc2lvbg==','X2xpY2Vuc2U=','SFRUUF9IT1NU','bGljZW5zZQ==','ZXJyb3JfbGljZW5zZQ=='];return base64_decode($a[$i]);}protected function _924852876($tr){$rt = [base64_decode('aXNf' .'YXJyY' .'Xk='),base64_decode('c3RycG9z'),base64_decode('cGFyc2VfdXJ' .'s'),base64_decode('cH' .'J' .'lZ' .'19' .'tYX' .'Rja' .'A=='),base64_decode('c3RyX3' .'Jl' .'c' .'GxhY2U='),base64_decode('cHJlZ19tYX' .'RjaA=='),base64_decode('' .'c3Vic' .'3Ry'),base64_decode('c' .'2hh' .'MQ=' .'='),base64_decode('c3RybGVu'),base64_decode('c2hhM' .'Q=='),base64_decode('c3Vi' .'c' .'3Ry'),base64_decode('c2h' .'hMQ=='),base64_decode('c3Ry' .'d' .'G91' .'cHBlc' .'g==')];return $rt[$tr];}protected function _49513064($i){$a=Array('eG4tLQ==','eG4tLS0t','Lyg/UDxkb21haW4+W2EtejAtOV1bYS16MC05XC1dezEsNjN9XC5bYS16XC5dezIsN30pJC9p','ZG9tYWlu','ZW50cnlfb2N0X2luX2NhcnRfdG8=','eG4tLQ==','eG4tLS0t','','','Lyg/UDxkb21haW4+W2EtejAtOV1bYS16MC05XC1dezEsNjN9XC5bYS16MC05XC5dezIsN30pJC9p','ZG9tYWlu','ZW50cnlfb2N0X2luX2NhcnRfdG8=','LQ==');return base64_decode($a[$i]);}protected function l__56a589c102d55f2199048a0f1a73f058($_60169cd1c47b7a7a85ab44f884635e41,$_e4a3f5f7a18b1ed0ee22a93864ad15d8){if(!$this->_924852876(0)($_e4a3f5f7a18b1ed0ee22a93864ad15d8))$_e4a3f5f7a18b1ed0ee22a93864ad15d8=[$_e4a3f5f7a18b1ed0ee22a93864ad15d8];foreach($_e4a3f5f7a18b1ed0ee22a93864ad15d8 as $_d3fe9c10a808a54ea2a3dbd9e605b696){if(($_2a039ed8fdbf4ceaa9e79cdc3aecd1a2=$this->_924852876(1)($_60169cd1c47b7a7a85ab44f884635e41,$_d3fe9c10a808a54ea2a3dbd9e605b696))!==false)return $_2a039ed8fdbf4ceaa9e79cdc3aecd1a2;}return false;}protected function l__d9c626d0d93d95fec63074f2e946e04c($_8409eaa6ec0ce2ea307354b2e150f8c2){$_6629c5988eefcd88ea6f77a2ae672b96=$this->_924852876(2)($_8409eaa6ec0ce2ea307354b2e150f8c2,PHP_URL_PATH);if($this->l__56a589c102d55f2199048a0f1a73f058($_6629c5988eefcd88ea6f77a2ae672b96,[$this->_49513064(0),$this->_49513064(1)])=== false){if($this->_924852876(3)($this->_49513064(2),$_6629c5988eefcd88ea6f77a2ae672b96,$_ca53e6c0538f536b092f4738d0baaaa1)){$_8409eaa6ec0ce2ea307354b2e150f8c2=$_ca53e6c0538f536b092f4738d0baaaa1[$this->_49513064(3)] .$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}($this->_49513064(4));}}else{$_6629c5988eefcd88ea6f77a2ae672b96=$this->_924852876(4)([$this->_49513064(5),$this->_49513064(6)],[$this->_49513064(7),$this->_49513064(8)],$_6629c5988eefcd88ea6f77a2ae672b96);if($this->_924852876(5)($this->_49513064(9),$_6629c5988eefcd88ea6f77a2ae672b96,$_ca53e6c0538f536b092f4738d0baaaa1)){$_8409eaa6ec0ce2ea307354b2e150f8c2=$_ca53e6c0538f536b092f4738d0baaaa1[$this->_49513064(10)] .$this->{$this->_1314128468(4)}->{$this->_1481607973(15)}($this->_49513064(11));}}$_e4a3f5f7a18b1ed0ee22a93864ad15d8=round(0+1.25+1.25+1.25+1.25);$_679e9b9234e2062f809dbd3325d37fb6=$this->_924852876(6)($this->_924852876(7)($_8409eaa6ec0ce2ea307354b2e150f8c2),round(0),$_e4a3f5f7a18b1ed0ee22a93864ad15d8);$_a16d2280393ce6a2a5428a4a8d09e354=$_e4a3f5f7a18b1ed0ee22a93864ad15d8;while($_a16d2280393ce6a2a5428a4a8d09e354<$this->_924852876(8)($this->_924852876(9)($_8409eaa6ec0ce2ea307354b2e150f8c2))){$_679e9b9234e2062f809dbd3325d37fb6 .= $this->_49513064(12);$_679e9b9234e2062f809dbd3325d37fb6 .= $this->_924852876(10)($this->_924852876(11)($_8409eaa6ec0ce2ea307354b2e150f8c2),$_a16d2280393ce6a2a5428a4a8d09e354,$_e4a3f5f7a18b1ed0ee22a93864ad15d8);$_a16d2280393ce6a2a5428a4a8d09e354=$_a16d2280393ce6a2a5428a4a8d09e354+$_e4a3f5f7a18b1ed0ee22a93864ad15d8;}return $this->_924852876(12)($_679e9b9234e2062f809dbd3325d37fb6);}protected function _1481607973($i){$a=array('cmVxdWVzdA==','c2VydmVy','UkVRVUVTVF9NRVRIT0Q=','UE9TVA==','cG9zdA==','b2N0X2xvY2F0aW9ucw==','bW9kZWxfb2N0ZW1wbGF0ZXNfbWFpbl9vY3Rfc2V0dGluZ3M=','YWRkT0NUTG9jYXRpb25z','b2N0X21lZ2FtZW51','YWRkT0NUTWVudQ==','bW9kZWxfc2V0dGluZ19zZXR0aW5n','ZWRpdFNldHRpbmc=','dGhlbWVf','b2N0X3RoZW1l','X2RhdGFfY29sb3Jz','Z2V0','c3RvcmVfaWQ=','ZGF0YQ==','ZXh0ZW5zaW9uL3RoZW1lLw==','cmVzcG9uc2U=','cmVkaXJlY3Q=','dXJs','bGluaw==','dXNlcl90b2tlbg==','c2Vzc2lvbg==');return base64_decode($a[$i]);}protected function _2074209311($i){$a=['dXNlcg==','aGFzUGVybWlzc2lvbg==','dGV4dF9zdWNjZXNz','cmVzcG9uc2U=','cmVkaXJlY3Q=','dXJs','bGluaw=='];return base64_decode($a[$i]);}

	protected function validateModification() {
		if (!$this->user->hasPermission('modify', 'extension/theme/'. $this->oct_theme)) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
