<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de arquivo</h1>

<?php
//função echo é para escrever na tela
    echo("Ola Mundo");


    //declaração de variaveis
    $nome = 'Murilo'; //variavel tipo String
    $idade = 18; //variavel tipo intero
    $peso = 64.1; //variavel tipo float

    /* Status possiveis para a variavel 
    true - significa que a aula não acabou
    false - significa que a aula acabou*/

    $status_aula = false; //variavel tipo boolean


    // print das variaveis
    echo ("<br>Nome: $nome  
        <br>Idade: $idade 
        <br>Peso: $peso");


    /*exemplo de if
    o if tem três elementos
    1º variavel a ser testada
    2º operador de comparação (== != > >= < <=)
    3º valor a ser comparado*/
    if($status_aula == true){
        echo('<br>Esta acontecendo a aula');
    }else{
        echo('<br>A aula acabou');
    }

    if($idade >= 18)
        echo('<br>Maior de idade');
    else
        echo('<br>Menor de idade');
    

?>

</body>
</html>