<?php
// Creo la classe Movie
class Movie{
  // CARATTERISTICHE della classe Movie (variabili di istanza)
  public $title;
  public $original_language;
  public $release_date;
  public $genres;
  public $production_company;


  // COSTRUTTORE
  public function __construct($_title, $_original_language, $_release_date, $_genres, $_production_company) {
    $this->title = $_title;
    $this->original_language = $_original_language;
    $this->release_date = $_release_date;
    $this->genres = $_genres;
    $this->production_company = $_production_company;
  }

}

// Le singole istanze
$back_to_the_future = new Movie('Back to the future', 'EN', 1985, 'Comedy', 'Universal Pictures');
$braveheart = new Movie('Braveheart', 'EN', 1995, 'Action', '20th Century Studios');
$the_wind_that_shakes_the_barley = new Movie('The wind that shakes the barley', 'EN', 2006, 'War', 'Fís Éireann / Screen Ireland');
$the_shawshank_redemption = new Movie('The shawshank redemption', 'EN', 1994, 'Thriller', 'Warner Bros');
var_dump($back_to_the_future);
var_dump($braveheart);
var_dump($the_wind_that_shakes_the_barley);
var_dump($the_shawshank_redemption);
?>
