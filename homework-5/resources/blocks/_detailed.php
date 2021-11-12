<?php
/** @var array $currentMovie */
?>

<div class="detailed-page">
	<div class="detailed-page--header">
		<div class="detailed-page--header--title"><?=$currentMovie['title']?></div>


	</div>
	<div class="detailed-page--content">
		<div class="detailed-page--content--picture" style="background-image: url(<?="./resources/images/".$currentMovie['original-title'].".jpg"?>);"></div>
	</div>

</div>
