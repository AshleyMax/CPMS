<?php
 //Specify directory for uploading
 $tfolder = "C:/xampp/htdocs/CPMS/uploads/";
 $tfolder = $tfolder.basename( $_FILES['file']['name']) ;

 //Move file from temp directory to target directory
 if(move_uploaded_file($_FILES['file']['tmp_name'], $tfolder))
 {
    //If successful, echo out success message
    echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }
 else {
 //If failed, echo out failure message    
 echo "Problem uploading file";
 }
 ?>