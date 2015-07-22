<?php
$host = '127.0.0.1';
$user = 'root';
$password = 'mar@cuj4';
$database = 'security';

$link = mysql_connect($host, $user, $password);
if (!$link) {
  die('Desculpe, não foi possível conectar-se ao servidor.<br><b>ERRO: </b> ' . mysql_error());
}
mysql_select_db ($database, $link);

$id = $_POST["id"];
$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$insert = "insert into usuario values('id','$nome','$usuario','$senha')";
mysql_query ($insert, $link) or die (mysql_error());
mysql_close ($link);
?>
<!DOCTYPE html>
<html lang="pt-BR" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Adição de usuário concluída | MOSTRA DE CINEMA ALTERNATIVO DO IFFluminense</title>
		<meta name="description" content="Inscreva-se para a mostra de cinema do IFFluminense campus Campos-Centro" />
		<meta name="keywords" content="Cinema no Campus, IFFluminense, Campos dos Goytacazes, Rio de Janeiro, Brasil, cinema, arte, cultura" />
		<meta name="author" content="IFFluminense" />
		<link rel="shortcut icon" href="./img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
      <center><p><b>Adição concluída, você será redirecionado</b></p></center>
      <script type="text/javascript">
      setTimeout(function () {
         window.location.href = "./validacao.html";
      }, 5000);
      </script>
    </div>
  </div><!-- /container -->
  <script src="js/classie.js"></script>
  <script src="js/selectFx.js"></script>
  <script src="js/fullscreenForm.js"></script>
  <script>
    (function() {
      var formWrap = document.getElementById( 'fs-form-wrap' );

      [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
        new SelectFx( el, {
          stickyPlaceholder: false,
          onChange: function(val){
            document.querySelector('span.cs-placeholder').style.backgroundColor = val;
          }
        });
      } );

      new FForm( formWrap, {
        onReview : function() {
          classie.add( document.body, 'overview' ); // for demo purposes only
        }
      } );
    })();
  </script>
</body>
</html>
