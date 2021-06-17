<!-- Provare ad immaginare quali sono le classi necessarie per creare uno shop online;

ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php
    require_once "./Classes/products/product.php";
    require_once "./Classes/users/user.php";
    require_once "./Classes/users/primeUser.php";
    require_once "./Classes/cart.php";
    require_once "./Classes/payments/payment.php";
    require_once "./Classes/products/smartphone.php";


    $user = new PrimeUser ("Valentino Rossi", "valentino.rossi@gmail.com");
    $cart = new Cart ($user);

    $iphone12 = new SmarthPhoneProduct("iPhone", 1, 980, "12 Pro", "Apple");

    $cart->addProduct($iphone12);
?>