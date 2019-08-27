<?php
//conexão com o banco de dados
$serverame ="localhost";
$username = "root";
$password = "";
$db_name = "crud";

$conn = mysqli_connect($serverame,$username,$password,$db_name);
mysqli_set_charset($conn, "utf8");

if(mysqli_connect_error()):
    echo "Erro na Conexão: ", mysqli_connect_error();
endif;