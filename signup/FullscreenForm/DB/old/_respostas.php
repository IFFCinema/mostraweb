<?php

$nome;
$email;
$matricula;
$dataNasc;
$sessao;

echo "<!DOCTYPE HTML>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='utf-8'>";
echo "<link rel='shortcut icon' href='./favicon.ico'>";
echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
echo "<title>Notificação: Enviado!</title>";
echo "<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>";
echo "</head>";
echo "<!--[if lt IE 11]><p>Você está utilizando um navegador muuuuuuito <strong>desatualizado</strong>. Por favor, <a href='http://browsehappy.com/'>atualize seu <i>browser</i></a> para apimentar nossa experiência... ;)</p><![endif]-->";
echo "<body>";
echo "<center><p><b>Inscrição concluída, você será redirecionado</b></p></center>";
echo "</body>";
echo "</html>";
/* $conexao = mysql_connect ("192.168.0.101:3306", "root", "fvs38795") or die (mysql_error());
mysql_select_db("Reserva", $conexao);
$nome = $_POST["q1"];
$email = $_POST["q2"];
$maricula = $_POST["q3"];
$dataNasc = $_POST["q4"];
$sessao = $_POST["q5"];
$insert = "insert into Reserva values('$matricula','$nome','$email','$dataNasc','$sessao')"; */
echo('<script type="text/javascript">
setTimeout(function () {
   window.location.href = "../";
}, 5000);
</script>');
