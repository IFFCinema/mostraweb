<?php
$nome;
$email;
$matricula;
$dataNasc;
$sessao;
$conexao = mysql_connect ("192.168.0.101:3306", "root", "fvs38795") or die (mysql_error());

mysql_select_db("Reserva", $conexao);

$nome = $_POST["q1"];
$email = $_POST["q2"];
$maricula = $_POST["q3"];
$dataNasc = $_POST["q4"];
$sessao = $_POST["q5"];
$insert = "insert into Reserva values('$matricula','$nome','$email','$dataNasc','$sessao')";
mysql_close ($conexao);
?>
<!DOCTYPE html>
<html lang="pt-BR" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inscrição concluída | MOSTRA DE CINEMA ALTERNATIVO DO IFFluminense</title>
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
      <center><p><b>Inscrição concluída, você será redirecionado</b></p></center>
      <script type="text/javascript">
      setTimeout(function () {
         window.location.href = "../";
      }, 5000);
      </script>
    </div>
    <!-- copyright -->
        <footer>
          <p align="middle">
            <font size="2px">DENTRO DE INSTANTES VOCÊ REBERÁ A CONFIRMAÇÃO DE RESERVA POR E-MAIL :)<br><br>feito com &#10084; no <i>campus</i> Campos-Centro<br></font>
            </span>
        </p>
        <br>
      </footer>

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
