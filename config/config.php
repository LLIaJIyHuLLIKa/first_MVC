<?php
	ini_set('display_errors', true);
	define('DB_DSN', 'mysql:host=localhost;dbname=id8222218_best_films');
	define('DB_USERNAME', 'id8222218_root');
	define('DB_PASSWORD', '123456');
	define('DB_OPTIONS', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
	define('MODELS_PATH', dirname(__DIR__) . '/models');
	define('CONTROLLERS_PATH', dirname(__DIR__) . '/controllers');
	define('VIEWS_PATH', dirname(__DIR__) . '/views');
	define('TEMPLATES_PATH', dirname(__DIR__) . '/templates');
	require(MODELS_PATH . '/Films.php');
	
	function handleException($exception) {
		error_log($exception->getMessage());
	}
	
	set_exception_handler('handleException');
?>