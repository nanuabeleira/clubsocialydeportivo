<?php

function pre($algo) {
    echo '<pre>';
    var_dump($algo);
    echo '</pre>';
}

// Dump and Die
function dd($algo) {
    pre($algo);
    exit;
}

/*
function validarRegistracion($unArray) {}
function armarArrayUsuario() {}
function abrirBBDD($unArchivo) {}
*/

?>