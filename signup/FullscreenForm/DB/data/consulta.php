<?php
$host = '127.0.0.1';
$user = 'root';
$password = 'mar@cuj4';
$database = 'cadastro';

$link = mysql_connect($host, $user, $password);
if (!$link) {
  die('Desculpe, não foi possível conectar-se ao servidor.<br><b>ERRO: </b> ' . mysql_error());
}
mysql_select_db ($database, $link);

echo "<!DOCTYPE HTML>";
echo "<html lang='pt-BR'>";
echo "<head>";
echo "<meta charset='utf-8'>";
echo "<META HTTP-EQUIV='Refresh' CONTENT='5;URL=consulta.php' >";
echo "<title>ACESSO RESTRITO | Exibindo os dados da tabela - Cinema no IFF</title>";
echo "</head'>";
echo "<body bgcolor='#000'>";
echo "<header align='middle'>";
echo "<div><a target='_blank' href='http://www.iff.edu.br/' title='IFFluminense'><span><img src='logo_iff.png'></span></a></div><p><br><font color='#fff' size='3.2px'><b>Mostra de Cinema Alternativo do Instituto Federal Fluminense</b><br><span><i>campus</i> Campos-Centro</span></font></p><br>";
echo "</header>";
$consulta = "select * from reserva";
$resultado = mysql_query ($consulta, $link);
$quant = mysql_num_rows($resultado);
echo "<p><font color='#fff'>Número de registros até o momento: ".$quant;
for($i=0;$i<$quant;$i++){
    $matricula = mysql_result($resultado,$i,"matricula");
    $nome = mysql_result($resultado,$i,"nome");
    $email = mysql_result($resultado,$i,"email");
    $dataNasc = mysql_result($resultado,$i,"dataNasc");
    $sessao = mysql_result($resultado,$i,"sessao");
    echo "<br><br>Matricula: ".$matricula."<br>Nome: ".$nome."<br>E-mail: ".$email."<br>Data de nascimento: ".$dataNasc."<br>Sessão: ".$sessao;
}
echo"
<!-- copyright -->
<footer>
  <p align='middle'>
    <br><br>
    <font size='2px'>feito com &#10084; no <i>campus</i> Campos-Centro<br>Projeto experimental interdisciplinar do 4º Módulo do Técnico Concomitante em Informática do Instituto Federal Fluminense, <i>campus</i> Campos-Centro</font><br><br>
    </span>
</p>
</footer>";
echo "</font></p>";
echo "</body>";
echo "</html>";
mysql_close ($link);
?>
