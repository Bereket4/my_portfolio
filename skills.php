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
    <title>Skills</title>
        <link rel="stylesheet" href="style.css">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    -->
        <style>
            table{
                position:absolute;
                left:45%;
                bottom: 20%;
                background:rgb(67, 211, 0);
                text-align:center;
                padding:5%;
                box-shadow:10px 10px 3px black;
         
            }
            table th {
              font-family:serif;
              font-style:italic;
              font-size:30px;
              padding-bottom:10px;
            }
            table tr {
                padding-left:5px;
                padding: 10px;
                padding-bottom:5px;
                /* font-size:5px; */
                font-weight:600;
            }
            
           
            .container{
                margin:10px;
                margin-top: 80px;
            }
            .skills__description{
                padding-top: 10px;
                font-style:italic;
                font-family: 'Times New Roman', Times, serif;
                font-weight:600;
                font-size: 20px;
            }
            span{
                color:rgb(76, 221, 8);

            }
            #one{
            
                color:#fff;
                font-weight:900;
                font-style: italic;
                padding-bottom: 5px;
            }
            #two{
        padding-bottom: 5px;
                color:#fff;
                font-weight:900;
                font-style:italic;

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
    <section class="skills section">
        
        <div class="container">
          
        
          <h2 class="section__title">
            My   <span>skills</span>
          </h2>
          <p class="skills__description">Normaly,I have no particular skill 
            that can I say confidently  <br>I am expert on it.Because as a programmer I have been  <br>working just for one year.
            However, for   bacground<br>knowledge I will mention some of courses that I take.
            <br>
          
         
          </p>
           <table >
            <tr>
                <th id="one">Tech</th>
                <th id="two">percentage</th>
            </tr>
            <tr> 
                 <td>Html</td>
                 <td>100%</td>
            </tr>
          <tr>
            <td>Css</td>
            <td>100%</td>

        </tr>
        <tr>
            <td>pyhton</td>
            <td>100%</td>

        </tr>
        <tr>
            <td>Bootstrap</td>
            <td>50%</td>
        </tr>
        <tr>
            <td>Kotlin</td>
            <td>65%</td>
        </tr>
        <tr>
            <td>Java</td>
            <td>50%</td>
        </tr>
           </table>
           
      </div>
    </section>
  </body>
</html>
