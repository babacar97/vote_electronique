
<!DOCTYPE html>
<html lang="fr">
<?php include '../../config/includes/head.php'; ?>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
                <div class="error">
                    <?php if (isset($errorMsg)){ echo $errorMsg ;} ?>
                </div>
            <form action="../../controler/admin/controlConexionAdmin.php" method="POST">
                <h1>PAGE ADMINISTRATEUR</h1>
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" id="login" class="form-control" name="login" required/>
                    <label class="form-label" for="form1Example1">Nom d'utilisateur</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="mdp" class="form-control" name="mdp" required/>
                    <label class="form-label" for="form1Example2">Mot de passe</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block" name="conexion">Se connecter</button>
                <!-- <a href="./index.php?page=Inscription" class="btn btn-info">Inscription</a> -->
            </form>
    </div>
  </div>
</div>


<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>   
</body>
</html>