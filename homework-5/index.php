<?php
declare(strict_types=1);
/** @var array $config */
require_once "./config/app.php";
/** @var array $movies */
require_once './data/movies.php';
require_once "./lib/helper-functions.php";
require_once "./lib/template-functions.php";

if(isset($_GET['genre']))
{
	$movies = getMoviesByGenres($movies,$_GET['genre']);
}

$moviesListPage = renderTemplate("./resources/pages/movies-list.php", [
	'movies' => $movies
]);

// render layout
renderLayout($moviesListPage, [
	'config' => $config,
	'currentPage' => getFileName(__FILE__)
]);