<?php
	require('config/config.php');
	require(CONTROLLERS_PATH . '/main_controller.php');
	require(CONTROLLERS_PATH . '/search_controller.php');
	require(CONTROLLERS_PATH . '/result_controller.php');

	$action = isset($_GET['page']) ? $_GET['page'] : '';
	$title = isset($_POST['film_title']) ? $_POST['film_title'] : '';
	$actor = isset($_POST['film_actor']) ? $_POST['film_actor'] : '';
	$company = isset($_POST['film_company']) ? $_POST['film_company'] : '';
	$year = isset($_POST['film_year']) ? $_POST['film_year'] : '';
	$genre = isset($_POST['film_genre']) ? $_POST['film_genre'] : '';
	
	$field = '';
	$data = '';
	
	if($title != '' || $actor != '' || $company != '' || $year != '' || $genre != '') {
		$action = 'search_results';
	}
	
	if($title != '') {
		$field = 'title';
		$data = $title;
	}
	else if($actor != '') {
		$field = 'actor';
		$data = $actor;
	}
	else if($company != '') {
		$field = 'company';
		$data = $company;
	}
	else if($year != '') {
		$field = 'year';
		$data = $year;
	}
	else if($genre != '') {
		$field = 'genre';
		$data = $genre;
	}
	
	switch($action) {
		case 'search':
			$controller = new Search_Controller();
			$controller->start();
			break;
		case 'search_results':
			$controller = new Result_Controller($field, $data);
			$controller->start();
			break;
		default:
			$controller = new Main_Controller();
			$controller->start();
	}
?>