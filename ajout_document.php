<?php

 $targetfolder = "upload/document/";

 $targetfolder = $targetfolder.basename( $_FILES['file']['name']) ;
$name=$_FILES['file']['name']; 

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 include("connectDB.php");
         $req = $conn->prepare("INSERT INTO document ( url_document, nom_document) VALUES ('$targetfolder','$name')"); 
        
         $req->execute() or die (mysql_error ());
            header('Location: http://localhost/sitetic/index_connect.php?'); 
                exit(); 
 }

 else {

 echo "Problem uploading file";

 }

 ?>