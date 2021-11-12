<?php
require_once "./lib/helper-functions.php";
/** @var array $movie */
?>

<div class="movie-list--item">
	<link rel="stylesheet" href="./resources/css/reset.css">
	<div class="movie-list--item-image" style="background-image: url(<?="./resources/images/".$movie['id'].".jpg"?>);"></div>
	<div class="movie-list--item-head">
		<div class="movie-list--item-title"><?=formatTitle($movie['title'])?></div>
		<div class="movie-list--item-subtitle"><?=formatTitle($movie['original-title'])?></div>
		<div class="movie-list--item-wrapper"></div>
	</div>
	<div class="movie-list--item-description"><?=formatMessage($movie['description'])?></div>
	<div class="movie-list--item-overlap">
		<a href=<?php echo "detailed.php?id=" . $movie['id'] ?>>подробнее</a>
	</div>
	<div class="movie-list--item-bottom">
		<div class="movie-list--item-time">
			<div class="movie-list--item-time--icon"></div>
			<?=$movie['duration'].'мин.'.'/'.date('h:i', mktime(0,$movie['duration']))?>
		</div>
		<div class="movie-list--item-genre">
			<?php foreach ($movie['genres'] as $genre): ?>
			<div class="each-genre"><?=$genre . ","?></div>
			<?php endforeach; ?>
		</div>
	</div>

</div>