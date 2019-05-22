<?php

include_once ("conexao.php");

$nome  = filter_input(INPUT_POST, 'nomesoftware',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";

$result  = "INSERT INTO LENTI (usuario,email)VALUES ('$nome','$email')";
$result_usu  = mysqli_query($conn,$result);
