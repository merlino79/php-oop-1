<?php
    class Movie   {
 
        public $title;
        public $production;
        public $year;
        public $direction;
        public $cast;
        public $time;
        private $cash_investiment;


        public function __construct($_title)
        {

          $this->title = $_title;
          // $this->direction= $_direction;
         

        }
        public function getInfo(){//funzione per sapere marca modello e prezzo che la collego all'ndex.htmls
            return "film: ".$this->title;
        }


    }
    


?>