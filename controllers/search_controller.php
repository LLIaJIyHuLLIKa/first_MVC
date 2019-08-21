<?php
	require_once('controller.php');
	require(VIEWS_PATH . '/search_view.php');
	
	class Search_Controller implements Controller {
		private $view;
		
		public function __construct() {
			$this->view = new Search_View();
		}
		
		public function start() {
			$this->view->page();
		}
	}
?>