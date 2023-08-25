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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    span{
        color:rgb(255, 0, 0);
    }
    h3{
        margin-top: 20px;
        text-align:center;
    }
    .section__title{
        text-align: center;
        letter-spacing: 0.01em;
        font-size:40px;
    }
    .contact__form{
        position: relative;
    }
    .contact__group{
        display:block;
        row-gap:1rem;
        margin-left: 32%;
        margin-top: 3%;
    }
    .contact__input{
        padding: 1rem 1.25rem;
        border-radius: .5rem;
        color:rgb(2, 255, 2);
        background-color: black;
        font-weight: bolder;
        font-style:italic;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 30px;
        margin-bottom: 10px;
    }
    ::placeholder{
        color:red;
    }
    #beka{

        width:44%;
    }
    button{
        margin-left:20%;
        padding:15px;
        border-radius: 30px;
        background-color:rgb(255, 85, 0);
        border-color:slateblue;
        color:white;
        font-family:Georgia, 'Times New Roman', Times, serif ;
        font-weight:bold;
    }
    button:hover{
        background-color: aqua  ;
    }
</style> 
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
        <section class="contact section" id="contact">
            <h3 class="section__subtitle">
                Get In <span>Touch</span>
            </h3>
            <h2 class="section__title">
                Contact me
            </h2>

            <div class="contact__container ">
                <form action="" class="contact__form" id="contact-form">
                    <div class="contact__group">
                        <input type="text" name="user__name" placeholder="Enter your name"class="contact__input">
                        <br>
                        <input type="email" name="user__email" placeholder="Enter your email"class="contact__input">
                        <br>
                        <textarea name="user__project"id="beka" placeholder="Enter your message " id="" class="contact__input"></textarea>
                        <p class="contact__message" id="contact-message"></p>
                        <button  type="submit"class="button contact__button">
                            Send 
                        </button>
                    
                    </div>
                </form>
            </div>

        </section>
</body>
</html>