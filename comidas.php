<!DOCTYPE html>
<html>
   <head>
      <title>Galeria - Gordices</title>
      <?php include '_cabecalho.php';?>
   </head> 
     
   <body>
      <?php include '_navbar.php';?>
		<h1>
				Comidas maravilhosas
		 </h1>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="comidas/gordice.jpg" target="_blank">
          <img src="comidas/gordice.jpg" alt="Gordices" style="width:100%">
          <div class="caption">
            <p>Muffins de morango</p>
          </div>
        </a>
      </div>
    </div> 
<form action="envia_foto.php" method="post" enctype="multipart/form-data"> 
<input type="file" name="Arquivo" id="Arquivo"><br> 
<input type="submit" value="Enviar"> 
<input type="reset" value="Apagar">
 </form> 
</body>
</html>