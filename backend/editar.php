<?php
    require_once('../backend/conexao.php');
     $stmt = $conn->prepare("SELECT * FROM tb_livros where IDLIVRO = :ID");

     $id = $_GET['id'];
    
     $stmt->bindParam(":ID", $id);
     
     $stmt->execute();
     $livro = $stmt->fetch();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

        <form method="POST" action="update.php">
            <div>
                Livro desejado: <input type="text" name="id" value="<?php echo $livro['idlivro'] ?>"> <br>
               Novo Titulo: <input type="text" name="Titulo" value="<?php echo $livro['Titulo'] ?>"><br>
               Novo Autor: <input type="text" name="Autor" value="<?php echo $livro['Autor'] ?>" ><br>
               Nova editora: <input type="text" name="Editora" value="<?php echo $livro['Editora'] ?>"><br>
               Novo Preço: <input type="text" name="Preço" value="<?php echo $livro['Preco'] ?>"><br>
                <input type="submit" name="enviar" value="Editar">

            </div>

            
        </form>

    </body>
</html>
