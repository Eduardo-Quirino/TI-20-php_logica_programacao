<?php
/*/* Atribuir a 3 variáveis de notas os valores tirado pelo aluno João. Calcular a média ponderada sabendo-se que os valores dos pesos são: p1=1,p2=2,p3=3 e exibir da seguinte maneira: João teve n1=valor, n2=valor e n3=valor. Sua média é valor.*/
/* Atribuir a 3 variáveis de notas os valores tirado pelo aluno João. Calcular a média aritmética e exibir da seguinte maneira: João teve n1=valor, n2=valor e n3=valor. Sua média é valor.*/
$nome="João";
$n1=7.0;
$n2=10.0;
$n3=5.0;
$p1=1;
$p2=2;
$p3=3;
//média ponderada divide-se pela soma dos pesos
$media=($n1*$p1+$n2*$p2+$n3*$p3)/($p1+$p2+$p3);
//formatando o valor com 1 casa decimal
//number_format(o que eu quero formatar, nº de casas decimais)
$media=number_format($media,1);
//imprimindo
//interpolação
echo ("$nome teve n1=$n1, n2=$n2, n3=$n3. Sua média é $media");
?>