<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="../css/style.css">
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <style>

  </style>
</head>

<body>
  <div class="container">
    <main>

      <header>
        <div class="menu">
          <nav id="navbar">
            <ul>
              <li><a href="index.php">HOME</a></li>
              <li><a href="sobre.php">Sobre Nós</a></li>
              <li><a href="cardapio.php">Cardápio</a></li>
              <li><a href="contato.php">Contato</a></li>
              <li><a href="promocoes.php">Promoções</a></li>
            </ul>

          </nav>
        </div>
      </header>

      <section id="section-cliente">
        <h1>CADASTRO DE CLIENTES</h1>
        <table id="table-adiciona">
          <tr>
            <td>Nome: </td>
            <td><input type="text" id="nome" /></td>
            <td>Telefone: </td>
            <td><input type="text" id="fone" /></td>
            <td><button id="adiciona">ADICIONAR</button></td>
          </tr>
        </table>

        <table cellspacing="0" id="table-mostra">
          <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Ação</th>
            <?php
            require("conecta.php");
            $busca = $mysqli->query("select * from tb_clientes");
            while ($tb_clientes = $busca->fetch_assoc()) {
              echo '<tr>
              <td>' . $tb_clientes["nome"] . '</td>
              <td>' . $tb_clientes["fone"] . '</td>	
              <td> <a href="editar.php?id='  . $tb_clientes["id_cli"] . '">editar</a>
              <a class="acao_excluir" bancoid="'
                . $tb_clientes["id_cli"] . '">excluir</a></td>';
            }
            ?>
          </tr>

        </table>
        <br><br><br>

        <h1>CADASTROS DE PRODUTOS</h1>
        <table id="table-adiciona">
          <tr>
            <td>Nome: </td>
            <td><input type="text" id="nome-produto" /></td>
            <td>Valor: </td>
            <td><input type="text" id="valor" /></td>
            <td><button id="adiciona-produto">ADICIONAR</button></td>
          </tr>
        </table>

        <table cellspacing="0" id="table-mostra">
          <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Ação</th>
            <?php
            require("conecta.php");
            $busca = $mysqli->query("select * from tb_produtos");
            while ($tb_produtos = $busca->fetch_assoc()) {
              echo '<tr>
              <td>' . $tb_produtos["nome"] . '</td>
              <td>' . $tb_produtos["valor"] . '</td>	
              <td> <a href="editar_produto.php?id='  . $tb_produtos["id"] . '">editar</a>
              <a class="acao_excluir" bancoid="'
                . $tb_produtos["id"] . '">excluir</a></td>';
            }
            ?>
          </tr>

        </table>
      </section>




    </main>
  </div>

  <script type="text/javascript" src="../js/eventos.js"></script>
</body>