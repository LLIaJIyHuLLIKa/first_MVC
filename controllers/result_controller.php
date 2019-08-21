<?php
	require_once('controller.php');
	require(VIEWS_PATH . '/result_view.php');
	
	class Result_Controller implements Controller {
		private $model;
		private $view;
		private $field;
		private $data;
		
		public function __construct($field = null, $data = null) {
			$this->view = new Result_View();
			
			if($field != null) {
				$this->model = new Films();
				$this->field = $field;
				$this->data = $data;
			}
		}
		
		public function start() {
			$films = array();
			
			if($this->field != null) {
				$films = $this->model->searchFilms($this->field, $this->data);
			}
			
			$this->view->page($films);
		}
	}
?>