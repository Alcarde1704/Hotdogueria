<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Promoções</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
              <h2>Combo Familia Gourmet</h2>
              <figure>
                <img src="../img/combofamilia.png" alt="combo familia" width="280px">
                <figcaption>
                  4 deliciosos HOTDOG gourmet Artesanal e uma garrafa de refrigerante de 1 litro(Coca-cola, Kuat ou Pepsi) 500ml.
                </figcaption>
              </figure>
            </div>

          </div>

          <div id="lado2">
            <div class="img-lanche">
              <h2>COMBO Gourmet</h2>
              <figure>
                <img src="../img/combo1.png" alt="combo1" width="280px">
                <figcaption>
                  Um delicioso HOTDOG gourmet Artesanal, Uma porção de batata frita caseira e um copo de refrigerante(Coca-cola, Kuat ou Pepsi) 500ml.
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
    document.getElementById("whats").onclick = function() {
      window.open("https://web.whatsapp.com", "minhaJanela");
    }
  </script>
</body>

</html>