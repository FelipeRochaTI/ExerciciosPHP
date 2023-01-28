<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EXERCICIO VI</title>
</head>
	
<body>
	<h1 align="center">CADASTRO</h1>
	<form action="" method="post">
	<p><b>Nome</b><input type="text" name="a1" /></p>
	<P><b>Data de Nascimento</b><input type="date" name="a2" /></P>
	<p><b>Telefone</b><input type="text" name="a3" /></p>
	<p><b>Possui</b></p>
	<P><input type="checkbox" name="a4" value="Televisão" />Televisão
	<input type="checkbox" name="a5" value="Rádio" />Rádio
	<input type="checkbox" name="a6" value="Computador" /> Computador </P>
	<p><input type="submit" name="bt1" value="Cadastrar" /></p>
	</form>
	
	<?php
		if(isset($_POST['bt1']))
		{
			print("<h1>CADASTRO REALIZADO COM SUCESSO</h1>");
			$n=$_POST['a1'];
			$dn=$_POST['a2'];
			$t=$_POST['a3'];
			
			print("<P><b>Nome: $n</b></p>");
			print("<P> Data de Nascimento: $dn</p>");
			print("<P> Telefone: $t</p>");
			if(isset($_POST['a4']))
				{
					$n=$_POST['a4'];
					print("<P>Possui:$n</p>");
				}
			if(isset($_POST['a5']));
				{
					$n=$_POST['a5'];
					print("<P>Possui: $n</p>");
				}
				if(isset($_POST['a6']));
				{
					$n=$_POST['a6'];
					print("<P>Possui: $n</p>");
				}
		}
		?>
	</body>
</html>