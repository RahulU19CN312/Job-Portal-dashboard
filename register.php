<?php

$server='localhost';
$username='root';
$password='';
$database='job_portal';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error) {
    die("Connection failed".$conn->connect_error); 
} 
echo"";

if (isset($_POST['submitt'])) {
    $name=$_POST['name'];
    $number=$_POST['phone_no'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `users`(`Name`, `Email`, `Password`,`phone_no`) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn, $sql)){
        echo "Record inserted successfully.";
    }
    else {
        echo "ERROR: could not execute" . $sql. "<br>" . mysql_error($conn);
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body{
            background-image: url("https://images.pexels.com/photos/927451/pexels-photo-927451.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
            background-size: cover;
        }
    form{
        background-color: whitesmoke;
        margin-top : 3em;
        margin-left : 30em;
        margin-right : 10em;
        box-shadow: 10px 10px 8px 10px #888888;
        padding : 10px;
    }
    </style>
    
    <title>Register</title>
</head>


<body>
    <div class="container">
    <form method="POST">
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
    </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Mobile Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name= "email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submitt">Submit</button>
  <br>
  Already Registered? <a href="login.php">Login</a>
</form>
    </div>
    
</body>
</html>