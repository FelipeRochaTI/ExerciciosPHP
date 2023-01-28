
<html>
	<head><title>Exercício 02</title></head>

	<body bgcolor="black">
		<h1 align="center"><font face=Arial color="white">EXERCICÍO<H1>
		<table border="10px" align="center" bgcolor="white">
			<td>
			<form action="" method="POST">
				<p>Primeiro numero<input type="text" name="campo1"></p>
				<p>Segundo número<input type="text" name="campo2"></p>
				<p align="center"><input type="submit" name="botao" value="Somar"></p>
			</form>
			<?php
				if(isset($_POST['botao']))
				{
					$primeironumero=$_POST['campo1'];
					$segundonumero=$_POST['campo2'];	
					$soma=$primeironumero+$segundonumero;	
				
					print("<p>o primeiro número digitado;".$primeironumero."</p>");
					print("<p>o segundo número digitado;".$segundonumero."</p>");
					print("<p align='center'><font color='blue'>a soma é;".$soma."</font></p>");
				}
			?>
			</td>	
		</table>

	</body>
</html>