<?php
	require_once('view.php');
	
	class Search_View implements View {
		public function page($data = null) {
			include(TEMPLATES_PATH . '/search.php');
		}
	}
?>