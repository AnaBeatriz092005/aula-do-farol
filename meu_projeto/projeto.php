<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo "Isso é um teste de conexão do servidor local"
?>    
</body>
</html>
<style>
body {
    background-color: #007BFF; /* Cor de fundo clara */
    font-family: Arial, sans-serif; /* Fonte padrão */
    margin: 0;
    padding: 0;
}
</style>

<?php

#Tipos de Dados 

//Sting
$nome="yasmin";
//Números Inteiros
$idade=22;
//Boleanos
$estaChovendo=true;
//Arrays
$frutas=["banana","morango","uva"];
//Array Associativo
$pessoa = [
   "nome"=> "Bia",
   "idade"=> 19,
   "cidade"=> "Brasília"
]
//Constantes
define("PI",3.14159);
#Operadores Aritiméticos
$soma= 5+3; //8
$subtracao=5-3; //2
$multiplicacao= 5*3; //15
$divisao= 15/3; //5
#Operadores de Comparação
$a=5;
$b="5";
$iqual = ($a == $b); //true
$iqual = ($a === $b); //false
$diferente = ($a != $b); //false
$maior = ($a > 3); //true
$menor = ($a < 10); //true
#Operadores Logicos
$and=(true&&true); //true : Operador '&&'/(AND) retorna apenas se ambas as condiçôes forem verdadeiras
/*
Condição 1          Condição          Resultado
true                true              true
true                false             false
false               true              false
false               false             false
*/
$idade=18;
$temHabilitacao= true;
//vamos verificar se pode dirigir
if($idade >=18 && $temHabilitacao){
    echo"pode dirigir";}
     else {
        echo "Não Pode derigir você é criança ainda!":
     }



?>


</body>
</html>
