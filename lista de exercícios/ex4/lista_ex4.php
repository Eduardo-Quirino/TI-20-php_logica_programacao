<!-- lista_ex4.php) - lista_ex4.html
Faça um algoritmo para ler: número da conta do cliente, saldo, débito e crédito. Após, calcular e escrever o saldo atual (saldo atual = saldo - débito + crédito). Também testar se saldo atual for maior ou igual a zero escrever a mensagem 'Saldo Positivo', senão escrever a mensagem 'Saldo Negativo'. -->

<?php

//variáveis locais vão receber informações do formulário preenchido

$numeroconta = $_POST['numeroconta'];
$saldoanterior = $_POST['saldoanterior'];
$debito= $_POST['debito'];
$credito= $_POST['credito'];

//calcular o saldo atual
$saldoatual = $saldoanterior - $debito + $credito;

//formatar
$saldoatual= number_format($saldoatual, 2);

//testando se saldo é positivo ou negativo
if ($saldoatual>0) 
{
    echo ("Saldo positivo --> R$ $saldoatual");
}
else if ($saldoatual==0)
{
    echo ("Saldo zerado! Não gaste!! --> R$ $saldoatual");
}
else {
    echo ("Saldo negativo --> R$ $saldoatual");
}
?>