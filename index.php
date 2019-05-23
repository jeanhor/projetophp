<?php

include_once ("config.php");

include_once ("conexao.php");
?>
<html>
    <head>
        <title> Cadastro de Numeros Celulares </title>   
    </head>
    <body>
       <form method="POST" action="processa.php">
            <label>Numero do Celular:</label>
            <input type="text" name="ncelular" placeholder="Digite o nome completo"><br><br>
       
            <label>Usuário da Linha: </label>
            <input type="text" name="linha" placeholder="Digite o Usuário da Linha"><br><br>
        
            <input type="submit" value="Cadastrar">
        
       
       </form>
        
        <?php
        $testar = DBConnect();
            if (!$testar)
                {die("Connection failed: " . mysqli_connect_error());}
                 echo "Connected successfully";
        $sqlinsert = "INSERT INTO user(usuario,senha)VALUES (, 'teste') ";
                 
        ?>
        
    </body>
    
</html>