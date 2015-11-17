<!-- Projeto experimental de código aberto do 4º Módulo do Curso Técnico Concomitante em Informática, 2015.2 -->

<!--
	* Bons programadores são curiosos mesmo, relaxa.
	* Bem-vind@ ao nosso código-fonte.
	* Use o que precisar, é de código aberto!
	* acesse: https://github.com/IFFCinema/webapp
	* Nós <3 open source. E se você está aqui, você também ama tanto quanto nós. Sinta-se em casa.
 -->
<?php
include("../security.php");
protegePagina();

/* REGISTRO DE ACESSO DE USUÁRIO -- início */
$arquivo = "./acessos.log";

$ip = ($_SERVER['REMOTE_ADDR']);
$browser = ($_SERVER['HTTP_USER_AGENT']);
$data = date('d/m/Y H:i:s');
/* REGISTRO DE ACESSO DE USUÁRIO -- fim */


$host = '127.0.0.1';
$user = 'root';
$password = 'fvs38795';
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
echo "<title>ACESSO RESTRITO | Tabela ODB - Cinema no IFF</title>";
echo "</head'>";
echo "<body bgcolor='#000'>";
echo "<header align='middle'>";
echo "<font color='#fff'>";
echo "<p align='left'>Olá, " . $_SESSION['usuarioNome']." - <a href='./logout.php'><font color='#fff'>encerrar sessão</font></a>";
echo "</p></font>";
echo "<div><!-- begin only for Mozilla Firefox --><center><!-- end only for Mozilla Firefox --><a target='_blank' href='http://www.iff.edu.br/' title='IFFluminense'><span><img src='logo_iff.png'></span></a></div><p align='middle'><br><font color='#fff' size='3.2px'><b>Mostra de Cinema Alternativo do Instituto Federal Fluminense</b><br><span><i>campus</i> Campos-Centro</span><br><br><b>ACESSO RESTRITO</b></font></p><br><!-- begin only for Mozilla Firefox --></center><!-- end only for Mozilla Firefox --></div>";
echo "</header>";
$consulta = "select * from reserva";
$resultado = mysql_query ($consulta, $link);
$quant = mysql_num_rows($resultado);

