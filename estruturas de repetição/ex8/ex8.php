<?php
//strtoupper usado para deixar as palavras MAIÚSCULAS
$palavra=strtoupper($_GET['palavra']);
$repeticoes=$_GET['repeticoes']; 

for ($i=1;$i<=$repeticoes;$i++)
{
//&nbsp usado para dar espaço entre palavras, na mesma linha.
// $i."-" usado para numerar as palavas concatenadas.

    echo $i."-".$palavra."&nbsp;&nbsp;&nbsp;"; 

}
