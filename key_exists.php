<?php

//verifica se um determinado array possui uma chave
$array = [
    'nome' => 'Renan',
    'idade' => 90,
    'profissao' => 'dev',
    'altura' => 1.70
];

$age =  key_exists('idade', $array) ? $array['idade'] : 'não existe!!!';

echo 'Idade: ' .$age;
?>