<?php
/** @var array $currentMovie */
?>

<head>
	<link rel="stylesheet" href="./resources/css/detailed.css">
	<link rel="stylesheet" href="./resources/css/reset.css">
</head>
<div class="about-film-title"><?= $currentMovie['title'] ?></div>
<div class="wrapper-about-film-subtitle">
	<div class="about-film-subtitle"><?= $currentMovie['original-title'] ?></div>
	<div class="age-subtitle"><?= $currentMovie['age-restriction'] . "+" ?></div>
</div>

<div class="big-wrapper-about-film">
	<div class="wrapper-img-about-film">
		<img class="img-about-film" alt="movie" src="resources/images/<?= $currentMovie['id'] ?>.jpg">
	</div>
	<div class="wrapper-data-about-film">
		<div class="wrapper-about-film-rating">
			<?php for ($i = 1; $i <= 10; $i++): ?>
				<?= movieRectangleRating($i, $currentMovie['rating']) ?>
			<?php endfor; ?>
			<div class="rating-ellipse"><?= sprintf('%0.1f', $currentMovie['rating']) ?></div>
		</div>
		<div class="about-film-small-descr-title">О фильме</div>
		<div class="wrapper-about-film-small-descr">
			<ul class="wrapper-about-film-small-descr-subtitle">
				<li class="about-film-small-descr-subtitle-name">Год производства:</li>
				<li class="about-film-small-descr-subtitle-name">Режиссер:</li>
				<li class="about-film-small-descr-subtitle-name">В главных ролях:</li>
			</ul>
			<ul class="wrapper-about-film-small-description">
				<li class="about-film-small-description-full"><?= $currentMovie['release-date'] ?></li>
				<li class="about-film-small-description-full"><?= $currentMovie['director'] ?></li>
				<li class="about-film-small-description-full"><?= implode(", ", $currentMovie['cast']) ?></li>
			</ul>
		</div>
		<div class="about-film-descr-title">Описание</div>
		<div class="about-film-descr"><?= $currentMovie['description'] ?></div>

		<div class="about-film-heart">
			<img src="../../img/icon-with-like%20(1).svg" alt="heart">
		</div>
	</div>
</div>-*------