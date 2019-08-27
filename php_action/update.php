<?php
//sessão
session_start();

//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($conn,$_POST['nome']);
    $sobrenome = mysqli_escape_string($conn, $_POST['sobrenome']);
    $email = mysqli_escape_string($conn,$_POST['email']);
    $idade = mysqli_escape_string($conn,$_POST['idade']);

    $id = mysqli_escape_string($conn,$_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome',sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";


    if (mysqli_query($conn, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../index.php');

    endif;
endif;