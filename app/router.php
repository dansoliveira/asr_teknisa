<?php
    require_once 'config/config.php';

    spl_autoload_register(function($nomeClasse) {
        require_once 'libraries/' . $nomeClasse . '.php';
    })
?>