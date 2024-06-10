<?php
include('conexao.php');

    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM aluno WHERE email_aluno = '$email' and senha_aluno = '$senha' ";

    $result = $conectar_bd->query($sql);

    //print_r($result);

    if(mysqli_num_rows($result) < 1){
        print_r('Não existe');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: login.html');
    }else {
        print_r('Existe');
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location: perfil-aluno.php');
    }

?>