<?php
include("./verificacao.php");

session_destroy();
session_unset();
	header('location: ../validacao.html');
?>
