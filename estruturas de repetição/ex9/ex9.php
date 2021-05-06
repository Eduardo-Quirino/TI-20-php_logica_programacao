<?php
$num=$_GET['num'];

//solução com o uso do for
for($i=1; $i<11;$i++)
{
    // 4 x 1 = 4
    // 4 x 2 = 8
    // interpolação
    $resultado = $num*$i;
    echo "$num x $i = $resultado <br>";
}
echo "<hr>";

#--------------------------------------------

$i=1;
//solução com usando while
while ($i<=10)
{
    $resultado = $num*$i;
    echo "$num  x  $i =$resultado<br>";
    $i++;  //para evitar o LOOPING
}
echo "<hr>";

#--------------------------------------------

//solução com usando do...while
$i=1;
do 
{
    $resultado = $num*$i;
    echo "$num x $i =$resultado<br>";
    $i++;  //para evitar o LOOPING
}
while ($i<=10);
#--------------------------------------------

?>