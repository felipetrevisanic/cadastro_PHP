<?php
    //acessa o banco com os dados utilizados
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "root");
    define("DB", "cadastro");
    $conn = new mysqli(HOST, USER, PASS, DB);
  
    //verifica se o banco esta conectado
    if($conn->connect_errno){
        echo "falha ao conectar: (".$mysqli->connecterrno . ")" . $mysqli->connect_error;
    }
?>