<?php

    class Product{
        protected $name;
        protected $price;
        protected $discount;

        public function __construct()
        {
            
        }

        public function getPrice(){
            return $this->price-($this->price*$this->discount/100);
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getDiscount(){
            return $this->discount;
        }

        public function setDiscount($discount){
            $this->discount = $discount;
        }
        
    }

    class CDMusic extends Product{
        protected $artist;
        protected $genre;

        public function __construct($name, $price, $discount){
            $this->name = $name;
            $this->price = $price+(0.1*$price);
            $this->discount = $discount+5;
        }
        
        public function getArtist(){
            return $this->artist;
        }

        public function setArtist($artist){
            $this->artist = $artist;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function setGenre($genre){
            $this->genre = $genre;
        }

    }

    class CDCabinet extends Product{
        protected $capacity;
        protected $model;
        
        public function __construct($name, $price, $discount){
            $this->name = $name;
            $this->price = $price+(0.15*$price);
            $this->discount = $discount;
        }

        public function getCapacity(){
            return $this->capacity;
        }

        public function setCapacity($capacity){
            $this->capacity = $capacity;
        }

        public function getModel(){
            return $this->model;
        }

        public function setModel($model){
            $this->model = $model;
        }

    }

    $musik = new CDMusic("Bagimu Negeri", 10000, 10);
    $musik->setArtist("Kusbini");
    $musik->setGenre("Nasional");
    echo $musik->getPrice();
    
    $kabinet = new CDCabinet("blue cabinet", 20000, 10);
    $kabinet->setCapacity(4);
    $kabinet->setModel("Rectangle");
    $kabinet->setCapacity(4);
    echo $kabinet->getPrice();
    
?>