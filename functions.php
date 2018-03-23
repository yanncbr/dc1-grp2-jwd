<?php

/**
 * Debug la valeur d'une variable
 * @param mixed $var Variable à debugger
 * @param bool $die Est-ce que le code doit s'arrêter
 */
function debug($var, bool $die = true) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die) {
        die;
    }
}

function getHeader(string $title, string $description, array $stylesheets = []) {
    require_once 'layout/header.php';
}

function getFooter() {
    require_once 'layout/footer.php';
}

function getMenu() {
    require_once 'layout/menu.php';
}



