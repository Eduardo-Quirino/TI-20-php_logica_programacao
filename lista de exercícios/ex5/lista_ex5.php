<!-- lista_ex5.php)- lista_ex5.html
Faça um algoritmo onde tenha uma variável de memória para armazenar a descrição do produto (nome), outra para armazenar a quantidade adquirida e outra para armazenar o preço unitário. Calcular e imprimir o total (total = quantidade adquirida * preço unitário), o desconto e o total a pagar (total a pagar = total - desconto), sabendo-se que:
- Se quantidade <= 5 o desconto será de 2%
- Se quantidade > 5 e quantidade <=10 o desconto será de 3%
- Se quantidade > 10 o desconto será de 5% -->

<?php
//calculando o total da venda sem o desconto
$totalsemdesconto= $_POST['preco'] * $_POST['qtd'];
/*calculando o percentual do desconto
- Se quantidade <= 5 o desconto será de 2%
- Se quantidade > 5 e quantidade <=10 o desconto será de 3%
- Se quantidade > 10 o desconto será de 5%
*/
if ($_POST['qtd']<=5) 
{
    $desconto=2/100;
}
if ($_POST['qtd']>5 && $_POST['qtd']<=10)
{
    $desconto=0.03;
}
if ($_POST['qtd']>10) 
{
    $desconto=5/100;
}
//calculando o valor do desconto
$valordesconto = $totalsemdesconto * $desconto;
//calculando o valor a pagar já considerando o desconto
$totalcomdesconto = $totalsemdesconto - $valordesconto;
//imprimindo os resultados
echo ("Cliente comprou ".strtoupper($_POST['nome'])."<br>"."Quantidade: ".$_POST['qtd']."<br>"."Preço unitário: R$ ".number_format($_POST['preco'],2)."<br>"."Valor sem desconto: R$ ".number_format($totalsemdesconto,2)."<br>"."Desconto: R$ ".number_format($valordesconto,2)."<br>"."Valor a pagar: R$ ".number_format($totalcomdesconto,2));
?>