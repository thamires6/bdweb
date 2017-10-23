<html> 
<head>
 <title>Enviando a foto...</title> 
</head>
 <body> 
<?php $nome_temporario=$_FILES["Arquivo"]["tmp_name"]; 
   $nome_real=$_FILES["Arquivo"]["name"]; 
   copy($nome_temporario,"Downloads/$nome_real"); ?>
 </body>
 </html>
