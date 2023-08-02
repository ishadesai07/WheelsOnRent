<!DOCTYPE html>
<html>
<head>
  <title>Wheels On Rent</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  /*background-color: black;*/
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: #02060f;
  margin-top: 70px;
  width: 40%;
}
.image{
  padding: 5px;
}
</style>

</head>
<div class="image">
<body style='background-image: url("assets/img/register.jpg");' >
</div>


  <div class="container" >
    
    <div class="panel panel-success" style="opacity: 0.9;">
      <div class="panel-heading">Registration</div>
      <div class="panel-body">
        <form action="add_details.php" method="POST">

          <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Email" class="form-control" name="name" id="email" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" class="form-control" id="email" required>

    <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Email" name="mob" class="form-control" id="email" required>


    <label for="dob"><b>DOB</b></label>
    <input type="date" placeholder="Enter Email" name="dob" class="form-control" id="email" required>

    <label for="psw"><b>Gender</b></label>
    <select class="form-control" name="gender">
     <option value="Female">Female</option>
     <option value="Male">Male</option>
    </select>

    <label><b>Address</b></label>
    <textarea name="address" class="form-control"></textarea>

    <label for="psw-repeat"><b>Password</b></label>
    <input type="password" placeholder="Repeat Password" class="form-control" name="Password" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="submit" class="btn btn-success">Register</button>
 
  
  <div class="signin">
    <p>Already have an account? <a href="Login.php">Sign in</a>.</p>
  </div>
</form>
      </div>
    </div>
   </div>

   


</body>
</html>
