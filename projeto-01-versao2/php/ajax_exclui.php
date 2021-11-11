<?php
if (isset($_POST["dados"])) {
  $dados = json_decode(json_encode(json_decode($_POST["dados"])), True);

  require("conecta.php");
  $excluir = $mysqli->query("delete from tb_clientes where id_cli='$dados[cliid]'");


  if ($excluir) {
    echo "sucesso";
  } else {
    echo "erro";
  }
}
