 
 <?php
 
 
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'sitecompleto';
$conexao = new mysqli($servidor, $usuario, $senha, $banco);
$mysqli  = new mysqli($servidor, $usuario, $senha, $banco);
if ($conexao->connect_error) {
die("Connection failed: " . $conexao->connect_error);
}else{
echo "Conectou !!";

} 

?>