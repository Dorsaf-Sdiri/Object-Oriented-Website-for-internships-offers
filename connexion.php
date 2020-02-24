<?php
session_start();
if (isset($_SESSION['user'])) {
    header('location:index.php');
    exit;
}
include_once 'partials/header.php'
?>

    <div class="container">
        <div class="form-group">
            <h1 class="text-center text-uppercase">Connexion</h1>
        </div>

        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-danger text-center">
               <i class="fa fa-times-circle"></i> Email ou mot de passe invalid.
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="connecter.php">
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
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once 'partials/footer.php' ?>