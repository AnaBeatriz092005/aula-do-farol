

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <body>
   
    <?php
$nome = "Isso é uma variavel!";
$numero = 5;

echo $nome . "Número: " . $numero;

//nâo confunda :
//echo $nome + "número:" + $numero;

$numero = "porém PHP é fracamente tipado :/";
echo "<br><br>" . $numero;

//Teste de usuario :

$nome = "Bia";
$sobrenome = "Dos Santos";
$idade = 19;

echo  $nome , $sobrenome . "minha idade é" . $idade;

$n1 = 2;
$n2 = 3;
echo $n1 + $n2;

echo "<br><br> resultado: ";
echo 4 + 5;
echo "<br><br> expressão ";
echo 4 + 5 * 2;
echo "<br><br> expressão2 ";
echo 4 + 5 * 2 / 10;
?>
  </body>
</html>

<style>
    body{
        background-color:violet;
    }
</style>




