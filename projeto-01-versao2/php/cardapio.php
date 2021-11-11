<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cardápio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container">
    <main>
      <header>
        <div class="menu">
          <nav id="navbar">
            <ul>
              <li><a href="../index.php">HOME</a></li>
              <li><a href="sobre.php">Sobre Nós</a></li>
              <li><a href="cardapio.php">Cardápio</a></li>
              <li><a href="contato.php">Contato</a></li>
              <li><a href="promocoes.php">Promoções</a></li>
            </ul>
          </nav>
        </div>
      </header>

      <section>
        <div id="pedir-agora">
          <div id="title-pedido">
            <h2>Peça Já!</h2>
            <a href="#"><img src="../img/whats.png" alt="whats" width="100px" height="50px" id="whats"></a>

          </div>
        </div>

        <div id="imagens">
          <div id="lado1">
            <div class="img-lanche">
              <h2>HOTDOG Gourmet</h2>
              <figure>
                <img src="../img/hotdog1.png" alt="lanche1" width="200px">
                <figcaption>
                  Pão, Salsicha Artesanal Defumada, Queijo, Mostarda, Ketchup.
                </figcaption>
              </figure>
            </div>

            <div class="img-lanche">
              <h2>HOTDOG Gourmet</h2>
              <figure>
                <img src="../img/hotdog1.png" alt="lanche1" width="200px">
                <figcaption>
                  Pão, Salsicha Artesanal Defumada, Queijo, Mostarda, Ketchup.
                </figcaption>
              </figure>
            </div>

            <div class="img-lanche">
              <h2>HOTDOG Gourmet</h2>
              <figure>
                <img src="../img/hotdog1.png" alt="lanche1" width="200px">
                <figcaption>
                  Pão, Salsicha Artesanal Defumada, Queijo, Mostarda, Ketchup.
                </figcaption>
              </figure>
            </div>



          </div>

          <div id="lado2">
            <div class="img-lanche">
              <h2>HOTDOG Gourmet</h2>
              <figure>
                <img src="../img/hotdog1.png" alt="lanche1" width="200px">
                <figcaption>
                  Pão, Salsicha Artesanal Defumada, Queijo, Mostarda, Ketchup.
                </figcaption>
              </figure>
            </div>

            <div class="img-lanche">
              <h2>HOTDOG Gourmet</h2>
              <figure>
                <img src="../img/hotdog1.png" alt="lanche1" width="200px">
                <figcaption>
                  Pão, Salsicha Artesanal Defumada, Queijo, Mostarda, Ketchup.
                </figcaption>
              </figure>
            </div>

            <div class="img-lanche">
              <h2>HOTDOG Gourmet</h2>
              <figure>
                <img src="../img/hotdog1.png" alt="lanche1" width="200px">
                <figcaption>
                  Pão, Salsicha Artesanal Defumada, Queijo, Mostarda, Ketchup.
                </figcaption>
              </figure>
            </div>
          </div>

        </div>
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
    document.getElementsByClassName("img-lanche")[0].onclick = function() {
      window.open("../img/hotdog1.png", "minhaJanela", "height=500px, width=350px");
    }

    document.getElementsByClassName("img-lanche")[1].onclick = function() {
      window.open("../img/hotdog1.png", "minhaJanela", "height=500px, width=350px");
    }

    document.getElementsByClassName("img-lanche")[2].onclick = function() {
      window.open("../img/hotdog1.png", "minhaJanela", "height=500px, width=350px");
    }

    document.getElementsByClassName("img-lanche")[3].onclick = function() {
      window.open("../img/hotdog1.png", "minhaJanela", "height=500px, width=350px");
    }

    document.getElementsByClassName("img-lanche")[4].onclick = function() {
      window.open("../img/hotdog1.png", "minhaJanela", "height=500px, width=350px");
    }

    document.getElementsByClassName("img-lanche")[5].onclick = function() {
      window.open("../img/hotdog1.png", "minhaJanela", "height=500px, width=350px");
    }

    document.getElementById("whats").onclick = function() {
      window.open("https://web.whatsapp.com/", "minhaJanela");
    }
  </script>
</body>

</html>