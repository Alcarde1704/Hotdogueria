<?php

if (isset($_POST["dados"])) {
  $dados = json_decode(json_encode(json_decode($_POST["dados"])), True);

  require("conecta.php");
  $insert = $mysqli->query("insert into tb_clientes values ('','$dados[clinome]','$dados[clifone]')");
  if ($mysqli->error == "") {
    echo "sucesso";
  } else {
    echo "erro";
  }
}
