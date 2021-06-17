<?php
    class Movie   {
 
        public $title;
        public $production;
        public $year;
        public $direction;
        public $cast;
        public $time;
        private $takings ;


        public function __construct($_title)
        {

          // $this->title = $_title;
          $this->title = $_title;
         

        }

        public function setTakings($_takings ){
            
            $this->takings = $_takings ;
        }

         public function getTakings (){

            return $this->takings;
        }


        public function getInfo(){//funzione per sapere marca modello e prezzo che la collego all'ndex.htmls
            return "direction: ".$this->direction . "cash: ".$this->takings;
        }


    }
    


?>