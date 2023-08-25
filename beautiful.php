

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
    <!-- <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" /> -->
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <style>
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
      #beka {
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
      .bro{
        margin:0;
        padding-left:20px;

      }
    </style>
  </head>
  <body>
    <h1 align="center">Registration Page</h1>
    <div class="container">
      <form action="user_registration.php" method="POST">
        <div class="row">
          <div class="col">
            <label for="user_first_name">First Name : </label>
          </div>
          <div class="col">
            <input
              type="text"
              class="form-control"
              name="user_first_name"
              id="user_first_name"
              required
            />
            <br />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="user_last_name" class="">Last Name: </label>
          </div>
          <div class="col">
            <input
              type="text"
              name="user_last_name"
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
              name="user_email"
              class="form-control"
              id="user_email"required
            /><br />
          </div>
        </div>
        <div class="row">
          <div class="col"><label for="user_password">Password :</label></div>
          <div class="col">
            <input
              type="password"
              name="user_password"
              class="form-control"
              id="user_password"required
            /><br />
          </div>
        </div>

        <div class="row">
          <div class="col"><label for="user_age">Age : </label></div>
          <div class="col">
            <input
              type="text"
              name="user_age"
              class="form-control"
              id="user_age"required
            /><br />
          </div>
        </div>

        <div class="row">
          <div class="col"><label for="">Sex : </label></div>
          <div class="col-9" id="beka">
            <select name="user_sex" id=""required class="form-control">
              <option value="Not human"></option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col"><label for="user_city">City : </label></div>
          <div class="col">
            <input
              type="text"
              name="user_city"
              class="form-control"
              id="user_city"required
            />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col"><label for="user_subcity">Sub-city : </label></div>
          <div class="col">
            <input type="text" name="user_subcity"required class="form-control" /><br />
          </div>
        </div>

        <div class="row">
          <div class="col"><label for="user_job">Job : </label></div>
          <div class="col">
            <input
              type="text"required
              name="user_job"
              id="user_job"
              class="form-control"
            /><br />
          </div>
        </div>

        <div class="row">
          <div class="col">
            <label for="user_job_experience">Job experience :</label>
          </div>
          <div class="col">
            <textarea
              id=""
              cols="30"
              rows="10"
              name="user_job_experience"
              class="form-control-sm"required
              placeholder="Type about your job experience ...."
            ></textarea>

          </div>
        </div>
        <input type="submit" id="sub" />
        <br>
        <label for="" class="bro">I have already an account ?</label>
        <a href="Login.php">Login</a>

      </form>
    </div>

  </body>
</html>
