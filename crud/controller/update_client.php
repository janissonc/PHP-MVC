<?php
include_once'../model/Conexao.class.php';
include_once'../model/Manager.class.php';

$manager = new Manager();

$data = $_POST;
$id = $_POST['id'];

if (isset($id) && !empty($id)) {
	$manager->updateClient("registros",$data, $id);

	header("Location: ../index.php?Client_updated");
}

?>