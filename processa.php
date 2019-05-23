<?php

include_once ("conexao.php");
include_once ("config.php");

$nome  = filter_input(INPUT_POST, 'ncelular',FILTER_SANITIZE_STRING);
$linha = filter_input(INPUT_POST, 'linha',FILTER_SANITIZE_STRING);

$testar = DBConnect();
            if (!$testar)
                {die("Connection failed: " . mysqli_connect_error());}
                 echo "Connected successfully";
$sqlinsert = "INSERT INTO user(usuario,senha)VALUES ($nome, $linha) ";

//echo "$nome<br>";
//echo "$linha";

//echo "ncelular: $nome  <br>";
//$sqlinsert = "INSERT INTO user(usuario,senha)VALUES ('teste', 'teste') ";
                      


//$result  = "INSERT INTO user (usuario,senha)VALUES ('$nome','$linha')";
//$result_usu  = mysqli_query($sql,$result);
