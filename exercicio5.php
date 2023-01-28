<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CHECKBOX</title>
</head>

<body>
	<h1 align="CENTER">Exemplo checkbox</h1>

<form action="" method="POST">
		<p><input type="checkbox" name="ch1" value="Edison da água" /> Edison</p>
		<p><input type="checkbox" name="ch2" value="Sidy das pepekas" /> Sidy</p>
		<p><input type="checkbox" name="ch3" value="Gilderson hinode" />Gilderson</p>
		
		<p><input type="submit" name="b" value="Verificar Presença" /></p>
	</form>
	<?php
		if(isset($_POST['b']))
		{
			print("<p>Alunos Presentes:</p>");
			
			if(isset($_POST['ch1']))
			{
				$nome=$_POST['ch1'];
				print("<p>".$nome."</p>");
			}
			if(isset($_POST['ch2']))
			{
				$nome=$_POST['ch2'];
				print("<p>".$nome."</p>");	
			}
			if(isset($_POST['ch3']))
			{
				$nome=$_POST['ch3'];
				print("<p>".$nome."</p>");
			}
		}
	?>
</body>
</html>
