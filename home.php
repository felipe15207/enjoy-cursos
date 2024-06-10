<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enjoy Cursos</title>
    <link rel="shortcut icon" href="images/logo-enjoycursos.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/mobile.css" media="screen and (max-width:768px)">
    <link rel="stylesheet" href="styles/desktop.css" media="screen and (min-width:769px)">
    <link rel="stylesheet" href="styles/slider.css">
    <link rel="stylesheet" href="styles/slick.scss">
    <link rel="stylesheet" href="styles/ajuda.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="scripts/jquery-3.7.1.min.js" defer></script>
    <script src="scripts/slick.min.js" defer></script>
    <script src="scripts/btn-eventos.js" defer></script>
    <script src="scripts/slider-home.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js" defer></script>
    <script src="scripts/barra-pesquisa.js" defer></script>
    <script src="scripts/sugestoes-home.js" defer></script>
    <style>
      .categoria-container {
        width: 100%;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-items: center;
        margin-bottom: 50px;
      }

      .categoria {
        min-width: 130px;
        height: 120px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px solid #010175;
        border-radius: 10px;
        position: relative;
        margin-bottom: 10px;
      }

      .categoria img {
        width: 80%;
        height: 75px;
        object-fit:fill;
      }

      .categoria h3 {
        position: absolute;
        bottom: 1px;
      }

    </style>

</head>
<body>
    <header class="cabecalho">
      <div class="logo"><p>Enjoy</p><div class="logo-img"><a href="index.html"><img src="images/logo-enjoycursos.webp" alt="Logo Enjoy-Cursos"></div></a><p>Cursos</p></div>

        

        <nav class="menu">
            <ul class="menu-lista">
                <li><a href="index.html" style="border-bottom: 3px solid white;">Início</a></li>
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
      <article>
          <header>
              <section class="slider-carrossel">
                  <div class="slider-container">
                    <img src="images/slide-item1.png" alt="">
                    <img src="images/slide-item2.png" alt="">
                    <img src="images/slide-item3.png" alt="">
                  </div>
              </section>

              <section class="pesquisa-container">
                <div class="pesquisa">
                  <a href="" target="_blank" hidden></a>
                  <input type="text" placeholder="Curso...">
                  <div class="sugestoes"></div>
                  <div class="icon"><ion-icon name="search-outline"></ion-icon></div>
                </div>
              </section>

              <section class="categoria-container">
                <div class="categoria"><img src="images/matematica.png" alt=""><h3>Matemática</h3></div>
                <div class="categoria"><img src="images/programacao.png" alt=""><h3>Programação</h3></div>
                <div class="categoria"><img src="images/portugues.png" alt=""><h3>Português</h3></div>
                <div class="categoria"><img src="images/biologia.png" alt=""><h3>biologia</h3></div>
                <div class="categoria"><img src="images/fisica.png" alt=""><h3>Física</h3></div>
                <div class="categoria"><img src="images/quimica.png" alt=""><h3>Química</h3></div>
              </section>

          </header>
          <main>
              <section class="feed">
                  <div class="curso">
                  <img src="images/desenvolvimento-web.jpg" alt="">
                    <h3>Curso de Desenvolvimento Web</h3>
                    <p>Descrição: Neste curso completo, você vai dominar as principais linguagens da web (HTML, CSS e JavaScript) e frameworks populares como Jquery, construindo seus próprios projetos e se preparando para um mercado de trabalho promissor.</p>
                    <a href="quiz.php">Gratuito</a>
                  </div>
                  <div class="curso">
                    <img src="images/slide-item2.png" alt="Curso de Design Gráfico">
                    <h3>Curso de Design Gráfico</h3>
                    <p>Descrição: res quibusdam, deleclore voluptas, nostrum rerum placeat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec diam ac justo consequat bibendum. Integer id purus ullamcorper, lacinia metus ut, luctus odio.</p>
                    <a href="">Gratuito</a>
                  </div>
                  <div class="curso">
                    <img src="images/slide-item3.png" alt="Curso de Marketing Digital">
                    <h3>Curso de Redação</h3>
                    <p>Descrição: res quibusdam, deleclore voluptas, nostrum rerum placeat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec diam ac justo consequat bibendum. Integer id purus ullamcorper, lacinia metus ut, luctus odio.</p>
                    <a href="">Gratuito</a>
                  </div>
                  <div class="curso">
                      <img src="images/mkt-reduzido.png" alt="Curso de Marketing Digital">
                      <h3>Curso de Marketing Digital</h3>
                      <p>Descrição: res quibusdam, deleclore voluptas, nostrum rerum placeat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec diam ac justo consequat bibendum. Integer id purus ullamcorper, lacinia metus ut, luctus odio.</p>
                      <a href="">Gratuito</a>
                    </div>
                    <div class="curso">
                      <img src="images/Como-abrir-empresa-de-Cursos-Online-2.png" alt="Curso de Marketing Digital">
                      <h3>Curso de Marketing Digital</h3>
                      <p>Descrição: res quibusdam, deleclore voluptas, nostrum rerum placeat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec diam ac justo consequat bibendum. Integer id purus ullamcorper, lacinia metus ut, luctus odio.</p>
                      <a href="">Gratuito</a>
                    </div>
                </section>
          </main>
      </article>
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
</body>
</html>