
<?php 
    require_once "../../model/admin/modelConexionAdmin.php";
    
    
        if (isset($_POST['conexion'])) {
            $login=$_POST['login'];
            $mdp=$_POST['mdp'];
            $utilisateur=new User();
            if($utilisateur->verifieUser($login,$mdp)){
                    header("location:../../view/candidat/ajoutCandidat.php");
                    session_start();
            }else{
                echo "<script>alert('Echec Authentification!'); location.href='../view/conexionAdmin.php';</script>";
                
        }
    }

// Déconnection
    if(isset($_POST['deconect'])){
    session_destroy(); 
    unset($_SESSION['login']);
    header("location:../../../SGV/view/admin/conexionAdmin.php");
    exit();
    }

    

    


?>