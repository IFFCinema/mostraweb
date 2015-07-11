<?php

$nome;
$email;
$matricula;
$dataNasc;
$sessao;
/* $conexao = mysql_connect ("192.168.0.101:3306", "root", "fvs38795") or die (mysql_error());
mysql_select_db("Reserva", $conexao);
$nome = $_POST["q1"];
$email = $_POST["q2"];
$maricula = $_POST["q3"];
$dataNasc = $_POST["q4"];
$sessao = $_POST["q5"];
$insert = "insert into Reserva values('$matricula','$nome','$email','$dataNasc','$sessao')"; */
?>
<!DOCTYPE HTML>
<html lang='pt-BR'>
<head>
<meta charset='utf-8'>
<link rel='shortcut icon' href='./favicon.ico'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Notificação: Enviado!</title>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
</head>
<!--[if lt IE 11]><p>Você está utilizando um navegador muuuuuuito <strong>desatualizado</strong>. Por favor, <a href='http://browsehappy.com/'>atualize seu <i>browser</i></a> para apimentar nossa experiência... ;)</p><![endif]-->
<body>
<center><p><b>Inscrição concluída, você será redirecionado</b></p></center>
<script type="text/javascript">
setTimeout(function () {
   window.location.href = "../";
}, 5000);
</script>
</body>
</html>
