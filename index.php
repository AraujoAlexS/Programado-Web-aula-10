<?php
    include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST' action="salvar.php">
        
        nome: <input type="text" name='nome'> </br>
        cpf: <input type="text" name='cpf'> </br>
        função: <input type="text" name='funcao'> </br>

        <input type="submit" value='Salvar dados'>
    </form>
    <hr>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>FUNÇÃO</th>
        </tr>
        <?php
            $sql = "SELECT * FROM `tb_pessoas` ";

            $resultados = mysqli_query($conexao, $sql);
            while ($linha = $resultados->fetch_assoc()){
                echo    "<tr> 
                            <td>".$linha['pes_id']."</td>
                            <td>".$linha['PES_NOME']."</td>
                            <td>".$linha['PES_CPF']."</td>
                            <td>".$linha['PES_FUNCAO']."</td>
                        </tr>";
            }

        ?>
    </table>
</body>
</html>