<?php
/*
– 3x² + 18x -15 = 0   (produz um gráfico: parábola)
  a      b    c

a= -3
b= 18
c= -15

x1= (-b+raiz(b² - 4ac))/(2a)
x2= (-b-raiz(b² - 4ac))/(2a)
*/

$a= -3;
$b= 18;
$c= -15;

// x1= (-b+raiz(b² - 4ac))/(2a)
//raiz quadrada = square root = sqrt
//pow ($b,2) --> b² = b * b
$x1=(-$b+sqrt(pow($b,2)-4*$a*$c))/(2*$a);
$x2=(-$b-sqrt($b*$b-4*$a*$c))/(2*$a);

echo ("As raízes da equação são: $x1, $x2");
?>