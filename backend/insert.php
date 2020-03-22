<?php

require_once('conexao.php');

$Title = $_POST['Titulo'];
$Actor = $_POST['Autor'];
$Editor = $_POST['Editora'];
$Price = $_POST['Preco'];

$stmt = $conn->prepare("INSERT INTO tb_livros(Titulo, Autor, Editora, Preco) VALUES(:TITULO, :AUTOR, :EDITORA, :PRECO)");


$titulo = $Title;          //DEFININDO VARIAVEIS
$autor = $Actor;
$editora = $Editor ;
$preco = $Price;

$stmt->bindParam(":TITULO", $titulo);
$stmt->bindParam(":AUTOR", $autor);             //SETANDO AS VARIAVEIS
$stmt->bindParam(":EDITORA", $editora);
$stmt->bindParam(":PRECO", $preco);

$stmt->execute(); //EXECUTANDO O CODIGO.
?>
<p>Cadastrado com sucesso!</p>

<a href="../frontend/index.html">Voltar para o inicio </a>

