<?php

//utilizada para sequencias como numeros ou letras
$array = range('a', 'l');

//comece na posição zero e pegue 5 items
$slice = array_slice($array, 0, 5);

print_r($slice);

?>