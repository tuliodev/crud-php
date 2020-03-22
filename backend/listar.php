<?php
require_once('conexao.php');

$stmt = $conn->prepare("SELECT * FROM tb_livros ORDER BY  Titulo");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row ) { 

    foreach($row as $key => $value) {

        echo "<strong>".$key.":</strong>".$value."<br/>";
    }
    echo "<a href=\"delete.php?id={$row['idlivro']}\">Deletar</a><br>"; 
    echo "<a href=\"editar.php?id={$row['idlivro']}\">Editar</a><br>"; 
    
    echo "============================================================<br>";
}   


