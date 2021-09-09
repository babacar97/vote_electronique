<?php require ('../../controler/admin/controlAjoutAdmin.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<?php include '../../config/includes/head.php'; ?>
<body>
<?php include '../../config/includes/navbar.php'; ?>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
            <form  method="post">
                <div class="error">
                    <?php if (isset($_GET['error'])){ echo '<p>'.$errorMsg.'</p>';} ?>
                </div>
                <h1>PAGE ADMINISTRATEUR</h1>
                
                
                
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form3Example2" class="form-control" name="nom" required/>
                                <label class="form-label" for="form3Example2">Nom</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form3Example1" class="form-control" name="prenom" required/>
                                <label class="form-label" for="form3Example1">Prénom</label>
                            </div>
                        </div>
                    </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" class="form-control" name="login" required/>
                            <label class="form-label" for="form3Example3">Nom d'utilisateur</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form3Example4" class="form-control" name="mdp" required/>
                            <label class="form-label" for="form3Example4">Mot de passe</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="form3Example4" class="form-control" name="rmdp" required/>
                            <label class="form-label" for="form3Example4">Confirmer mot de passe</label>
                        </div>

                        

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4" name="enregistrer">Enregistrer</button>

                    
                
            </form>
    </div>
  </div>
</div>


<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>   
</body>
</html>