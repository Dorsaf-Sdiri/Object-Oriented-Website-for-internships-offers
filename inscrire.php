<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}
require_once 'config/bdd.php';

// 1) Email format email valide
// 2) Email non utilisé
// 3) Vérifier que le mot de passe est confirmé


$data = $_POST;
$stmt = $dbh->prepare("INSERT INTO utilisateurs (nom, prenom, email, mdp, etablissement) VALUES (:nom, :prenom, :email, :mdp, :etablissement)");
$stmt->bindParam(':nom', $data['nom']);
$stmt->bindParam(':prenom', $data['prenom']);
$stmt->bindParam(':email', $data['email']);
$stmt->bindParam(':mdp', md5($data['password']));
$stmt->bindParam(':etablissement', $data['etablissement']);
$stmt->execute();

header('location:connexion.php');
exit;