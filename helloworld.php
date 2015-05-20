<?php

    //Definimos configuración para mostrar errores
    ini_set('display_errors', true);
    error_reporting(E_ALL);

    $languaje = "PHP";

    //Declarando la función
    function view($languaje)
    {
        require "view.php";
    }
    //Llamamos a la función
    view($languaje);
