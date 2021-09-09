<?php 
    require_once ("../../model/candidat/modelCandidat.php");
    if (isset($_POST['enregistrer'])){
        
            
                
            $nom = $_POST['nomC'];
            $nomParti=$_POST['nomP'];
            $photo=$_POST['nomP'];
            $nomfic= basename($_FILES['monfic']['name']);	
            $dossier ='../../img/';
            $fichier = basename($_FILES['monfic']['name']);
            $taille_maxi = 1000000;
            $taille = filesize($_FILES['monfic']['tmp_name']);
            $extensions = array('.png','.PNG', '.gif','.GIF', '.jpg','.JPG', '.jpeg','.JPEG');
            $extension = strrchr($_FILES['monfic']['name'], '.');
            //Début des vérifications de sécurité...
            if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
            {
                $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg...';
            }
            if($taille>$taille_maxi)
            {
                $erreur = 'Le fichier est trop gros...';
            }
            if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
            {
                //On formate le nom du fichier ici...
                $fichier = strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            if(move_uploaded_file($_FILES['monfic']['tmp_name'], $dossier . $fichier)) 
            {
                echo '<font color="blue"><b><center>Upload effectué avec succès !</center></b></font>';
                $candidat=new Candidat();
                if($candidat->saveCandidat($nom,$nomParti,$nomfic)){
                    
                    header("location:../../../SGV/view/candidat/ajoutCandidat.php");
                 }else{
                echo "<script>alert('Erreur lors de l'enregistrement!');</script>";
                
            }
            }
            else //Sinon (la fonction renvoie FALSE).
            {
                echo 'Echec de l\'upload !';
            }
            }
            else
            {
                echo $erreur;
            }



            
            
            
    }

    if (isset($_REQUEST['IdC'])){
        $id=$_REQUEST['IdC'];
        $candidat=new Candidat();
        if($candidat->delCandidat($id)){
            header("location:../../../../model/candidat/modelCandidat.php");
        }else{
            echo "<script>alert('Erreur lors de la selection!');</script>";
        }
    }
    
    if (isset($_REQUEST['IdM'])){
        $id=$_REQUEST['IdM'];
        $candidat=new Candidat();
        if($candidat->getCandidat($id)){
            header("location:../model/modelCandidat.php");
        }else{
            echo "<script>alert('Erreur lors de la selection!');</script>";
        }
    }    

    


?>