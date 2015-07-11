<? 
$error = $_GET['error'] ;
 
function show_errors($i) {
 
switch ($i) {
 
case "400":
 
print 'Desculpe, Solicitação Imprópria ';
 
break;
 
case "401":
 
print 'Desculpe, a página que você solicitou n&atilde;o tem permissão para ser exibida' ;
 
break;
 
case "403":
 
print ' Desculpe, Acesso proibido';
 
break;
 
case "404":
 
echo 'Desculpe, a p&aacute;gina que voc&ecirc; solicitou  n&atilde;o foi encontrada' ;
 
break;
 
case "500":
 
echo 'Desculpe, a p&aacute;gina que voc&ecirc; solicitou provocou um erro interno no servidor';
 
break;
 
}
 
return $i ;
 
}
 
?>