//ARQUIVO LOG

	if (strchr($browser, 'Firefox'))
	  {
	    $nav = '<img src="images/firefox.png" /> Firefox ';
	  }
	  elseif (strchr($browser, 'Chromium'))
	  {
	    $nav = '<img src="images/chromium.png" /> Chromium ';
	  }
	  elseif (strchr($browser, 'Chrome'))
	  {
	    $nav = '<img src="images/chrome.png" /> Chrome ';
	  }
	  elseif (strchr($browser, 'Opera'))
	  {
	    $nav = '<img src="images/opera.png" /> Opera ';
	  }
	  elseif (strchr($browser, 'MSIE'))
	  {
	    $nav = '<img src="images/msie.png" /> Internet Explorer ';
	  }elseif (strchr($browser, 'Epiphany')){

	    $nav = '<img src="images/outro.png" /> Epiphany ';
	  }elseif (strchr($browser, 'Safari')){

	    $nav = '<img src="images/safari.png" /> Safari ';
          }else{
            $nav = '<img src="images/outro.png" /> Outro Navegador';
          }


        if (strchr($browser, 'Linux'))
           {
             $os = '<img src="images/linux.png" /> Linux ';
           }
           elseif (strchr($browser, 'Windows'))
           {
             $os = '<img src="images/windows.png" /> Windows ';
           }elseif(strchr($browser, 'MAC')){
             $os = '<img src="images/apple.png" /> MAC OSX';
           }else{
             $os = '<img src="images/os.png" /> Outro Sistema';
           }


	//PREPARA O CONTEÚDO A SER GRAVADO
	$conteudo	=	"IP: $ip - OS: ".strip_tags($os)." - Navegador: ".strip_tags($nav)." - Data/Hora: $data - User Agent (UA): $browser - Usuário: ". $_SESSION['usuarioNome']." -------\r\n\n";

	//TENTA ABRIR O ARQUIVO TXT
	if (!$abrir = fopen($arquivo, "a")) {
         echo  "Erro abrindo arquivo ($arquivo)";
         exit;
    }
	if($browser == 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0')
        {
           fclose($abrir);
        }else{
	//ESCREVE NO ARQUIVO TXT
	if (!fwrite($abrir, $conteudo)) {
        print "Erro escrevendo no arquivo ($arquivo)";
        exit;
	//FECHA O ARQUIVO
	fclose($abrir);
        }
    }	

/*
    echo "<center>
          <table border='1' width='30%' align='middle'>
          <font color='#fff'>
            <th colspan='2' align='middle'>DADOS DA RESERVA - TABELA ESTÁTICA</th>
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
*/

echo "<p align='middle'><font color='#fff'>Tabela gerada com sucesso. Clique <a href='./db_mostra.table.odb'><font color='#fff'>aqui</font></a> para baixar a tabela no formado .odb do LibreOffice Base. Número total de registros: ".$quant." (tabela estática de registro de inscritos).<br><br>Faça o download do LibreOffice para o seu sistema (x86/x86_64):<br><br><ol align='middle' type='i'><ul align='middle'><font color='#fff'><li><a target='_blank' href='http://pt-br.libreoffice.org/baixe-ja/libreoffice-stable/?type=deb-x86_64&version=5.0&lang=pt-BR'><font color='#fff'>Download do LibreOffice para Linux (Ubuntu 12.04 LTS/14.04.3 LTS/14.10/15.04/15.10)</font></a>;<br><br></li><li><a target='_blank' href='http://pt-br.libreoffice.org/baixe-ja/libreoffice-stable/?type=mac-x86_64&version=5.0&lang=pt-BR'><font color='#fff'>Download do LibreOffice para Mac OS X (10.8 ou superior)</font></a>;<br><br></li><li><a target='_blank' href='http://pt-br.libreoffice.org/baixe-ja/libreoffice-stable/?type=win-x86_64&version=5.0&lang=pt-BR'><font color='#fff'>Download do LibreOffice para Windows (Vista/7/8/8.1/10) (Windows XP não é mais suportado)</font></a>;</li></font><ul></ol></font></p>

<hr><p align='middle'><font color='#fff'>Para abrir a tabela no LibreOffice Base em seu computador:<br><br>PARTINDO DO PRINCÍPIO EM QUE VOCÊ JÁ INSTALOU E CONFIGUROU O <A TARGET='_BLANK' HREF='http://pt-br.libreoffice.org/'><font color='#fff'>SOFTWARE</font></A> DE ACORDO COM AS SUAS NECESSIDADES.</font><br><br><p align='justify'><font color='#fff'>- Abra o LibreOffice e selecione Novo>Banco de Dados - será aberta a tela do LibreOffice Base;<br>- no <i>Assistente de banco de dados</i> selecione <i>Conectar a um banco de dados existente</i>;<br>- em seguida, na lista que aparecer, selecione <i>MySQL</i> e clique em <i>Próximo</i>;<br>- em <i>Configurar a conexão com o MySQL</i> será perguntado como você deseja conectar-se ao banco de dados no servidor MySQL. Nesta estapa selecione <i>Conectar utilizando JDBC (Java Database Connectivity)</i> e clique em <i>Próximo</i>;<br>- agora configure a conexão com o banco de dados JDBC: em <i>Nome do banco de dados</i> você entrará com o nome do banco de dados desejado, no caso 'cadastro';<br>- em <i>Servidor</i>, entre com o endereço de rede (IP) do servidor MySQL;<br>- mantenha o número da porta em 3306, clique em concluir, não é necessário testar a classe do driver JDBC MySQL agora;<br>- para que seu banco de dados seja acessado pelo seu computador, é necessário que o mesmo tenha acesso aos drivers do Java Database Conectivity, para isso, faça o download para sua plataforma específica:<br><br>- LINUX/MAC OS X/BSD/OUTROS UNIX E PLATAFORMAS INDEPENDENTES:<br><a target='_blank' href='./java_driver/mysql-connector-java-5.1.36.tar.gz'><font color='#fff'>Clique aqui para baixar</font></a><br><br>- WINDOWS (VISTA/7/8/8.1/10):<br><a target='_blank' href='./java_driver/mysql-connector-java-gpl-5.1.36.msi.zip'><font color='#fff'>Clique aqui para baixar</font></a><br><br>Outros downloads do MySQL:<br><a target='_blank' href='http://www.mysql.com/downloads/'><font color='#fff'>Página oficial de downloads do MySQL</font></a>.<br><br><br>ATENÇÃO: Para executar o LibreOffice Base é necessário que se tenha instalada a versão mais recente do Java Runtime em seu computador. Versões disponíveis para Linux/Mac OS e Windows em <a target='_blank' href='http://www.java.com/'><font color='#fff'>java.com</font></a>.</p></p>";
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
