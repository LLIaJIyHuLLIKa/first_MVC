<?php
	require_once('view.php');
	
	class Result_View implements View {
		public function page($data = null) {
			include(TEMPLATES_PATH . '/search_results.php');
		}
	}
?>