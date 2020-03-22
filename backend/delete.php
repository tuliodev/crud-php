<?php

require_once('conexao.php');


$stmt = $conn->prepare("DELETE FROM tb_livros WHERE idlivro = :ID");


$id = $_GET['id'];

$stmt->bindParam(":ID", $id);

$stmt->execute();
 

header('Location: listar.php');
