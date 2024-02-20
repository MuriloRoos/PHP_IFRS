<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$frequencia = 120;
$frequenciaAluno = 50;

$cargaHoraria = ($frequenciaAluno / $frequencia) * 100;

printf("A frequencia do aluno foi de %.2f porcento", $cargaHoraria);


?>


</body>
</html>