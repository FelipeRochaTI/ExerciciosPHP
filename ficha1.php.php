<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Ficha de Inscrição</title>
</head>
<body>
	<h1>Ficha de Inscrição</h1>
	
	
	
	
	
	
	
	<?php
		if(isset($_POST['botao']))
			{
				$nome=$_POST['a1'];
				$rg=$_POST['a2'];
				$cpf=$_POST['a3'];
				$esco=$_POST['radio'];
				$area=$_POST['select'];
				
				print("<p align='center'>
				-------------------------------------------------Comprovante----------------------------------------------------</p>">;
				print("<p align='center'>Nome: $nome</p>");
				print("<p align='center'>RG: $rg</p>");
				print("<p align='center'>CPF: $cpf</p>");
				print("<p align='center'>Escolaridade: $esco</p>");
				print("<p align='center'>Área de Atuação: $area</p>");
				print("<p align='center'>
				------------------------------------------------Inscrição Comfirmada---------------------------------------------</p>");
			}
		
	?>	
</body>
</html>
