<?php

$imposto=5;

echo "<!DOCTYPE html>";
echo "<html lang='pt-BR'>";
echo "<meta charset='utf8'>";
echo "<title>Cálculo</title>";
echo "<body align='middle'>";
echo "<br>Nome: ".$_POST["nome"];
echo "<br>Cargo: ".$_POST["cargo"];
echo "<br>Salário: ".$_POST["salario"];
echo "<br>Salário liquido: ".$_POST["salario"] - $imposto/100;
echo "</body>";
echo "</html>";
?>
