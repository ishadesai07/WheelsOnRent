<?php
 ob_start();
   session_start();
include('db.php');


if(isset($_POST['submit'])){
$email=$_POST['email'];
$Password=$_POST['Password'];
// echo $name;
$sql = "SELECT * FROM `login` where username='$email' and password='$Password'";
$result = $conn->query($sql);



  //print_r($result);
  if ($result->num_rows > 0) {

$row = $result->fetch_array();

print_r($row);

if (isset($_POST['email']) && isset($_POST['Password'])) {
        
  if ($email == $row['username'] &&  $Password == $row['password']) 
  {
                
                  $_SESSION['username1'] = $row['username'];


               header("location:dashboard.php");
                 
                  
            }




} else {
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Wrong Username or Password');
    window.location.href='login.php';
    </script>");
}

}
}

?>