<?php
  session_start();
  echo "<nav class='navbar navbar-inverse'>";
  echo "  <div class='container-fluid'>";
  echo "    <div class='navbar-header'>";
  echo "      <a class='navbar-brand' href='index.php'>Prática 04</a>";
  echo "    </div>";
  echo "    <ul class='nav navbar-nav'>";
  echo "     <li class='active'><a href='index.php'>Página Inicial</a></li>";
  echo "      <li><a href='listar.php'>Usuários cadastrados</a></li>";
  echo "      <li><a href='http://ubuntu-tvieiragermano13260.codeanyapp.com/'>Práticas realizadas</a></li>";
  if( isset( $_SESSION["logged"]) && $_SESSION["logged"]==true)  {
      echo "      <li><a href='galeria.php'>Galeria de Fotos</a></li>";
  } 
  echo "    </ul>";

  echo "   <form action='listar.php' class='navbar-form navbar-left'>";
  echo "    <div class='form-group'>";
  echo "      <input type='text' name='search' class='form-control' placeholder='Procurar'>";
  echo "    </div>";
  echo "    <button type='submit' class='btn btn-default'>OK</button>";
  echo "  </form>";
  echo "    <ul class='nav navbar-nav navbar-right'>";
   if( isset( $_GET["logout"]) ) {
      $_SESSION["logged"]=false;
     }
  if( isset( $_SESSION["logged"]) && $_SESSION["logged"]==true)  {
      echo "<li><a href='#'>".$_SESSION["user.name"]."</a></li>";
      echo "<li><a href='index.php?logout=true'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
   } else { 
      echo "<li><a href='cadastro.php'><span class='glyphicon glyphicon-user'></span> Cadastrar</a></li>";
      echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
   }
  echo "   </ul>";
  echo "  </div>";
  echo "</nav>";
?>