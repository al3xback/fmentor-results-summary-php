<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Frontend Mentor | Results Summary Component | PHP</title>

	<!-- Core Meta Data -->
	<meta name="description" content="Frontend Mentor - Results summary component solution." />
	<meta name="keywords" content="Frontend Mentor, Results summary component" />

	<!-- Behavioral Meta Data -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="favicon.png" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500;700;800&display=swap" />

	<!-- Styles -->
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<?php
	define('TITLE', 'Results summary component');
	define('CARD', array(
		'result' => array(
			'title' => 'Your Result',
			'score' => array(
				'value' => '76',
				'title' => 'Great',
				'description' => 'You scored higher than 65% of the people who have taken these tests.'
			)
		),
		'summary' => array(
			'title' => 'Summary',
			'categories' => array(
				"Reaction" => 80,
				"Memory" => 92,
				"Verbal" => 61,
				"Visual" => 72
			)
		)
	));
	?>

	<header>
		<h1 class="sr-only"><?php echo TITLE; ?></h1>
	</header>

	<main>
		<div class="container">
			<div class="card">
				<div class="card__result">
					<h2 class="card__title"><?php echo CARD['result']['title']; ?></h2>
					<div class="card__chart">
						<span class="card__chart-score extra-bold"><?php echo CARD['result']['score']['value']; ?></span>
						<span>of 100</span>
					</div>
					<div class="card__desc">
						<h3 class="card__desc-title"><?php echo CARD['result']['score']['title']; ?></h3>
						<p class="card__desc-content"><?php echo CARD['result']['score']['description']; ?></p>
					</div>
				</div>
				<div class="card__summary">
					<h2 class="card__title"><?php echo CARD['summary']['title']; ?></h2>
					<ul class="card__data-list">
						<?php foreach (CARD['summary']['categories'] as $name => $score) : ?>
							<li class="card__data-item card__data-item--<?php echo strtolower($name) ?>">
								<img class="card__data-img" src="./images/icons/<?php echo strtolower($name) ?>.svg" width="20" height="20" alt="" />
								<h3 class="card__data-title"><?php echo $name; ?></h3>
								<p class="card__data-score">
									<span><?php echo $score; ?></span><span>/ 100</span>
								</p>
							</li>
						<?php endforeach; ?>
					</ul>
					<button type="button" class="btn btn--primary btn--full">
						Continue
					</button>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="container">
			<p>
				Challenge by
				<a href="https://www.frontendmentor.io?ref=challenge" class="btn btn--link" rel="noopener" target="_blank">Frontend Mentor</a>. Coded by
				<a href="https://github.com/al3xback" class="btn btn--link" rel="noopener" target="_blank">al3xback</a>.
			</p>
		</div>
	</footer>
</body>

</html>
