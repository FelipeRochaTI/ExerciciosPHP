<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<h1 align="center">
	<p>Digite aqui
	
	<?php
		if(isset($_POST['b']))
		{
			$campo=$_POST['campo1']
			$exp="/^[A-Z]{1,5}$/";
			
			if(preg_match($exp, $campo))
			{
				print("Campo Nome digitado de maneira correta!");
			}
			else
			{
				print("Campo Nome digitado de maneira errado!");
			}
		?>	
</body>
</html>
