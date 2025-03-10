<?php
class ControllerCommonContentBottom extends Controller {
	public function index() {
		$this->load->model('design/layout');

		if (isset($this->request->get['route'])) {
			$route = (string)$this->request->get['route'];
		} else {
			$route = 'common/home';
		}

		$layout_id = 0;


			if ($route == 'octemplates/blog/oct_blogcategory' && isset($this->request->get['blog_path'])) {
				$this->load->model('octemplates/blog/oct_blogcategory');

				$blog_path = explode('_', (string)$this->request->get['blog_path']);

				$layout_id = $this->model_octemplates_blog_oct_blogcategory->getBlogCategoryLayoutId(end($blog_path));
			}

			if ($route == 'octemplates/blog/oct_blogarticle' && isset($this->request->get['blogarticle_id'])) {
				$this->load->model('octemplates/blog/oct_blogarticle');

				$layout_id = $this->model_octemplates_blog_oct_blogarticle->getArticleLayoutId($this->request->get['blogarticle_id']);
			}
			
		if ($route == 'product/category' && isset($this->request->get['path'])) {
			$this->load->model('catalog/category');

			$path = explode('_', (string)$this->request->get['path']);

			$layout_id = $this->model_catalog_category->getCategoryLayoutId(end($path));
		}

		if ($route == 'product/product' && isset($this->request->get['product_id'])) {
			$this->load->model('catalog/product');

			$layout_id = $this->model_catalog_product->getProductLayoutId($this->request->get['product_id']);
		}

		if ($route == 'information/information' && isset($this->request->get['information_id'])) {
			$this->load->model('catalog/information');

			$layout_id = $this->model_catalog_information->getInformationLayoutId($this->request->get['information_id']);
		}

		if (!$layout_id) {
			$layout_id = $this->model_design_layout->getLayout($route);
		}

		if (!$layout_id) {
			$layout_id = $this->config->get('config_layout_id');
		}


    // OCFilter start
    if (isset($route) && $route == 'product/category' && isset($this->request->get['ocfilter_page_id']) && $this->registry->get('ocfilter') && $this->ocfilter->startup()) {
      if ($_layout_id = $this->ocfilter->api->getSeoPageLayoutId()) {
        $layout_id = $_layout_id;
      }
    }
    // OCFilter end
      
		$this->load->model('setting/module');

		$data['modules'] = array();

		$modules = $this->model_design_layout->getLayoutModules($layout_id, 'content_bottom');

		foreach ($modules as $module) {
			$part = explode('.', $module['code']);

			if (isset($part[0]) && $this->config->get('module_' . $part[0] . '_status')) {
				$module_data = $this->load->controller('extension/module/' . $part[0]);

				if ($module_data) {
					$data['modules'][] = $module_data;
				}
			}

			if (isset($part[1])) {
				$setting_info = $this->model_setting_module->getModule($part[1]);

				
			if ($setting_info && isset($setting_info['status']) && $setting_info['status']) {
			

			$setting_info['module_id'] = $part[1];
			$setting_info['position'] = 'content_bottom';
			
					$output = $this->load->controller('extension/module/' . $part[0], $setting_info);

					if ($output) {
						$data['modules'][] = $output;
					}
				}
			}
		}

		return $this->load->view('common/content_bottom', $data);
	}
}
