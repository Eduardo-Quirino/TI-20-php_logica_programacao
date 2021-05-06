<?php
$codigo=$_GET['codigo'];
//201565  código
//012345  posição
$ano=substr($codigo,0,2);
echo "Ano $ano<br>";

$semestre=substr($codigo,2,1);
echo "Semestre $semestre<br>";

$sequencia=substr($codigo,3,3);
echo "Sequencia $sequencia<br>";

$sequencia=substr_replace($sequencia,'Silvia',2);
echo "Sequencia $sequencia<br>";

echo "Total de caracteres da variável sequencia:".strlen($sequencia);

?>