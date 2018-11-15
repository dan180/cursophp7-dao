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
$usuario = new Usuario();
$usuario->login("Daniel","123");

echo $usuario;


//$sql = new Sql();
//$usuarios = $sql -> select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);
?>