<?php 
session_start();

    $target = 'upload/';
    $targetFile = $target . basename($_FILES['profile']['name']);//profile is our html name

    $result = move_uploaded_file($_FILES['profile']['tmp_name'], $targetFile);
    if($result){
        require("db.php");
        
        $username = $_SESSION["username"];

        $sql = "UPDATE user SET profile_img='$targetFile' WHERE username = '$username'";
        $result = mysqli_query($con, $sql);

        if($result){
            header('Location: profile.php');
        }else{
            echo "Error Updating";
        }
        
    }


?>