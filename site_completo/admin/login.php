
<?php

include('conexao.php');
 
 
$usuario = mysqli_real_escape_string($conexao, $_POST['txt_login']);
$senha = mysqli_real_escape_string($conexao, $_POST['txt_senha']);

 
$sql = "SELECT * FROM administracao WHERE login = '{$usuario}' and senha = md5('{$senha}')";
 
$result = mysqli_query($conexao, $sql);
 
$row = mysqli_num_rows($result);
 
if($row >0) {
	
	 print "<script type = 'text/javascript'> location.href='principal.php' </script>";
} else {
print "< META HTTP-EQUIV=REFRESH CONTENT = '0; URL=index.php'>
	
	<script type = 'text/javascript'> alert(' Login ou senha não encontrado, tente novamente') </script>";
}

?>