<html>
	<head><title> EXERCICIO III</TITLE></head>
	<body background="p3.jpg">
		<h1 align="center"><font color="white"> EXERCICIO III</H1>	
		<table border="1px" bgcolor="#4682B4" align="center">
			<td><font face="arial black">
				<form action="" method="POST">
					<P>Nome do aluno<input type="text" name="c1"></p>
					<P>Nota 1<input type="text" name="n1"></p>
					<P>Nota 2<input type="text" name="n2"></p>
					<P>Nota 3<input type="text" name="n3"></p>
					<P>Nota 4<input type="text" name="n4"></p>
					<P><input type="submit" name="b1" value="Calcular Média"></p>
				</form>	
				<?php
					if(isset($_POST['b1']))
					{
						$nm1=$_POST['c1'];
						$n1=$_POST['n1'];
						$n2=$_POST['n2'];
						$n3=$_POST['n3'];
						$n4=$_POST['n4'];
						$med=($n1+$n2+$n3+$n4)/4;
					
						print("<p>Nome do aluno;".$nm1."</p>");
						print("<p>primeira nota;".$n1."</p>");
						print("<p>segunda nota;".$n2."</p>");
						print("<p>terceira nota;".$n3."</p>");
						print("<p>quarta nota;".$n4."</p>");
						print("<p>Média;".$med."</p>");


					}	
				?>


			</TD>
		</TABLE>

	</body>

</html>