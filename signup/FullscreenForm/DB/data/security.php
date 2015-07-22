<?php

$_SG['conectaServidor'] = true;
$_SG['abreSessao'] = true;

$_SG['caseSensitive'] = false;

$_SG['validaSempre'] = true;

$_SG['servidor'] = '127.0.0.1';
$_SG['usuario'] = 'root';
$_SG['senha'] = 'mar@cuj4';
$_SG['banco'] = 'security';

$_SG['paginaLogin'] = 'validacao.html';

$_SG['tabela'] = 'usuario';

if ($_SG['conectaServidor'] == true) {
  $_SG['link'] = mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: Não foi possível conectar-se ao servidor [".$_SG['servidor']."].");
  mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$_SG['banco']."].");
}

if ($_SG['abreSessao'] == true)
  session_start();

/**
* Validação de usuário e senha do sistema da Mostra de Cinema Alternativo do IFFluminense
*
* @param string $usuario - login
* @param string $senha - senha (obvio)
*
* @return bool - Se o usuário foi validado ou não (true/false)
*/

function validaUsuario($usuario, $senha) {
  global $_SG;

  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

  $nusuario = addslashes($usuario);
  $nsenha = addslashes($senha);

  $sql = "SELECT `id`, `nome` FROM `".$_SG['tabela']."` WHERE ".$cS." `usuario` = '".$nusuario."' AND ".$cS." `senha` = '".$nsenha."' LIMIT 1";
  $query = mysql_query($sql);
  $resultado = mysql_fetch_assoc($query);

  if (empty($resultado)) {
    return false;
  } else {
    // valores de dados do usuário do sistema 'maracujá' (Mostra de Cinema Alternativo do IFFluminense)
    $_SESSION['usuarioID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
    $_SESSION['usuarioNome'] = $resultado['nome']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL

    // Verifica a opção se sempre validar o login
    if ($_SG['validaSempre'] == true) {
      // Definição dois valores na sessão com os dados do login
      $_SESSION['usuarioLogin'] = $usuario;
      $_SESSION['usuarioSenha'] = $senha;
    }

    return true;
  }
}

/**
* SEGURANÇA DO SISTEMA MARACUJÁ (Mostra de Cinema Alternativo do IFFluminense)
*/
function protegePagina() {
  global $_SG;

  if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    expulsaVisitante();
  } else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    if ($_SG['validaSempre'] == true) {
      if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
        expulsaVisitante();
      }
    }
  }
}

function expulsaVisitante() {
  global $_SG;

  unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);

  header("Location: ".$_SG['paginaLogin']);
}
?>
