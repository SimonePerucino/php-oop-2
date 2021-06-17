<?php

require_once(__DIR__ . "/../product.php");

    class SmarthPhone extends Product{
        protected $model;
        protected $brand;
        protected $band = "4g";

        function __construct($name, $qty, $price){
            parent::__construct($name, $qty, $price, $model, $brand);
            $this->model = $model;
            $this->brand = $brand;
        }
    }
?>