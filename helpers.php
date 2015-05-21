<?php

    //Declarando la función
    function view($template, $vars = array())
    {
        extract($vars);
        require "views/$template.tpl.php";
    }