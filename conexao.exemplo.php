<?php
define('HOST','seu_host');
define('USUARIO','seu_usuario');
define('SENHA','sua_senha');
define('DB','seu_banco');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Não foi possível conectar');
?>