<?php
    class Movie   {
 
        public $title;
        public $production;
        public $anno;
        public $author;
        public $cast;
        public $time;
        private $cash_investiment;


        public function __construct($_title){

          $this->title = $_title;
        }


    }
    


?>