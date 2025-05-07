<?php 
    include_once 'cliente.php';
    include_once 'cuota.php';
    include_once 'prestamo.php';
    include_once 'financiero.php';


    $cliente = new Cliente("Pepe","Flores","27515288","La plata 88","pepeFlores@gmail.com","299444567","40000");

    
    $financiera = new Financiera("ElectroCash","Av. Arg 1234");