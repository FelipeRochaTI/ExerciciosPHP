
<html>
	<head><title>Exerc�cio 02</title></head>

	<body bgcolor="black">
		<h1 align="center"><font face=Arial color="white">EXERCIC�O<H1>
		<table border="10px" align="center" bgcolor="white">
			<td>
			<form action="" method="POST">
				<p>Primeiro numero<input type="text" name="campo1"></p>
				<p>Segundo n�mero<input type="text" name="campo2"></p>
				<p align="center"><input type="submit" name="botao" value="Somar"></p>
			</form>
			<?php
				if(isset($_POST['botao']))
				{
					$primeironumero=$_POST['campo1'];
					$segundonumero=$_POST['campo2'];	
					$soma=$primeironumero+$segundonumero;	
				
					print("<p>o primeiro n�mero digitado;".$primeironumero."</p>");
					print("<p>o segundo n�mero digitado;".$segundonumero."</p>");
					print("<p align='center'><font color='blue'>a soma �;".$soma."</font></p>");
				}
			?>
			</td>	
		</table>

	</body>
</html>