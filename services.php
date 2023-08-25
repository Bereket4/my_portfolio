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
    <title>Services</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        h3{
            text-align:center;
            text-decoration:underline;
            text-decoration-color: rgb(47, 255, 47);
        }
        .services__card-2{
            position:absolute;
            left:32%;
            bottom: 54%;
        }
        .services__card{
            margin-top:5%;
        }
        p{
            padding-top: 10px;
          
            }
        .services__card-3{
            position:absolute;
            left:70%;
            bottom: 46%;
            margin-right: 10px;
        }
        span{
            color:rgb(47, 255, 47);
        }
        span:hover{
            color:rgb(255, 0, 0);
 

        }
        p:hover{
            padding-top: 10px;
            font-style:italic;
            font-family: 'Times New Roman', Times, serif;
            font-weight:600;
            font-size: 20px;
            color:red;
        }
        .services__card{
            margin-left: 10px;
        }
    </style>
  </head>

  <body>
    <div class="main">
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
    <section class="services section" id="services">
      <h3 class="section__subtitle">My Services</h3>
  
      <div class="services__container container grid">
        <article class="services__card">
          <i class="ri-layout-3-line"></i>
          <h2 class="services__title">Web <span>Developer</span> </h2>
          <p class="services__description">
            Development of custom web pages.<br>
            using current technologies and <br>
            libraries of the labour field.
          </p>
        </article>
        <article class="services__card-2">
      
          <h2 class="services__title">UI <span>Designer</span></h2>
          <p class="services__description">
                I offer design for the user interface
                and make <br>it fabulous by using modern tech. 


          </p>
        </article>
        <article class="services__card-3">
          <h2 class="services__title"><span>Programmer </span>and Teacher</h2>
          <p class="services__description"> Thanks for social medias within support of them 
            I teach people how to code 
            and  how to <br>give instruction for the computer.And  currently  I'm doing on it vastly.        </p>

        </article>
      </div>
    </section>
  </body>
</html>
