<?php
	require_once('controller.php');
	require(VIEWS_PATH . '/registration_view.php');
	
	class Registration_Controller implements Controller {
		private $view;
		private $model;
		private $fullName;
		private $login;
		private $email;
		private $password;
		
		public function __construct($fullName = null, $login = null, $email = null, $password = null) {
			$this->view = new Registration_View();
			$this->model = new Films();
			
			$this->fullName = $fullName;
			$this->login = $login;
			$this->email = $email;
			$this->password = $password;
		}
		
		public function start() {
		    if($this->fullName != null || $this->login != null || $this->email != null || $this->password != null)
		        $this->model->registerUsers($this->fullName, $this->login, $this->email, $this->password);
		        
			$this->view->page($this->fullName, $this->login, $this->email, $this->password);
		}
	}
?>