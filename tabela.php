<html>
    <head>
        <title>tabela</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
    $Nome = $_POST["Nome"];
    $Celular = $_POST["Celular"];
    $Cidade = $_POST["Cidade"];

    echo "<table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Celular</th>
                        <th>Cidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>$Nome</th>
                        <th>$Celular</th>
                        <th>$Cidade</th>
                </tbody>
          </table>";
?>        
    </body>
</html>
