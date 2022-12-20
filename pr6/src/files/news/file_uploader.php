<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_FILES["uploadFile"]) && $_FILES["uploadFile"]["error"] == 0){

        $fileName = $_FILES["uploadFile"]["name"];
        $fileType = $_FILES["uploadFile"]["type"];
        $fileSize = $_FILES["uploadFile"]["size"];

        if($fileType != 'application/pdf') 
                die("Error: please select a pdf-file");
    
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) 
                die("Error: file size is larger than 5M");

        $name = "upload/" . $_FILES["uploadFile"]["name"];
        if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $name))
                echo "File was uploaded";
        else
               echo "File was uploaded, but didn't moved to the upload folder"; 
    
    } else{
        echo "Error: " . $_FILES["uploadFile"]["error"];
    }
}

?>