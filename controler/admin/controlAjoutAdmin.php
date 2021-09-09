<?php 
    require_once ("../../model/admin/modelConexionAdmin.php");
    if (isset($_POST['enregistrer'])){
        
            if ($_POST['rmdp'] == $_POST['mdp']) {
                
                    $nom=$_POST['nom'];
                    $prenom=$_POST['prenom'];
                    $login=$_POST['login'];
                    $mdp=$_POST['mdp'];
                    $utilisateur=new User();
                    if($utilisateur->saveUser($nom,$prenom,$login,$mdp)){
                            header("location:../index.php");
                    }else{
                        echo "<script>alert('Erreur lors de l'enregistrement!');</script>";
                       
                }
            
            } else {
                echo "<script>alert('Vos deux mots de passe ne correspondent pas!');</script>";
                
            }
    
        
    }
    

    


?>