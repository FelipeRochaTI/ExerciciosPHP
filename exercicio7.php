<html>
	<head><title> EXERCICIO VII</TITLE></head>
	<body background="p4.jpg">
		<h1 align="center"><font color="#003300">EXERCICIO VII</H1>	
		<table border="1px" bgcolor="#2F4F2F" align="center">
			<td><font face="arial black">
				<form action="" method="POST">
					<P>Valor a converter<input type="text" name="a1"></p>
					<P><input type="radio" name="a2" value="1">Real para Dólar
					<input type="radio" name="a2" value="2">Dólar para Real</p>
					<p align="center"><input type="submit" name="bt1" value="Converter "></p>
				</form>	
				<?php
					if(isset($_POST['bt1']))
					{
						$v=$_POST['a1'];
						$ops=$_POST['a2'];
					
					if($ops =='1')	
						{
						$r=$v / 2.97;
						$r=number_format($r, 2, ',','');
						print("R$ $v equivale a $ $r");
						}
						else
						{
						$r=$v * 2.97;
						$r=number_format($r, 2, ',','');
						print("$ $v equivale a R$ $r");
						}
						

					}	
				?>


			</TD>
		</TABLE>

	</body>

</html>