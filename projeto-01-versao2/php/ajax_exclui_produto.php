<?php
if (isset($_POST["dados"])) {
  $dados = json_decode(json_encode(json_decode($_POST["dados"])), True);

  require("conecta.php");
  $excluir = $mysqli->query("delete from tb_produtos where id='$dados[prodid]'");


  if ($excluir) {
    echo "sucesso";
  } else {
    echo "erro";
  }
}
