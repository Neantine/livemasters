<?php
class IDC_Modules {
	public static $PHP_EXTENSION = '.php';
	var $moddir;
	var $exdir;

	function __construct() {
		$this->moddir = dirname(__FILE__). '/' . 'modules';
		$this->exdir = array('.', '..');
		// run functions
		$this->set_module_hooks();
		$this->load_modules();
	}

	private function set_module_hooks() {
		// add idc modules to idf menu
		add_filter('id_module_list', array($this, 'show_modules'));
		// check for change in module status
		add_action('init', array($this, 'module_status'));
	}

	function show_modules($modules) {
		// show modules in the IDF modules menu
		$idc_modules = $this->get_modules();
		foreach ($idc_modules as $module) {
			$thisfile = $this->moddir . '/' . $module;
			if (is_dir($thisfile) && !in_array($module, $this->exdir)) {
				$info = json_decode(file_get_contents($thisfile . '/' . 'module_info.json'), true);
				$new_module = (object) array(
					'title' => $info['title'],
					'short_desc' => $info['short_desc'],
					'link' => apply_filters('id_module_link', menu_page_url('idf-extensions', false) . '&id_module='.$module),
					'doclink' => $info['doclink'],
					'thumbnail' => plugins_url('modules/' . $module . '/thumbnail.png', __FILE__),
					'basename' => $module,
					'type' => $info['type'],
					'requires' => $info['requires'],
				);
				if ($info['status'] == 'live') {
					switch ($new_module->requires) {
						case 'idc':
							if (is_idc_licensed()) {
								$modules[$module] = $new_module;
							}
							break;
						case 'ide':
							$pro = get_option('is_id_pro', false);
							if ($pro) {
								$modules[$module] = $new_module;
							}
							break;
						default:
							$modules[$module] = $new_module;
							break;
					}
				}
			}
		}
		return $modules;
	}

	function get_modules() {
		$modules = array();
		$subfiles = scandir($this->moddir);
		foreach ($subfiles as $file) {
			$thisfile = $this->moddir . '/' . $file;
			if (is_dir($thisfile) && !in_array($file, $this->exdir)) {
				$modules[] = $file;
			}
		}
		return apply_filters('idc_modules', $modules);
	}

	public function load_modules() {
		// Load the list of active modules
		$modules = self::get_active_modules();
		if (!empty($modules)) {
			foreach ($modules as $module) {
				$this->load_module($module);
			}
		}
	}

	public function load_module($module) {
		// Loading the class file of the module
		require_once dirname(__FILE__) .'/modules/' . $module . '/' . 'class-' . $module . self::$PHP_EXTENSION;
	}

	function module_status() {
		if (is_admin() && current_user_can('manage_options')) {
			if (isset($_GET['id_module'])) {
				$module = $_GET['id_module'];
				if (!empty($module)) {
					if (isset($_GET['module_status'])) {
						$status = $_GET['module_status'];
						$this->set_module_status($module, $status);
					}
				}
			}
		}
	}

	public static function get_active_modules() {
		// Get list of active modules
		$modules = get_transient('id_modules');
		return apply_filters('id_modules', $modules);
	}

	public static function is_module_active($module) {
		$modules = self::get_active_modules();
		return (in_array($module, $modules));
	}

	public static function set_module_status($module, $status) {
		$modules = self::get_active_modules();
		switch ($status) {
			case true:
				if (empty($modules)) {
					$modules = array();
					$modules[] = $module;
				}
				else if (!in_array($module, $modules)) {
					$modules[] = $module;
				}
				break;
			default:
				// deactivate
				if (!empty($modules)) {
					if (in_array($module, $modules)) {
						foreach ($modules as $k=>$v) {
							if ($module == $v) {

								$elem = $k;
								break;
							}
						}
						if (isset($elem)) {
							unset($modules[$elem]);
						}
					}
				}
				break;
		}
		self::save_modules($modules);
	}

	public static function save_modules($modules = null) {
		set_transient('id_modules', $modules, 0);
	}
}
new IDC_Modules();