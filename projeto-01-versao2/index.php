<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
  <link rel="surtcon icon" href="logo/favicon.ico" type="image/x-icon">

  <title>Inicio</title>

</head>

<body>
  <div class="container">


    <main>

      <header>
        <div class="menu">
          <nav id="navbar">
            <ul>
              <li><a href="index.php">HOME</a></li>
              <li><a href="php/sobre.php">Sobre Nós</a></li>
              <li><a href="php/cardapio.php">Cardápio</a></li>
              <li><a href="php/contato.php">Contato</a></li>
              <li><a href="php/promocoes.php">Promoções</a></li>
            </ul>
            <ul class="login-ul">
              <li><a href="php/login.php" id="login-button">LOGIN</a></li>
            </ul>
          </nav>
        </div>
      </header>

      <section id="section-1">
        <h1 id="title-name">HOTDOG Gourmet</h1>
        <h3>O melhor HotDog artesanal do MUNDO!!</h3>

        <div id="pedir">
          <h3>Bora</h3>
          <h3>Pedir <span style="color: yellow;">?</span></h3>
        </div>

        <div id="but-pedir">
          <a href="php/cardapio.php"><button>BORA!!!!</button></a>
        </div>

      </section>

      <section id="section-2">
        <img src="img/hotdog.png" alt="lanche" width="400px" id="img1">
      </section>

      <footer>
        <div id="footer-cont">
          <small>Nos siga nas redes sociais</small>
          <h5 id="sociais"><a href="#" id="facebook">Facebook</a><a href="#" id="instagram">Instagram</a></h5>
        </div>
      </footer>
    </main>
  </div>

  <script>
    document.getElementById("facebook").onclick = function() {
      window.open("https://www.facebook.com", "minhaJanela");
    }

    document.getElementById("instagram").onclick = function() {
      window.open("https://www.instagram.com", "minhaJanela");
    }
  </script>
</body>

</html>