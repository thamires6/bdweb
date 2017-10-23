<!DOCTYPE html>
<html>
   <head>
      <title>Cadastro</title>
      <?php include '_cabecalho.php';?>
   </head> 
   <body>
      <?php include '_navbar.php';?>
		<h1>
				Página de Cadastro
		</h1>
		    <p>
			 Cadastre-se para poder acessar a galeria.
	</p>
		<form action="gravar.php" method="post">
			Nome: <input type="text" class="form-control" name="nome" /> 
		  E-mail: <input type="text" class="form-control" name="email" /> 
		  Senha: <input type="password" class="form-control" name="senha" />
			<input type="submit" class="btn btn-default" value="Cadastrar"/>
		</form>
	</body>
</html>