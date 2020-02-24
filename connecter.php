<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}
require_once 'config/bdd.php';
$data = array();
$data[] = $_POST['email'];
$data[] = md5($_POST['password']);
$query = $dbh->prepare("Select * from utilisateurs where email=? and mdp=?");
$query->execute($data);
$result = $query->fetch(PDO::FETCH_OBJ);
if($result){
    $_SESSION['user'] = $result;
    header('location:index.php');
    exit;
}else{
    header('location:connexion.php?error=1');
    exit;
}
