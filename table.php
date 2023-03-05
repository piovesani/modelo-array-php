<?php


$array = [
    'nome' => 'Renan',
    'idade' => 90,
    'profissao' => 'dev',
    'altura' => 1.70
];

$keys = array_keys($array);
$values = array_values($array);

?>

<table border="1">
    <?php foreach($array as $key => $value): ?>
        <tr>
            <th><?php echo $key; ?></th>
            <td><?php echo $value; ?></td>
        </tr>

    <?php endforeach; ?>
</table>

<br/>

<table border="1">
    <tr>
        <?php foreach($keys as $k): ?>
            <th><?php echo $k; ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>        
        <?php foreach($values as $v): ?>
            <td><?php echo $v; ?></td>
        <?php endforeach; ?>
    </tr>
</table>