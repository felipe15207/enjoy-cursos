<?php
// Iniciar a sessão
session_start();

// Incluir arquivo TCPDF
include('TCPDF-main\tcpdf.php');

// Conectar ao banco de dados
include('conexao.php'); // Supondo que este arquivo contenha as credenciais de conexão

// Obter o e-mail da sessão
$email = $_SESSION['email'];

// Consulta SQL para obter os dados do aluno com base no e-mail da sessão
$query = "SELECT nome_aluno, cpf_aluno FROM aluno WHERE email_aluno = '$email'";
$resultado = $conectar_bd->query($query);

// Verificar se a consulta teve sucesso
if ($resultado) {
    // Fetch dos dados do aluno
    $aluno = mysqli_fetch_assoc($resultado);
    
    // Criar novo objeto TCPDF
    $pdf = new TCPDF();
    
    // Adicionar página
    $pdf->AddPage();
    
    // Definir fonte
    $pdf->SetFont('times', 'B', 12);
    
    // Escrever conteúdo no PDF
    $pdf->Cell(0, 10, 'Certificado de Conclusão de Curso', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Nome do Aluno: ' . $aluno['nome_aluno'], 0, 1);
    $pdf->Cell(0, 10, 'CPF do Aluno: ' . $aluno['cpf_aluno'], 0, 1);
    
    // Saída do PDF (para o navegador)
    $pdfData = $pdf->Output('', 'S');
} else {
    // Se a consulta falhar, exibir mensagem de erro
    echo "Erro ao consultar banco de dados: " . mysqli_error($conectar_bd);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil aluno - Enjoy Cursos</title>
    <link rel="shortcut icon" href="images/logo-enjoycursos.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/mobile.css" media="screen and (max-width:768px)">
    <link rel="stylesheet" href="styles/desktop.css" media="screen and (min-width:769px)">
    <link rel="stylesheet" href="styles/estilo-cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <script src="scripts/jquery-3.7.1.min.js" defer></script>
    <!--codigo comum como menu e cabelho-->
    <script src="scripts/btn-eventos.js" defer></script>

    <style>
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
    
</head>
<body>
    <header class="cabecalho">
        <div class="logo"><p>Enjoy</p><div class="logo-img"><a href="index.html"><img src="images/logo-enjoycursos.webp" alt="Logo Enjoy-Cursos"></div></a><p>Cursos</p></div>

        

        <nav class="menu">
            <ul class="menu-lista">
                <li><a href="home.php">Início</a></li>
                <li><a href="categorias.html">Categorias</a></li>
                <li><a href="certificados.html">Certificações</a></li>
                <li><a href="chat-mensagens.html">Chat de mensagens</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="ajuda.html">Ajuda</a></li>
            </ul>
        </nav>
        <button class="menu-btn"></button>

        <button class="user-container"><img src="images/user.png" alt="" ></button>
        <div class="caixa-login-cadastro">
          <a id="cadastro-btn" href="cadastro.html"><button>Criar conta</button></a>
          <a href="login.html"><button>Entrar</button></a>
        </div>
    </header>

    <div class="conteudo-principal">
      <main>

      <h2>Download do Certificado</h2>
    <?php
    // Verificar se o PDF foi gerado com sucesso
    if (isset($pdfData)) {
        // Mostrar botão para baixar o PDF
        echo '<a href="data:application/pdf;base64,' . base64_encode($pdfData) . '" download="certificado.pdf">Baixar Certificado</a>';
    } else {
        // Se não houver PDF disponível, exibir mensagem de erro
        echo "Não foi possível gerar o certificado.";
    }
    ?>
      
      </main>
    </div>

    <footer>
        <div class="footer-links">
          <ul>
            <li><a href="#">Termos de Uso</a></li>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="sobre.html">Sobre Nós</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </div>
        <div class="contact-info">
          <p>Endereço: 123 Rua Não sei, Cidade Irineu, País Brasil</p>
          <p>Telefone: (00) 1234-5678</p>
          <p>Email: contato@exemplo.com</p>
        </div>
        <section class="redes-sociais">
          <p>Nossas redes</p>
          <img src="images/instagram.png" alt="">
          <img src="images/facebook.png" alt="">
          <img src="images/linkedin.png" alt="">
          <img src="images/whatsapp.png" alt="">
        </section>
        <p class="copyright">&copy; 2024 Enjoy Cursos</p>
    </footer>
        
    </script>
    <script>

    </script>
</body>
</html>