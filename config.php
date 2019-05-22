<?php
//Função Conexao com o banco
function DBConnect(){
    
    $sql = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die(mysqli_error());
    mysqli_set_charset($sql,CHARSET) or die (mysqli_error($sql));
    return $sql;
    
}
?>
