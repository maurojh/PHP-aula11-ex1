<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<?php
$email = $_GET['email']; 
    
$servidor = "localhost";
$usuario = "root";
$senha = "toor";
$banco = "site"; // novo campo

// Cria a conexão:
// Novo objeto!
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica a conexão
// Atributo do objeto $conexao
if( $conexao->connect_error ) {
   die("A conexão falhou: " . $conexao->connect_error());
}

$sql = "SELECT * FROM `usuarios` WHERE `email` = '$email'";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    echo "Encontrei o email digitado.";
} else {
    echo "Nenhum email assim";
}

// método do objeto $conexao
$conexao->close();
?>

</body>
</html>