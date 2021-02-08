 <?php 
 
    include ('conexao');

public function buscaPorNome(String $login, $senha){ 


$query = "SELECT * FROM administracao WHERE login  = Elias and senha = eliasmd8 ";

$statement = $conexao->prepare($query);
$statement->bind_param("s",$login);
$statement->bind_param("s",$senha);
$statement->execute();

$result = $statement->get_result();
$pessoaArray = $result->fetch_assoc();

return $pessoaArray; 


}

 ?>

<!--
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'sitecompleto';
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
die("Connection failed: " . $conexao->connect_error);
}else{
echo "Conectou !!";

mysqli_query($conexao, " 
         INSERT INTO administracao ( login, senha ) values (teste, teste) ";
}	


include ('conexao');

public function buscaPorNome(String $nome){ 


$query = "SELECT * FROM administracao WHERE login  = Elias ? ";

$statement = $conexao->prepare($query);
$statement->bind_param("s",$nome)
$statement->execute();

$result = $statement->get_result();
$pessoaArray = $result->fetch_assoc();

return $pessoaArray; 


}
-->