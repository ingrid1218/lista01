<?php
	$num = $_GET["numero"];

	if($num%2==0){
		echo "E divisivel por dois!";
	}elseif($num%5==0){
		echo "E divisivel por cinco!";
	}elseif($num%10==0){
		echo "E divisivel por dez!";
	}else{
		echo "Nao e divisivel por nenhum dos numeros!";
	}
	
