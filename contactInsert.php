<?php
 //include('header.php');
   include('footer.php');
include('db.php');

// $name=$email=$gender=$address=$Password="";
// $mob="";
// $dob="";

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$mobile=$_POST['mobile'];
$Message=$_POST['message'];


// echo $name;


$sql="INSERT INTO `contactus` (`name`, `subject`, `email`, `phone_no`, `message`) VALUES ('$name', '$subject', '$email', '$mobile', '$Message')";
 //$use=mysqli_query($con,$sql); 
 //$use= $conn->query($sql);
 if ($conn->query($sql) === TRUE) {

 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully send');
    window.location.href='login.php';
    </script>");
  //header('Location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


?>