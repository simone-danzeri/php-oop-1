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
  
    // Funzione che mi ritorna il titolo
    public function getTitle() {
      return $this->title;
    }
  
    // Funzione che mi ritorna i generi
    public  function getGenres() {
      $genres = '';
      foreach ($this->genres as $genre) {
          $genres .= $genre . ' ';
      }
      return $genres;
    }
  
  }
  
?>