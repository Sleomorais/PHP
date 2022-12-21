<?php
session_start();
$numusuario= $_SESSION["numusuario"];
if(!isset($numusuario)){
    header("Location:../index.php");
    exit();
}
//autenticacao.php
?>