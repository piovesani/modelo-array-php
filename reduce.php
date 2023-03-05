<?php

//array reduce, para cada items do array é executado uma função
$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9]
];

function contarMasc($sub, $item){

    if($item['sexo'] === 'M'){
        $sub++;
    }
    return $sub;
}

function contarFem($sub, $item){

    if($item['sexo'] === 'F'){
        $sub++;
    }
    return $sub;
}

function somaNota($sub, $item){

    if(isset($item['nota'])){
        $sub += $item['nota'];
    }
    return $sub;
}

$totalMasc = array_reduce($pessoas, 'contarMasc');
$totalFem = array_reduce($pessoas, 'contarFem');
$soma = array_reduce($pessoas, 'somaNota');

echo "São ".$totalMasc ." Masc e ". $totalFem ."<br/>";
echo "A média de nota das pessoas é " .number_format($soma / ($totalMasc + $totalFem), 2);



?>