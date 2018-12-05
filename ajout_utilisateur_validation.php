<?php

if (isset($_POST('identifient')) && isset($_POST('poste'))&&isset($_POST('mdp')) )

{
   $identifiant=htmlspecialchars($_POST['identifient']); 
   $poste=htmlspecialchars($_POST['poste']); 
   $mdp=htmlspecialchars($_POST['mdp']);
   
    include("connectDB.php");
 
$req = $conn->prepare("INSERT INTO utilisateur (identifiant, password, poste) VALUES ('$identifiant',' $mdp','$poste')"); 
        
         $req->execute() or die (mysql_error ());
            header('Location: http://localhost/sitetic/index_connect.php?'); 
                exit(); 
}
else
{
    echo"echec de l/'ajout de l/'utilisateur !"; 
     header('Location: http://localhost/sitetic/ajout_utilisateur.php?'); 
                exit();
}
?>