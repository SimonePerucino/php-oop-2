<?php
    class Product{
        protected $name;
        protected $qty;
        protected $price;

        function __construct($name, $qty, $price) {
            $this->name = $name;
            $this->qty = $qty;
            $this->price = $price;
        }
    }
?>