<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>foi</title>
    </head>
</html>
<?php
include "util.php";
$conn = conecta();

// Verifica se o valor foi enviado pelo formulário
if (isset($_POST['valor'])) {
    $valor = $_POST["valor"];

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
                </tr>
            </thead>
            <tbody>";

    while ($linha = $select->fetch()) {
        echo "<tr>
                <td>" . $linha['id'] . "</td>
                <td>" . $linha['titulo'] . "</td>
                <td>" . $linha['descricao'] . "</td>
                <td>" . $linha['valor'] . "</td>
              </tr>";
    }

    echo "  </tbody>
          </table>";
          
} else {
    echo "<p>Por favor, utilize o formulário para filtrar os cursos.</p>";
}
?>