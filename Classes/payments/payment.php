<?php
    class Payment{
        protected $name;
        protected $date;
        protected $userName;

        function __construct($name, $date, $userName) {
            $this->name = $name;
            $this->date = $date;
            $this->userName = $userName;
        }
    }
?>