<?php
require_once "validador_acesso.php";
$id = str_replace('|','-', $_SESSION['id']);
$perfil = str_replace('|','-',$_SESSION['perfil']);
$nome = str_replace('|','-',$_SESSION['nome']);
$titulo = str_replace('|','-',$_POST['titulo']);
$categoria = str_replace('|','-',$_POST['categoria']);
$descricao = str_replace('|','-',$_POST['descricao']);

$dados = $id. '|' . $perfil. '|' . $nome .'|' . $titulo .'|' . $categoria .'|' . $descricao .PHP_EQL; 
var_dump($dados);

$arquivo = fopen('../../APP_HELP_DESK/registro.txt,a');

fwrite($arquivo,$dados);

fclose($close);

// Redirecionando para a página de abertura de chamado
header('location: abrir_chamado.php?cadastro=sucesso')
?>