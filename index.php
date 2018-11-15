<?php

require_once("config.php");


//carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


//carrega lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//busca uma lista de usuario pelo login
//$search = Usuario::search("a");
//echo json_encode($search);

//carrega usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Daniel","123");
//echo $usuario;



//CRIANDO NOVO USUARIO
//$aluno = new Usuario("aluno", "1234");
//$aluno ->insert();
//echo $aluno;

//ALTERAR USUARIO
//$usuario = new Usuario();
//$usuario->loadById(6);
//$usuario->update("Professor","321");
//echo $usuario;


//DELETAR 

$usuario = new Usuario();
$usuario -> loadById(4);
$usuario -> delete();
echo $usuario;



//$sql = new Sql();
//$usuarios = $sql -> select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);
?>