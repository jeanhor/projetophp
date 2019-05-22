<?php
 
$host  = "";
$user  = "";
$pass  = "";
$banco = "";
$link =  PDO ($host,$user,$pass,$banco);
IF (PDO($link)){
    ECHO "ok";
}