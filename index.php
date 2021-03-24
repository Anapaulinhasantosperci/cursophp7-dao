<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/


// carrega 1 usuario
//$root= new Usuario();
//$root-> loadbyId(3);
//echo $root;


//carrega lista de usuarios
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//carrega lista de usuarios buscando pelo login 

//$busca = Usuario ::search("n");
//echo json_encode($busca);

//CARREGA USUAÁRIO USANDO LOGIN E SENHA;

$usuario = new Usuario();
$usuario -> login("Ana", "jujuba007");

echo $usuario;





?>