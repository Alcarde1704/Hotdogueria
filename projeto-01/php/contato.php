<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
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

      <section id="section-form">
        <div id="form-contato">
          <form action="contato.php" method="POST">
            <fieldset>
              <legend>Contato</legend>
              <label for="nome">Informe Seu Nome: </label> <br>
              <input type="text" name="nome" placeholder="Nome Completo" size="30" maxlength="50" autofocus required><br>

              <label for="email">Informe seu E-Mail: </label><br>
              <input type="email" name="email" size="30" maxlength="50" required placeholder="exemplo@exemplo.com"><br>

              <label for="assunto">Assunto do Contato: </label><br>
              <input type="text" name="assunto" size="30" maxlength="50" required placeholder="Ex: Problemas, Atualização."><br>

              <label for="coment">Nos informe seu problema detalhadamente</label><br>
              <textarea name="coment" id="coment" cols="30" rows="10">

              </textarea><br>

              <input type="submit" value="enviar">
              <input type="reset" value="redefinir">


            </fieldset>
          </form>
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
</body>

</html>