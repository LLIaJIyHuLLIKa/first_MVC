<?php
	require_once('controller.php');
	require(VIEWS_PATH . '/main_view.php');
	
	class Main_Controller implements Controller {
		private $model;
		private $view;
		
		public function __construct() {
			$this->model = new Films();
			$this->view = new Main_View();
		}
		
		public function start() {
			$films = $this->model->getFilms();
			$this->view->page($films);
		}
	}
?>