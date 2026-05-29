<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>escolher valor de cursos</title>
</head>
<body>
    <header>
        <H1>Fazendo o CRUD para a fazer o ecommerce</H1>
    </header>
    <form method="post">
        <label for="">Valor:</label>
        <input type="number" id="valor" name="valor">
        <button type="submit" >Filtrar</button>
    </form>
    <?php
        include "util.php";
        $conn = conecta();

        if (isset($_POST['valor'])) {
            $valor = $_POST["valor"];
            $forma;
            $varSQL = "SELECT * FROM cursos WHERE (valor < :valor)";
            $select = $conn->prepare($varSQL);
            $select->bindParam(":valor", $valor);
            $select->execute();
            echo "<table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Logo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($linha = $select->fetch()) {
                $id = $linha['id']; 
                $forma = ""; 
                if (file_exists("imagens/$id.png")) {
                    $forma = ".png";
                } else if (file_exists("imagens/$id.webp")) {
                    $forma = ".webp";
                } else if (file_exists("imagens/$id.jpeg")) {
                    $forma = ".jpeg";
                } else if (file_exists("imagens/$id.jpg")) {
                    $forma = ".jpg";
                } else {
                    echo "Adicionar forma de imagem"; 
                }
                echo "<tr>
                        <td>" . $linha['id'] . "</td>
                        <td>" . $linha['titulo'] . "</td>
                        <td>" . $linha['descricao'] . "</td>
                        <td>" . $linha['valor'] . "</td>
                        <td><img src='imagens/" . $linha['id'] .$forma . "' width='50' alt='Logo'></td>
                        <td><a href='alterarCursos.php?id=.$linha[id]'.>Alterar</a></td>
                        <td><a href='excluirCursos.php?id=.$linha[id]'.>Excluir</a></td>
                    </tr>";
            }
            echo "  </tbody>
                </table>";
            echo "<td><a href='adicionarCursos.php'>Adicionar</a></td>";    
        } else {
            echo "<p>Por favor, utilize o formulário para filtrar os cursos.</p>";
        }
    ?>
</body>
</html>