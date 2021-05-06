<?php
//comentários de uma linha

/* comentários que 
utilizam mais que 
uma linha */

# também representa um comentário de 1 linha

//variável de memória
$nome='TI20';
echo('Nome = $nome');  //php mostra a variável $nome'
echo("Nome = $nome");  //php mostra o conteúdo da variável

//concatenar (strings) informações no php  .
$sobrenome='Senac'; //atribuição (armazenamento do Senac na variavel sobrenome)
echo ('<br>Nome completo= '.$nome.' '.$sobrenome);

echo "<br>";
echo var_dump($nome);

$nome=2;
echo "<br>";
echo var_dump($nome);

$nome=20.5;
echo "<br>";
echo var_dump($nome);

$nome=false;
echo "<br>";
echo var_dump($nome);

echo "<h1>PHP não é fortemente tipado, a variável tem o tipo de acordo com seu conteúdo!!!!</h1>";
?>