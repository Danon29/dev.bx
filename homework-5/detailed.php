<?php
declare(strict_types=1);
/** @var array $config */
require_once "./config/app.php";
/** @var array $movies */
require_once './data/movies.php';
require_once "./lib/helper-functions.php";
require_once "./lib/template-functions.php";

$id = (int)$_GET['id'];

$currentMovie =getMovieById($id, $movies);

$todosListPage = renderTemplate("./resources/pages/detailed-page.php", ['currentMovie' => $currentMovie]);

// render layout
renderLayout($todosListPage, [
	'config' => $config,
	'currentPage' => getFileName(__FILE__)
]);