<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$datanascimento = $_POST['datanascimento'];
$senha = $_POST['senha'];

$server = 'localhost';
$usuario = 'root';
$senhabd = '';
$database = 'enjoy_cursos_bd';
$conectar_bd = new mysqli($server, $usuario, $senhabd, $database);

if($conectar_bd->connect_error){
    die("Falha ao conectar ao banco de dados: ".$conectar_bd->connect_error);
}

$smtp = $conectar_bd->prepare("INSERT INTO aluno (nome_aluno,email_aluno,cpf_aluno,telefone_aluno,data_nascimento_aluno,senha_aluno) VALUES (?,?,?,?,?,?)");
$smtp->bind_param("ssssss",$nome, $email, $cpf, $telefone, $datanascimento, $senha);

if($smtp->execute()){
    echo "Dados cadastrados com sucesso!";
}else {
    echo "Falha no cadastramento...".$smtp->error;
}

$smtp->close();
$conectar_bd->close();

/*if(isset($_POST['submit'])){
    include_once('conexao.php');

    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $cpf = $mysqli->real_escape_string($_POST['cpf']);
    $telefone = $mysqli->real_escape_string($_POST['telefone']);
    $datanascimento = $mysqli->real_escape_string($_POST['datanascimento']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM aluno WHERE email = '$email' AND cpf = '$cpf' AND telefone = '$telefone' ";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;
    if($quantidade > 0){
        echo "Email, CPF ou Telefone ja cadastrado";
        exit;
    }else{
        $result = mysqli_query($mysqli,"INSERT INTO aluno(nome, email, cpf, telefone, data_nascimento, senha) VALUES ('$nome', '$email', '$cpf', '$telefone', '$datanascimento', '$senha')");
    }
}*/




    /*print_r($_POST['nome']);
    print_r('<br>');
    print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['cpf']);
    print_r('<br>');
    print_r($_POST['telefone']);
    print_r('<br>');
    print_r($_POST['datanascimento']);
    print_r('<br>');
    print_r($_POST['senha']);
    print_r('<br>');*/
?>