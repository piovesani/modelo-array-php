<?php

//utilizada para sequencias como numeros ou letras
$array = range('a', 'l');

//comece na posição um e remova 5 items
array_splice($array, 1, 5);

print_r($array);

?>