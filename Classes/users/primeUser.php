<?php

require_once(__DIR__ . "/../user.php");

    class PrimeUser extends User{
        protected $shippingCost= 0;
        protected $subscriptionDate;

        function __construct($name, $email,  $subscriptionDate = null)
        {
            parent::__construct($name, $email);

            // se non è settata vado ad assegnare alla subscriptionDate il valore della data attuale
            if(!isset($subscriptionDate)){
                $subscriptionDate = date("y-m-d H:i:s");
            }

            $this->subscriptionDate = $subscriptionDate;
        }
    }
?>