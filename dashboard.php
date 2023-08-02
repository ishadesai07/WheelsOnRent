<?php
session_start();
//print_r($_SESSION);
if (isset($_SESSION['username1']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dashboard.php">Home</a></li>
      <!-- <li class="active"><a href="login.php"> Login </a></li> -->
      <li class="active"><a href="logout.php"> LogOut</a></li>
      <!-- <li><a href="viewContactUs_Page">Enquiry</a></li> -->
      
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Enquiry Details</h3>
  <?php
include('db.php');
  $sql = "SELECT * FROM `contactus`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <div class="container">
  <h2>Contact Us Page</h2>
              
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ContactUS Id</th>
        <th>Customer Name</th>
        <th>Subject</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Message</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
  <?php
  while($row = $result->fetch_assoc()) {
    ?>
    <!-- print_r($row); -->
    
      <tr>
        <td><?php echo $row['contact_us_id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['subject']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['phone_no']?></td>
        <td><?php echo $row['message']?></td>
        <td><?php echo $row['date']?></td>
        
      </tr>
     
    

    <?php
  }
  ?>
  </tbody>
  </table>
</div>
  <?php
} else {
  echo "0 results";
}
  ?>
</div>

</body>
</html>
<?php
}
else{
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('You need to login first');
    window.location.href='index.php';
    </script>");
} 
?>
