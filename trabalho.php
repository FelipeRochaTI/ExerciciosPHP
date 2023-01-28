<html>
	<head><title> TRABALHO I</TITLE></head>
	<body background="p3.jpg">
		<h1 align="center"><font>TRABALHO I</H1>	
		<table border="2" bgcolor="#70DBDB" align="center">
			<td><font face="arial black">
				<form action="" method="POST">
					<P>Nome<input type="text" name="a1"></p>
					<P>Digite seu peso(Kg)<input type="text" name="a2"></p>
					<P>Digite sua altura(1.70)<input type="text" name="a3"></p>
					<P align="center"><input type="submit" name="bt1" value="Calcular IMC"></p>
				</form>	
				<?php
					if(isset($_POST['bt1']))
					{
						$n=$_POST['a1'];
						$p=$_POST['a2'];
						$a=$_POST['a3'];
						$imc=$p/($a*$a);
						
						print("<p>Nome;".$n."</p>");
						print("<p>Peso;".$p."</p>");
						print("<p>Altura;".$a."</p>");
						print("<p>IMC;".$imc."</p>");					
					}	
				?>
				<td>
				<p><b>Baixo peso =</b> IMC abaixo de 18,5 kg/m².</p>
				<p><b>Peso normal =</b> IMC entre 18,5 e 24,9 kg/m².</p>
				<p><b>Sobrepeso =</b> IMC entre 25 e 29,9 kg/m².</p>
				<p><b>Obesidade grau I =</b> IMC entre 30 e 34,9 kg/m².</p>
				<p><b>Obesidade grau II =</b> IMC entre 35 e 39,9 kg/m².</p>
				<p><b>Obesidade grau III (obesidade mórbida) =</b> IMC maior que 40 kg/m².</p>
				</td>

			</TD>
		</TABLE>

	</body>

</html>