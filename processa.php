<?php

include_once ("conexao.php");

$nome  = filter_input(INPUT_POST, 'ncelular',FILTER_SANITIZE_STRING);
$linha = filter_input(INPUT_POST, 'linha',FILTER_SANITIZE_EMAIL);

echo "ncelular: $nome  <br>";
echo "linha:    $linha <br>";

//$result  = "INSERT INTO user (usuario,senha)VALUES ('$nome','$linha')";
//$result_usu  = mysqli_query($sql,$result);
