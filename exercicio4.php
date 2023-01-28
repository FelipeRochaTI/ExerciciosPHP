<html>
	<head>
		<title>Exercicio 4</title>
	</head>
	
	<body background="p2.jpg">
		<h1 align='center'><font color="white">EXEMPLO</H1>
		<table border="0" bgcolor="#4682B4" align="CENTER">
			<TD><FONT FACE="arial black" COLOR="">
				<form action="" method="POST">
					<p>Nome<iNput type="text" name="c1"></p>
					<p>Salário<iNput type="text" name="c2"></p>
					<p><input type="radio" name="p1" value="30" checked>30%</p>
					<p><input type="radio" name="p1" value="40">40%</p>
					<p><input type="radio" name="p1" value="45">45%</p>
					<p><input type="radio" name="p1" value="50">50%</p>

					<p align="center"><font color=""><input type="submit" name="botao" value="calcular reajuste"></p>
				</form>
				
				<?php
					if(isset($_POST['botao']))
					{

						$n=$_POST['c1'];
						$s=$_POST['c2'];
						$opc=$_POST['p1'];
						$r=($s*$opc)/100;
						$t=$s+$r;
						  
						print("<p> O salário do funcionário ".$n." com reajuste de ".$opc."% é de:".$t."</p>");

					}
				?>
			</TD>
		</TABLE>
	</body>
</html>