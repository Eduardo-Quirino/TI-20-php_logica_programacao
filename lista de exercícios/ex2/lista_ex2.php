<!-- lista_ex custo total da compra2.php) - lista_ex2.html
As maçãs custam R$ 1,30 cada se forem compradas menos de uma dúzia, e R$ 1,00 se forem compradas pelo menos 12. Escreva um programa que leia o número de maçãs compradas, calcule e escreva o. -->

<?php

$qtd = $_GET['qtd'];
if ($qtd<12) 
{ 
    $preco=1.3;
}
else
{
    $preco=1.0;
}
$total=$qtd*$preco;  
//formatar o total
$total=number_format($total,2);
//formatar o preço unitário da maçã
$preco=number_format($preco,2);
//exibindo o resultado da venda
if ($qtd>1)
{
    echo ("Foram compradas $qtd  maçãs ao preço unitário de R$ $preco, totalizando R$ $total");
}
else
{
    echo ("Foi comprada $qtd  maçã ao preço unitário de R$ $preco, totalizando R$ $total");
}
?>