<?php

    require 'config.php';
    require 'helpers.php';

    $language = "PHP";
    $titulo = "Curso de PHP";

    //Llamamos a la función
    view('home', compact('language', 'titulo'));
