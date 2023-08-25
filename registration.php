<?php
require("config.php");
if(!empty($_SESSION["id"])){
    header("Location: profile.php");
}
if(isset($_POST["submit"])){
    $name  =$_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $user_job_experience = $_POST["user_job_experience"];
    $duplicate = mysqli_query($con,"SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    header("Location: Profile.php");
    if(mysqli_num_rows($duplicate)> 0 ){
        echo 
        "<script> alert('Username or Email Has Already Taken')</script>";
        $row= mysqli_fetch_assoc($duplicate);
        $_SESSION["id"] = $row["id"];
        header("Location: Profile.php");

      }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password','$user_job_experience')";
            mysqli_query($con,$query);


            echo 
            "<script> alert('Registration Successful')</script>";
            header("Location: Profile.php");
          }
        else{
            echo 
            "<script> alert('Password Does Not Match')</script>";

        }

    }
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <!-- <h2>Registration</h2> -->
    <!-- <form action=""method="post" autocomplete = "off">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name"required><br>
        <label for="username">Username : </label>
        <input type="text" id="username" name="username"required><br>
        <label for="email">Email : </label>
        <input type="text" id="email" name="email"required><br>
        <label for="password">Password : </label>
        <input type="text" id="password" name="password"required><br>
        <label for="confirmpassword">Confirm Password : </label>
        <input type="text" id="confirmpassword" name="confirmpassword"required><br>
        <button type="submit" name="submit">
            Register
        </button>
    </form>
    <br>
    <a href="login.php">Logi</a> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        .o{
            margin-left:30%;
        }
        .btn{
            width:400px;
            margin-left:30%;
            margin-top:30px;
            background-color:gray;
        }
      #sub {
        margin-left: 40%;
        margin-top: 30px;
        width: 30%;
        border-radius: 10px;
        padding: 5px;
        background: linear-gradient(rgb(182, 189, 182), rgba(92, 83, 83, 0.59));
      }
      .col input {
        width: 400px;
      }
      textarea {
        width: 400px;
        /* margin-left: 50px; */
        border-color: white;
        border-radius: 15px;
      }
      textarea::placeholder {
        font-size: large;
      }
      button {
        width: 450px;
        margin-right: 200px;
        padding-left: 50px;
      }
      .container {
        background-color: rgb(239, 244, 247);
        border-radius: 20px;
        padding: 15px;
        font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
        font-weight: 900;
        font-size: 25px;
      }
      label {
        margin-left: 200px;
      }
    </style>
  </head>
  <body>
    <h1 align="center">Registration Page</h1>
    <div class="container">

      <form action=""method="post" autocomplete = "off">
        <div class="row">
          <div class="col">
            <label for="user_first_name">First Name : </label>
          </div>
          <div class="col">
            <input
              type="text"
              class="form-control"
              name="name"
              id="user_first_name"
              required
            />
            <br />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="user_last_name" class="">Userame: </label>
          </div>
          <div class="col">
            <input
              type="text"
              name="username"
              class="form-control"
              id="user_last_name"required
            /><br />
          </div>
        </div>
        <div class="row">
          <div class="col"><label for="user_email">Email : </label></div>
          <div class="col">
            <input
              type="text"
              name="email"
              class="form-control"
              id="email"required
            /><br />
          </div>
        </div>
        <div class="row">
          <div class="col"><label for="user_password">Password :</label></div>
          <div class="col">
            <input
              type="password"
              name="password"
              class="form-control"
              id="user_password"required
            /><br />
          </div>
        </div>
        <div class="row">
            <div class="col">
            <label for="pass">Confirm password : </label>
            </div>
            <div class="col">
                <input type="password" id="pass" class="form-control password"name="confirmpassword">
            </div>
        </div><br>
        <div class="row">
          <div class="col">
            <label for="">Job Experience :
            </label> </div>
          <div class="col">
            <input type="text"name = "user_job_experience" class="form-control">
          </div>
        </div>
        <button type="submit" name="submit" class = "btn">
            Register
        </button>
    </form>
    <br>
    <label for="a" class="o">I Already Have An Account</label>
    <a href="login.php">Login?</a>

</body>
</html>