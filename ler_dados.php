
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
    <main>
        <?php

                $string_conexao= "pgsql:host=localhost;port=5432;dbname=aluno;user=postgres;password=postgres";
                try{
                    $conn= new PDO($string_conexao);
                }
                catch(PDOException $e){
                    echo "Não conectou";
                    exit;
                }

                $varSQL = "select *  from estudante";
                $select = $conn ->query($varSQL);
                echo "     <table>
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nome</th>
                                        <th>telfone</th>
                                        <th>link</th>
                                    </tr>
                                </thead>
                                <tbody>";
                while($linha = $select->fetch()){
                echo "
                                
                                    <tr>
                                        <td>".$linha['id']."</td>
                                        <td>".$linha['nome']."</td>
                                        <td>".$linha['telefone']."</td>
                                        <td><a href='https://www.youtube.com/watch?v=rrim6_9VSeM&list=RDrrim6_9VSeM&start_radio=1' target='black'><img height=40 src='./imagens/lapis.png'></a></td>
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