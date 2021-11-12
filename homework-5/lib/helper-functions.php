<?php

function printMessage(string $message)
{
	echo $message;
}

function escape(string $output)
{
	return htmlspecialchars($output, ENT_QUOTES);
}

function getFileName($path): string
{
	return basename($path, ".php");
}



function getMovieById(int $id, array $movie_ar):?array
{
	foreach ($movie_ar as $movie)
	{
		if($movie['id'] === $id)
		{
			return $movie;
		}
	}
	return null;
}

function getMoviesByGenres(array $movies, string $genre): array
{
	return array_filter($movies, function($movie) use ($genre){
		return in_array($genre, $movie['genres']);
	});
}

function formatTitle(string $text): string
{
	if (strlen($text) > 45)
	{
		$text = mb_substr($text, 0, (45/2)-2).'...';
	}
	return $text;
}

function formatMessage(string $text): string
{
	if (strlen($text) > 125)
	{
		$text = mb_substr($text, 0, 125).'...';
	}
	return $text;
}

function movieRectangleRating(int $i, float $rating):string
{
	{
		if ($i<=$rating){
			return '<div style= "background:#E78818;"  class="rating-rectangle"></div>';
		}
		else
		{
			return '<div class="rating-rectangle"></div>';
		}
	}
}