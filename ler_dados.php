
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lendo banco de dados</title>
</head>
<body>
    <div class="container">
    <header>
        <h1>conexão com o banco de dados</h1>

    </header>
    <aside class="aside1">
        <h1>aside1</h1>
    </aside>
    <form method="post">
        <label for="">Titulo:</label><br>
        <input type="text" name="titulo"><br><br>
        <label for="">Descrição:</label><br>
        <input type="text" name="descricao"><br><br>
        <label for="">Valor</label><br>
        <input type="number" name="valor"><br><br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <main>
        <?php
            include "util.php";
            $conn=conecta();
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {
                $titulo    = $_POST["titulo"];
                $descricao = $_POST["descricao"];
                $valor     = $_POST["valor"];

               
                $sqlInsert = "INSERT INTO cursos (titulo, descricao, valor) VALUES (:titulo, :descricao, :valor)";
                $stmt = $conn->prepare($sqlInsert);
                
                $stmt->execute([
                    ':titulo'    => $titulo,
                    ':descricao' => $descricao,
                    ':valor'     => $valor
                ]);
            }
            $varSQL = "select *  from cursos";
            $select = $conn ->query($varSQL);
            echo "     <table>
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Titulo</th>
                                    <th>Descricao</th>
                                    <th>valor</th>
                                </tr>
                            </thead>
                            <tbody>";
            while($linha = $select->fetch()){
            echo "
                            
                                <tr>
                                    <td>".$linha['id']."</td>
                                    <td>".$linha['titulo']."</td>
                                    <td>".$linha['descricao']."</td>
                                    <td>".$linha['valor']."</td>
                                </tr>
                            ";
            }
            echo "</tbody>
            </table>";
        ?>
        </main>

    <aside class="aside2">
        <h1>aside2</h1>
    </aside>
    <footer>
        <h1>Footer</h1>
    </footer>
    </div>
</body>
</html>