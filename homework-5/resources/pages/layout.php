<?php
/** @var array $config */
/** @var string $content */
/** @var string $currentPage */
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $config['title'] ?></title>
	<link rel="stylesheet" href="./resources/css/style.css">
	<link rel="stylesheet" href="./resources/css/reset.css">
</head>
<body>
<div class="wrapper">
	<div class="sidebar">
		<ul class="menu">
			<div class="menu-item">
				<a class="menu-item-link " href='index.php'>Главная</a>
			</div>
			<?php foreach($config['menu-side-bar'] as $code => $name): ?>
				<div class="menu-item <?= $currentPage === $name ? "active" : "" ?>">
					<a class="menu-item-link " href="<?="index.php"."?genre=". $name ?>"><?= $name ?></a>
				</div>
			<?php endforeach; ?>
			<div class="menu-item">
				<a class="menu-item-link " href='favourite.php'>Избранное</a>
			</div>
		</ul>
	</div>

	<div class="container">

		<div class="header">
			<form class="search" action="">
				<div class="search-bar">
					<div class="search-bar--icon"></div>
					<input class="search-bar--input" type="text" placeholder="Поиск по каталогу...">
					<div class="search-bar--wrapper"></div>
				</div>
				<button class="search-button">искать</button>
			</form>
			<a href="choto-tam.html">добавить фильм</a>
		</div>

		<div class="content">
			<?= $content ?>
		</div>

	</div>
</div>

</body>
</html>
