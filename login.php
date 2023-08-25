<?php 
require("config.php");
if(!empty($_SESSION["id"])){
    header("Location: profile.php");
}

if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($con,"SELECT * FROM tb_user WHERE username ='$usernameemail' OR email = '$usernameemail' ");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] =$row["id"];
            header("Location: profile.php ");

        }else{
            "<script> alert('Wrong Password')</script>";
        }

    }
    else{
        echo 
        "<script> alert('User Not Registered')</script>";
    }
   
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
    <style>
        .icon{
            margin-left:42%;

        }
        svg{
            background-color:#00e600;
            border-radius: 50px ;
            color:black;
            
        }
        button{
            padding: 10px;
            padding-left:20px;
            padding-right:20px;
            background-color:#00e600;
            border-radius:5px;
            border:none;
        }
        body{
            background-color:brown;
        }
        .card{
            background-color: rgb(239, 244, 247);
            border-radius: 6px;
            color:white;
            font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
            font-weight: 900;
            font-size: 25px;
            
        }
        a{
            list-style-type: style none;
            text-decoration:none;
            color:black;
        }
    </style>
  </head>
  <body>
    <section>
        
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                             <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                 <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                            <form action=""autocomplete = "off" method="post">
                                <input type="text" name="usernameemail" id="" class="form-control my-4 py-2 "placeholder = "Email">
                                <input type="text" name="password" id="" class="form-control my-4 py-2 "placeholder = "Password">
                                <div class="text-center">

                                    <button type="submit" name = "submit" >Login</button>
                                    <br>
                                    <label for=""> <a href="registration.php" class="nav-link">Sign in?</a></label>
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
 


  </body>
</html>