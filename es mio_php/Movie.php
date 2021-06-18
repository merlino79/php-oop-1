<?php

  class Movie   {
 
        public $title;
        public $production;
        public $year;
        public $direction;
        public $cast;
        public $genres = [];
        private $takings ;


        public function __construct($_title)
        {

          // $this->title = $_title;
          $this->title = $_title;
         

        }

        public function getInfo()
        
        {
            return "prodotto da: ".$this->direction . " <br>anno: ".$this->year . "<br>cast: $this->cast";
        }

        public function getGenres($_genres)
        
        {
            $this->genres = $_genres;
        }

       

   }

?>