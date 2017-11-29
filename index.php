<?php 


require_once("config.php");

// carrega 1 usuario
//$root = new usuario();
//$root->loadById(3);
//echo $root;

//Carrega lista de usuarios
//$lista = Usuario::getList();

//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");

//echo json_encode($search);


//carrega um usuario autenticado com login e senha

//$usuario = new Usuario();
//$usuario->login("root", "123");

//echo $usuario;
 

//INSERT DE USUARIO NOVO

//$aluno = new Usuario("aluno", "145");

//$aluno->insert();

//echo $aluno;


$usuario=new Usuario();
$usuario->loadById(8);

$usuario->update("professor", "159");

echo $usuario;
 ?>