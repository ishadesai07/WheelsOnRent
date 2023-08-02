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
.a {
  display: flex;
  justify-content: space-between;
}
.image{
  padding: 20px;
}
</style>

</head>

<div class="image">
<body style='background-image: url("assets/img/register.jpg");'>
</div>


  <div class="container" >
    <div class="a">
      <a class="left-link" href="index.php">Back</a>
     
        <a class="right-link" href="registration.php">Register here!</a>
    </div>
    
    <div class="panel panel-success" style="opacity: 0.9;">
      <div class="panel-heading">Login</div>
      <div class="panel-body">
        <form action="authentication.php" method="POST" >

         
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" class="form-control" id="email" required>

    <label for="psw-repeat"><b>Password</b></label>
    <input type="password" placeholder="Repeat Password" class="form-control" name="Password" id="psw-repeat" required>
    <hr>
   

    <button type="submit" name="submit" class="btn btn-success">Login</button>
 
  
  
</form>
      </div>
    </div>
   </div>

   


</body>
</html>
