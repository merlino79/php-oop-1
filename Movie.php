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


        public function getInfo(){
            return "title: ".$this->title;
        }

         public function getInfo(){
            return "prodotto: ".$this->production;
        }


    }
    


?>