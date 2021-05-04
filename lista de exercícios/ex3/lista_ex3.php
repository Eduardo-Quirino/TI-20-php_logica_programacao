<!-- lista_ex3.php) - lista_ex3.html
Crie duas variáveis de memória e atribua valores a elas e exiba qual variável contém o maior valor. -->

<?php

$n1=$_GET['n1'];

$n2=$_GET['n2'];

if ($n1>$n2) 
{
    $maior='N1';

    $valor=$n1;
}
else
{
    $maior='N2';
    $valor=$n2;
}
echo ("A variável $maior é a que tem o maior valor ou seja $valor! ");
?>