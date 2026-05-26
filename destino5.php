<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>adiçao de genero com atribuição de informação para o banco</title>
    </head>
</html>
<?php
            include "util.php";
            $conn=conecta("pgsql:host=localhost;port=5432;dbname=aluno;user=postgres;password=postgres");
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {
                $nome   = $_POST["nome"];
                $turma = $_POST["turma"];
                $genero = $_POST["genero"];

            if($genero==1){
                $genero="masculino";
            }
            else{
                $genero = "Feminino";
            }
                $sqlInsert = "INSERT INTO alunos (nome, turma, genero) VALUES (:nome, :turma, :genero)";
                $stmt = $conn->prepare($sqlInsert);
                
                $stmt->execute([
                    ':nome'    => $nome,
                    ':turma' => $turma,
                    ':genero'     => $genero
                ]);
            }
            $varSQL = "select *  from alunos";
            $select = $conn ->query($varSQL);
            echo "     <table>
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nome</th>
                                    <th>turma</th>
                                    <th>genero</th>
                                </tr>
                            </thead>
                            <tbody>";
            while($linha = $select->fetch()){
            echo "
                            
                                <tr>
                                    <td>".$linha['id']."</td>
                                    <td>".$linha['nome']."</td>
                                    <td>".$linha['turma']."</td>
                                    <td>".$linha['genero']."</td>
                                </tr>
                            ";
            }
            echo "</tbody>
            </table>";
        ?>