<!-- lista_ex1.php) - lista_ex1.html
Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo). -->

<?php

$teste = $_GET['teste'];

if($teste <0){

   echo " O valor é negativo ";

}else{

   echo " o valor é Positivo";

}
?>