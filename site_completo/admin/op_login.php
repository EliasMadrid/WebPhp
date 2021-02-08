  <?php
 
  include ('conexao.php');
  
  
   $txt_login = $_POST["txt_login"];
   $txt_senha = $_POST[" txt_senha"];
   $txt_login = mysqli_real_escape_string($conexao, $_POST['txt_login']);
   $txt_senha = mysqli_real_escape_string($conexao, $_POST['txt_senha']);

  
  $sql  = "SELECT * FROM administracao WHERE login = '$txt_login' AND senha = '$txt_senha' ";
  $resultado = mysqli_query($conexao, $sql);
  $row = mysqli_num_rows($result);
  
   if($row >0) {
  {
	  print "<script type = 'text/javascript'> location.href='principal.php' </script>";
	  
  }else
  {
    print "< META HTTP-EQUIV=REFRESH CONTENT = '0; URL=index.php'>
	
	<script type = 'text/javascript'> alert(' Login ou senha não encontrado, tente novamente') </script>";
  }
  
  ?>
 
<!--
  $txt_login = $_POST["txt_login"];
  $txt_senha = $_POST[" txt_senha"];
  
  $txt_login = mysqli_real_escape_string($conexao, $_POST['txt_login']);
 $txt_senha = mysqli_real_escape_string($conexao, $_POST['txt_senha']);
 
  $txt_login = stripcslashes ($txt_login);
   $txt_senha = stripcslashes ($txt_senha);
   $txt_login = mysql_real_escape_string ($txt_login);
   $txt_senha = mysql_real_escape_string ($txt_senha);
  -->
