<?php
require_once("security.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
  $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
}

  if (validaUsuario($usuario, $senha) == true) {
    echo"<script type='text/javascript'>
    window.location.replace('./cadastros/table.php');
    </script>";
  }

  else {
    expulsaVisitante();
  }
?>
