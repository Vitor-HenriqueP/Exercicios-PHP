<?php
//substituir todas as vogais por *
$string = "Manipulacao de Strings";
echo str_replace(["a","e","o","i","u"], "*", $string);

//verificar se um número é primo
function isPrimo($num){
    for ($i = 2; $i < $num; $i++){
        if($num % $i === 0){
            return false;
        }
    }
    return true;
}
$numero = 19;
if(isPrimo($numero)){
    echo ("<br>");
    echo "<br>";
    echo "\n $numero é um numero primo.";
}
else{
    echo ("<br>");
    echo "\n $numero não é um numero primo.";
}

//Inverter uma string sem usar a função strrev
 $string = "Repeticao";
 $invertida = "";

 for($i = strlen($string) - 1; $i >= 0; $i--){
    $invertida .= $string[$i];
 }
 echo "<br>";
 echo "<br>";
 echo $invertida;

 //crie uma função que verifique se uma palavra é um palindromo

 function isPalindromo($palavra){
    $palavraInvertida= strrev($palavra);
    return strtolower($palavra) === strtolower($palavraInvertida);
 }
echo "<br>";
echo "<br>";
 $teste = "radar";
 if(isPalindromo($teste)){
    echo "$teste é um palíndromo";
 }
 else{
    echo "$teste não é um palíndromo";
 }

 //crie uma função que receba um numero e retorne se é positivo,negativo ou zero
echo "<br>";
echo "<br>";
 function isNumber($number){
    
    if ($number > 0){
        echo "$number é um numero positivo";
    }
    else if ($number<0){
        echo "$number é um numero negativo";
    }
    else if ($number == 0){
        echo "$number é igual a zero";
    }
 }
$number = 0;
isNumber($number);
echo "<br>";
echo "<br>";
//Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha.
function isWord($frase) {
    $palavras = explode(' ', $frase);
    $numeroDePalavras = count($palavras);
    
    echo "Número de palavras na frase: $numeroDePalavras <br>";

    foreach ($palavras as $palavra) {
        echo $palavra . "<br>";
    }
}
$fraseExemplo = "Fala marselo aqui e o marcio xoudebola belesa";
isWord($fraseExemplo);


// Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por ?
for ($i = 1; $i <= 20; $i++) {
    if ($i  % 3 == 0) {
        echo "? <br>";
    }else {echo $i . "<br>";} 
}
echo "<br>";
echo "<br>";
// Crie uma função que remova os espaços em branco de uma string.
function isReplaceXouDeBola($texto) {
    $textoNoSpace = str_replace(' ', '', $texto);
    return $textoNoSpace;
}
$stringExemplo = "XouDeBola Marselo Beleza.";
$resultado = isReplaceXouDeBola($stringExemplo);
echo "String original: $stringExemplo<br>";
echo "String sem espaços em branco: $resultado<br>";
echo "<br>";
echo "<br>";
// Crie um programa que calcule e imprima os números Fibonacci até o décimo termo.
function isFibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}
$resultado = isFibonacci(10);
foreach ($resultado as $numero) {
    echo $numero . " ";
}
echo "<br>";
echo "<br>";
// Crie uma função que receba um texto e retorne se é um pangrama (contém todas as letras do alfabeto pelo menos uma vez).
function isPangrama($texto) {
    $texto = strtolower($texto);

    $texto = preg_replace("/[^a-z]/", "", $texto);

    $UnicLet = array_unique(str_split($texto));

    return count($UnicLet) == 26;
}

$texto1 = "The quick brown fox jumps over the lazy dog";
$texto2 = "Pack my box with five dozen liquor jugs";
$texto3 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit";

echo isPangrama($texto1) ? "É um pangrama" : "Não é um pangrama";
echo "<br>";
echo isPangrama($texto2) ? "É um pangrama" : "Não é um pangrama"; 
echo "<br>";
echo isPangrama($texto3) ? "É um pangrama" : "Não é um pangrama";
echo "<br>";
echo "<br>";
?>