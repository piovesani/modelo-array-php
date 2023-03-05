<?php

$array = [
    'nome' => 'Renan',
    'idade' => 90,
    'profissao' => 'dev',
    'altura' => 1.70
];

//cria um novo array só com as chaves de $array
$keys = array_keys($array);
print_r($keys);

echo '<br/>';
//cria um novo array só com os valores de $array
$values = array_values($array);
print_r($values);

?>