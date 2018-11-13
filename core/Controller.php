<?php
class Controller {
	private $config;
	private $empresa;

	public function __construct(){
		$cfg = new Config();
		$this->config = $cfg->getConfig();

		$emp = new Empresa();
		
		$this->empresa = $emp->getInfo();
	}

	public function loadView($viewName, $viewData = array()){
		extract($viewData); 
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()){
		extract($viewData); 
		require 'views/templates/'.$this->config['site_template'].'.php';
	}

	public function loadTemplateInPainel($viewName, $viewData = array()){
		extract($viewData); 
		require 'views/painel.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()){
		extract($viewData); 
		require 'views/'.$viewName.'.php';
	}

	public function loadMenu(){
		$menu = new Menu();
		$m = array();
		$m["menu"] = $menu->getMenu();

		$this->loadView("menu", $m);
	}
	public function loadPage(){
		$page = new Page();
		$p = array();
		$p["page"] = $page->getPages();

		$this->loadView("pages", $p);
	}

}