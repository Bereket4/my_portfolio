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
    <title>About</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <style>
    span{
      color:red;
    }
    #about{
      margin-top: 60px;
    }
    .section__title{
      font-weight:bolder;
    }
    .about__description{
      font-style:italic;
      font-family: 'Times New Roman', Times, serif;
      font-weight:600;
      font-size: 20px;
      
    }
    .button{
      border-radius: 30px;
      background-color: black;
      color:rgb(0, 255, 8);
      padding:10px;
      list-style: none;
      text-decoration: none;
      margin-top: 5%;
      
    }
    .button:hover{
      color:black;
      background-color:rgb(0, 255, 8) ;
      transition:0.4s ease;
    }
  </style>

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
      <section class="about section" id="about">
        <div class="about__container container grid">
          <div class="about__data">
            <h3 class="section__subtitle">
              My <span>Intro</span>
            </h3>
            <h2 class="section__title">
              About Me
            </h2>
              <p class="about__description">
                 I'm a Software developer with a passion for web development.<br />
                Experienced in many programming languages and their frame works <br/>
                And  I'm renowned by making very interactive Web pages. <br />
                so ,what are you waiting for huury up and keep in touch<br />
                
              </p>
              <a href="#contact"class="button">Contact me</a>
          </div>
  </div>
        </div>
      </section>

      
    
  </body>
</html>
