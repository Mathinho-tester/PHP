    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adicionar cursos na tabela</title>
    </head>
    <body>
        <form   method="post" enctype="multipart/form-data">
            <label for="">Titulo:</label>
            <input type="text" name="titulo"><br><br>
            <label for="">Descriçao:</label>
            <input type="text" name="descricao"><br><br>
            <label for="">Valor:</label>
            <input type="number" name="valor"><br><br>
            <label for="">Imagem:</label>
            <input type="file" name="logo" id="logo" required><br><br>
            <input type="submit" name="adicionar" href="index3.php">
        </form>
        <?php
            include "util.php";
                $conn=conecta();
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['adicionar'])) {
                    $titulo   = $_POST["titulo"];
                    $descricao = $_POST["descricao"];
                    $valor = $_POST["valor"];                    
                    $sqlInsert = "INSERT INTO cursos (titulo, descricao, valor) VALUES (:titulo, :descricao, :valor)";
                    $stmt = $conn->prepare($sqlInsert);
                    
                    if ( $stmt->execute([
                          ':titulo'    => $titulo,
                          ':descricao' => $descricao,
                          ':valor'     => $valor  ])) {

                         salvaUpload($conn, $_FILES, 'logo');

                    }
                }
             header("index3.php");   
        ?>
    </body>
    </html>