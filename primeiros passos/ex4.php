<?php 

/* Atribuir a 3 variáveis de notas os valores tirado pelo aluno João. Calcular a média aritmética e exibir da seguinte maneira: João teve n1=valor, n2=valor e n3=valor. Sua média é valor.*/

$nome="João";

$n1=7.0;

$n2=10.0;

$n3=5.0;



$media=($n1+$n2+$n3)/3;

//formatando o valor com 1 casa decimal

//number_format(o que eu quero formatar, nº de casas decimais)

$media=number_format($media,1);

//imprimindo

echo ("$nome teve n1=$n1, n2=$n2, n3=$n3. Sua média é $media");

?>