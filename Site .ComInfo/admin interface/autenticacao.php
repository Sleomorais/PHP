<?php
session_start();
$email =  $_SESSION["email"];
if(!isset($email)){
    header("Location:../index.php");
    exit();
}
//autenticacao.php
?>