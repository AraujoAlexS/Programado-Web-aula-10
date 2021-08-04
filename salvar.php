<?php

include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];

$sql = "INSERT INTO `tb_pessoas` (`pes_id`, `PES_NOME`, `PES_CPF`, `PES_FUNCAO`) VALUES (NULL, '$nome', '$cpf', '$funcao');";

mysqli_query($conexao, $sql);
?>

<script type='text/javascript'>
    alert('Salvo com sucesso');
    window.location.href = 'index.php';
</script>