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

          // $this->title = $_title;
          $this->title = $_title;
         

        }
        public function getInfo(){//funzione per sapere marca modello e prezzo che la collego all'ndex.htmls
            return "direction: ".$this->direction ;
        }


    }
    


?>