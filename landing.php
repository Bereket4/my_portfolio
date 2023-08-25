<?php
require ("config.php");
// require("db.php");
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result =  mysqli_query($con,"SELECT * FROM tb_user WHERE id ='$id' ");
    $row= mysqli_fetch_assoc($result);

}
else{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hello</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="main">
    <div class="container">
      <div class="navbar">
        <h2><i>.Beka</i></h2>
        <ul>
        <li><a href="landing.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="skills.php">SKILLS</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="profile.php">Profile</a></li>
          </ul>
      </div>
      <div class="info">
        <h3>Hi, I'm <span> Bereket.</span></h3>
        <h1><span>W</span>EB <span>D</span>EVELOPER</h1>
        <h3>
          Web designer and graphics designer from Addis Ababa,Ethiopia. I create
          <br />
          websites to do my businesses.
        </h3>
        <a href="#">hire me</a>
      </div>
      <div class="icons">
        <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
        <a href="#"><ion-icon name="logo-tiktok"></ion-icon></a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
      </div>
      </div>
    </div>
  
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </body>
</html>
