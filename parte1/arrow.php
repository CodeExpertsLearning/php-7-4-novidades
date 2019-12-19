<?php 

$valores = [10, 20, 30];

// $valores = array_map(function($linha) {
//     return $linha * 10;
// }, $valores);

$valores = array_map(fn($linha) => $linha * 10, $valores);

var_dump($valores);