<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

/*Carrega um usuário
$root = new Usuario();

$root->loadById(4);

echo $root;
*/

/*Carrega lista de usuários
$lista = Usuario::getList();

echo json_encode($lista);
*/

/*Carrega lista de usuários buscando pelo login
$search = Usuario::search("jo");

echo json_encode($search);
*/

/*Carrega usuário usuando login e senha
$usuario = new Usuario();
$usuario->login("root", "!@#$");

echo $usuario;*/

/*Insere novo usuário
$aluno = new Usuario("aluno2", "@alun02");

$aluno->insert();

echo $aluno;*/

$usuario =  new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;

?>