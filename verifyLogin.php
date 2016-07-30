<?php
require("config.php");
require(ROOTPATH."/control/connect.php");
require (ROOTPATH."/control/personCRUD.php");

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$userLogged = selectLogin($email, $password);

if(!empty($userLogged) && ($email == $userLogged['email'] && $userLogged['password'] == $password)){
	$_SESSION['idPerson'] = $userLogged['idPerson'];
	header('location:index.php');
}else{
	unset ($_SESSION['idPerson']);
	header('location:login.php?error=true');
}
?>