<html>
	<head><title>EXERCICIO DE EXPREÇÃO</title></head>
	<body bgcolor="#87CEFA">
	<form action="" methoed="POST" >
		
		<p>Nome <input name="nome" type="text"></p>
		<p>Telefone <input name="telefone" type="text"></p>
		<p>Idade <input name="idade" type="text"></p>
		<p>Estado de Nascimento <input name="estado" type="text"></p>
			
		<p><input name="botao" type="submit" value="enviar"></p>
		
		</form>
		
	
	<?php
		
		if(isset($_POST['botao']))
		{
			$nome=$_POST['nome'];
			$exp1="/^[A-Z]{3,15}$/";
				
			if(preg_match($exp1, $nome))//serve para validar o o que eu escrevi acima.
			{
				print("Campo Nome digitado de maneira correta!");
			}
			else
			{
				print("Campo Nome digitado de maneira errada!");
			}
		
				
				
				
		$telefone=$_POST['telefone'];
			$exp2="/^[(\()[0-9]{2,2}(\))[0-9]{4,4}-[0-9]{4,4}$/";
				
				if(preg_match($exp2, $telefone))
			{
				print("Campo Nome digitado de maneira correta!");
			}
			else
			{
				print("Campo Nome digitado de maneira errada!");
			}
			
				
				$idade=$_POST['idade'];
			$exp3="/^[0-9]{1,3}$/";
				
				if(preg_match($exp3, $idade))
			{
				print("Campo Nome digitado de maneira correta!");
			}
			else
			{
				print("Campo Nome digitado de maneira errada!");
			}
			
				
				
				
				
				$estado=$_POST['estado'];
			$exp4="/^[A-Za-z]{2,2}$/";
				
				if(preg_match($exp4, $estado))
			{
				print("Campo Nome digitado de maneira correta!");
			}
			else
			{
				print("Campo Nome digitado de maneira errada!");
			}
			
				
				
		
		}
		
		
		
		
		
		
		
		
		
		?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>
</html>