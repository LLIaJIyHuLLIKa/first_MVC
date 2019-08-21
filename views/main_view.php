<?php
	require_once('view.php');
	
	class Main_View implements View {
		public function page($data = null) {
			include(TEMPLATES_PATH . '/main_page.php');
		}
	}
?>