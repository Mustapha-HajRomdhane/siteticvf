<?php

session_start();
 
if(isset($_POST['titre_evenement'])&&isset($_POST['description_evenement'])&&isset($_POST['date_evenement']))
{
  
     $titre_evenement= htmlspecialchars($_POST['titre_evenement']);
     $description_evenement= htmlspecialchars($_POST['description_evenement']);
     $date=htmlspecialchars($_POST['date_evenement']);
    
$dossier = 'upload/evenement/';
$fichier = basename($_FILES['photo']['name']);
$taille_maxi = 500000;
$taille = filesize($_FILES['photo']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg','.jfif','.JPG','.PNG','.GIF','.JPEG','.JFIF');
$extension = strrchr($_FILES['photo']['name'], '.'); 
//Début des vérifications de sécurité...

if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
         include("connectDB.php");
         $URL = $dossier . $fichier;
         $req = $conn->prepare("INSERT INTO evenement (titre_evenement, discription_evenement, url_image, date_evenement) VALUES ('$titre_evenement','$description_evenement','$URL','$date')"); 
        
         $req->execute() or die (mysql_error ());
            header('Location: http://localhost/sitetic/index_connect.php'); 
                exit(); 
       
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'ajout de l\'evenement !';
     }
}
else
{
     echo $erreur;
}

}
?>