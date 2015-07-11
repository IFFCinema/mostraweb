<?php
echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<meta charset='utf8'>";
echo "<title>Cadastro</title>";
echo "<body align='left'>";
echo "<br>Nome: ".$_POST["nome"];
echo "<br>Curso: ".$_POST["curso"];
echo "<br>Turno: ".$_POST["turno"];
echo "<br>Disciplinas: <br>".$_POST["disciplina"];
if ($_POST["turno"]=="manha") {
  echo "<br><p>Matrícula realizada com sucesso.</p>";
}
else{
  echo "<br><p>Desculpe, não há vagas disponíveis para este turno.</p>";
}
echo "</body>";
echo "</html>";
?>
