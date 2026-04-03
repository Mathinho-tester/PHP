<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Atividade 2</title>
</head>
<body>
    <h1>Atividade 2</h1>
    <div class="centralizar">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Numero de chamada</th>
                    <th>Ra</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomes = [
                        ["nome" => "João", "cel" => "14996348754","nunch"=>1,"ra"=>1],
                        ["nome" => "Matheus", "cel" => "14927641111","nunch"=>2,"ra"=>2],
                        ["nome" => "Kauã", "cel" => "14928923847","nunch"=>3,"ra"=>3],
                        ["nome" => "Fabricio", "cel" => "14928927563","nunch"=>4,"ra"=>4],
                        ["nome" => "Felipe", "cel" => "14928920926","nunch"=>5,"ra"=>5],
                        ["nome" => "GUilherme",  "cel" => "14988742348","nunch"=>6,"ra"=>6]

                    ];

                    foreach ($nomes as $nome) {
                        echo "<tr>
                                <td><p>{$nome['nome']}</p></td>
                                <td><p>{$nome['cel']}</p></td>
                                <td><p>{$nome['nunch']}</p></td>
                                <td><p>{$nome['ra']}</p></td>
                              </tr>
                            "
                    ;}
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
