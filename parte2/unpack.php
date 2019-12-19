<?php

$frutas = ['maçã', 'laranja'];

$frutas2 = ['morango', 'uva', ...$frutas];

print '<pre>';
var_dump($frutas2);