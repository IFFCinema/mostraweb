<?php
include("../security.php");
protegePagina();

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
echo "<META HTTP-EQUIV='Refresh' CONTENT='5;URL=table.php' >";
echo "<title>ACESSO RESTRITO | Exibindo os dados da tabela - Cinema no IFF</title>";
echo "</head'>";
echo "<body bgcolor='#000'>";
echo "<header align='middle'>";
echo "<font color='#fff'>";
echo "<p align='left'>Olá, " . $_SESSION['usuarioNome'];
echo "</p></font>";
echo "<div><!-- begin only for Mozilla Firefox --><center><!-- end only for Mozilla Firefox --><a target='_blank' href='http://www.iff.edu.br/' title='IFFluminense'><span><img src='logo_iff.png'></span></a></div><p align='middle'><br><font color='#fff' size='3.2px'><b>Mostra de Cinema Alternativo do Instituto Federal Fluminense</b><br><span><i>campus</i> Campos-Centro</span></font></p><br><!-- begin only for Mozilla Firefox --></center><!-- end only for Mozilla Firefox --></div>";
echo "</header>";
$consulta = "select * from reserva";
$resultado = mysql_query ($consulta, $link);
$quant = mysql_num_rows($resultado);
echo "<font color='#fff'>";
for($i=0;$i<$quant;$i++){
    $matricula = mysql_result($resultado,$i,"matricula");
    $nome = mysql_result($resultado,$i,"nome");
    $email = mysql_result($resultado,$i,"email");
    $dataNasc = mysql_result($resultado,$i,"dataNasc");
    $sessao = mysql_result($resultado,$i,"sessao");

    echo "<center>
          <table border='1' width='30%' align='middle'>
          <font color='#fff'>
            <th colspan='2' align='middle'>DADOS DA RESERVA</th>
            <tr>
              <td align='middle'>Matrícula:</td>
              <td align='middle'>".$matricula."</td>
            </tr>
            <tr>
              <td align='middle'>Nome:</td>
              <td align='middle'>".$nome."</td>
            </tr>
            <tr>
              <td align='middle'>E-mail:</td>
              <td align='middle'>".$email."</td>
            </tr>
            <tr>
              <td align='middle'>Data de nascimento:</td>
              <td align='middle'>".$dataNasc."</td>
            </tr>
            <tr>
              <td align='middle'>Sessão:</td>
              <td align='middle'>".$sessao."</td>
            </tr>
          </font>
          </table>
          </center>
    ";
}
echo "<p align='middle'><font color='#fff'>Número de registros até o momento: ".$quant."</font></p>";
echo "
<!-- copyright -->
<footer>
  <p align='middle'>
    <br><br>
    <font size='2px'>feito com &#10084; no <i>campus</i> Campos-Centro<br>Projeto experimental interdisciplinar do 4º Módulo do Técnico Concomitante em Informática do Instituto Federal Fluminense, <i>campus</i> Campos-Centro</font><br><br>
    </span>
</p>
</footer>";
echo "</font></p>
      </font>";
echo "</body>";
echo "</html>";
mysql_close ($link);
?>
