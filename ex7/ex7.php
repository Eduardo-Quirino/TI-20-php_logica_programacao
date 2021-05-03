<?php
//superglobal $_GET[a,b,c]
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];

//Precisamos sempre VERIFICAR SE O a ESTÁ ZERADO OU NÃO
// 3X+1=0    0X²+3X+1=0
if ($a!=0)   //if composto - if/else
 {
    $x1=(-$b+sqrt(pow($b,2)-4*$a*$c))/(2*$a);
    $x1=number_format($x1,1);
    $x2=number_format((-$b-sqrt($b*$b-4*$a*$c))/(2*$a),1);
    echo ("As raízes da equação são: $x1, $x2"); //interpolação
 }   
else
{
    echo ("Os números não configuram uma equação de 2º grau!!!");
}
?>