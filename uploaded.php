<?php

require("config.php");


$target = 'upload/';
$targetFile  = $target . basename($_FILES['pro']['name']);
echo $targetFile;
$result = move_uploaded_file($_FILES['pro']['tmp_name'],$targetFile);
if($result){
    $sql = "UPDATE tb_user SET "
}
// $result2 = mysqli_query($con,"SELECT * FROM tb_user");
// $row = mysqli_fetch_assoc($result2);
// // if(isset($_SESSION["id"])){
//     // $_SESSION["id"] =$row["profilel"];
// }
// if($result){

//     // $sql = "INSERT INTO tb_user (profilel)VALUES('$targetFile') ";
//     // $result = mysqli_query($con,$sql);
//     // if($result){
//     //     echo "<script>alert('บันทึกข้อมูลเรียบร้อย')";

//     // }


// }




?>