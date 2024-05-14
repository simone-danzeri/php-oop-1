<?php
require_once __DIR__ . '/Models/Movie.php';
// Le singole istanze
$back_to_the_future = new Movie('Back to the future', 'EN', 1985, ['Comedy', 'Sci-fi'], 'Universal Pictures');
$braveheart = new Movie('Braveheart', 'EN', 1995, ['Action', 'Historical'], '20th Century Studios');
$the_wind_that_shakes_the_barley = new Movie('The wind that shakes the barley', 'EN', 2006, ['War', 'Dramatic'], 'Fís Éireann / Screen Ireland');
$the_shawshank_redemption = new Movie('The shawshank redemption', 'EN', 1994, ['Thriller', 'Dramatic'], 'Warner Bros');

$movies = [
  $back_to_the_future,
  $braveheart,
  $the_wind_that_shakes_the_barley,
  $the_shawshank_redemption
];
/* var_dump($back_to_the_future);
var_dump($braveheart);
var_dump($the_wind_that_shakes_the_barley);
var_dump($the_shawshank_redemption); */
// var_dump($movies);
?>


<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <!--Bootstrap link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--Bootstrap link-->
  <title>Document</title>
</head>
<body>
	<h1 class="text-center">Movies</h1>
	<div class="container py-4 d-flex gap-4">
		<!-- Singola card -->
		<?php foreach($movies as $eachMovie) { ?>
			<div class="card" style="width: 18rem;">
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><?php echo $eachMovie->getTitle() ?></li>
					<li class="list-group-item"><?php echo $eachMovie->original_language ?></li>
					<li class="list-group-item"><?php echo $eachMovie->release_date ?></li>
					<li class="list-group-item"><?php echo $eachMovie->getGenres() ?></li>
					<li class="list-group-item"><?php echo $eachMovie->production_company ?></li>
				</ul>
		</div>
		<?php } ?>
	</div>
<!--Bootstrap JS link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--Bootstrap JS link-->
</body>
</html>