<title>Estatisticas de análize de acessos | IFFAlternativo - IFFluminense</title>
<!-- Projeto experimental de código aberto do 4º Módulo do Curso Técnico Concomitante em Informática, 2015.2 -->

<!--
	* Bons programadores são curiosos mesmo, relaxa.
	* Bem-vind@ ao nosso código-fonte.
	* Use o que precisar, é de código aberto!
	* acesse: https://github.com/IFFCinema/webapp
	* Nós <3 open source. E se você está aqui, você também ama tanto quanto nós. Sinta-se em casa.
 -->

<meta charset="utf-8" />
<style type="text/css">
div#show {
	width:170px;
	height:120px;
	border:1px solid silver;
	padding:10px;
	font-weight:bold;
	text-shadow:1px 1px silver;
	font-family: sans-serif;
	border-radius: 10px;
	box-shadow: inset 0 0 5px #666;
	}
div#show img {width:20px;height:20px;}
</style>
<?php
        $ip = ($_SERVER['REMOTE_ADDR']);
        $browser = ($_SERVER['HTTP_USER_AGENT']);
        $data = date('d/m/Y H:i:s');
        
	//ARQUIVO TXT
	$arquivo = "dados.txt";

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
	$conteudo = "IP: $ip - OS: ".strip_tags($os)." - Navegador: ".strip_tags($nav)." - Data/Hora: $data - UA: $browser -------\r\n\n";

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
	echo '<div id="show">';
        echo "<img src=\"images/ip.png\" /> $ip<br />";
        echo "$nav<br />";
        echo "$os<br />";
        echo "<img src=\"images/data.png\" /> ".date('d/m/Y')."<br />";
		echo "<img src=\"images/hora.png\" /> ".date('H:i:s')."<br />";
        echo '</div><!--SHOW-->';
?>
