<?php
	require_once('view.php');
	
	class Registration_View implements View {
		public function page($fullName = null, $login = null, $email = null, $password = null) {
			include(TEMPLATES_PATH . '/registration_page.php');
		}
	}
?>