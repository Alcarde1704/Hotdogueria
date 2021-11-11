<?php
if (isset($_POST["dados"])) {
  $dados = json_decode(json_encode(json_decode($_POST["dados"])), True);

  require("conecta.php");
  $editar = $mysqli->query("update tb_clientes set nome='$dados[clinome]',fone='$dados[clifone]' where id_cli='$dados[cliid]'");


  if ($editar) {
    echo "sucesso";
  } else {
    echo "erro";
  }
}
