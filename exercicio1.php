<html>
	<head>
		<title>Exercício</title>
	</head>
	<body bgcolor="darkblue">
		<h1 align="center">EXercicio 02</h1>

		<form action="" method="POST">
			<p>Primeiro Número<input type="text" name="campo1"></p>
			<p>Segundo Número<input type="text" name="campo2"></p>
			<p><input type="submit" name="botao" value="somar"></p>
		</form>
	
		<?php
			if(isset($_POST['botao']))
			{
				$primeiro numero=$_POST['campo1'];
				$segundo=$_POST['campo2'];
				
				print("<p>Nome digitado:".$nome."</p>");
				print("<p>Sobrenome digitado:".$sobrenome."</p>");
			}
		?>
	</body>
</html>
