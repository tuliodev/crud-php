<?php

require_once('conexao.php');


$stmt = $conn->prepare("UPDATE tb_livros SET Titulo = :TITULO, Autor = :AUTOR, Editora = :EDITORA, Preco = :PRECO WHERE idlivro = :ID");

$id = "2";
$titulo = "Livro";          //DEFININDO VARIAVEIS
$autor = "Tulio";
$editora = "Pedro";
$preco = "R$20,00";

$stmt->bindParam(":ID", $id);
$stmt->bindParam(":TITULO", $titulo);
$stmt->bindParam(":AUTOR", $autor);             //SETANDO AS VARIAVEIS
$stmt->bindParam(":EDITORA", $editora);
$stmt->bindParam(":PRECO", $preco);


$stmt->execute(); //EXECUTANDO O CODIGO.

?>

<p>Editado com sucesso!</p>

<a href="../frontend/index.html">Voltar para o inicio </a>