<?php
if (isset($_POST["dados_produto"])) {
  $dados = json_decode(json_encode(json_decode($_POST["dados_produto"])), True);

  require("conecta.php");

  $editar = $mysqli->query("update tb_produtos set nome='$dados_produto[prodnome]', valor='$dados_produto[prodvalor]' where id='$dados_produto[prodid]'");


  if ($editar) {
    echo "sucesso";
  } else {
    echo "erro";
  }
}
