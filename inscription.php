<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}
include_once 'partials/header.php';
?>

<div class="container">
    <div class="form-group">
        <h1 class="text-center text-uppercase">Inscription</h1>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="inscrire.php">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nom" placeholder="Nom" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Prénom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="prenom" placeholder="Prénom" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Confirmation</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmation" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Établissement</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="etablissement" placeholder="Établissement">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once 'partials/footer.php'?>