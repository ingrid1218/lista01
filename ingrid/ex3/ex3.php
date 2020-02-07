<?php

$nome = $_GET["nome"];
$idade = $_GET["idade"];
$sexo = $_GET["sexo"];

	if($sexo== feminio && $idade<18){
		echo "$nome Acesso proibido";
	}else{
		echo "$nome Acesso permitido";
	}