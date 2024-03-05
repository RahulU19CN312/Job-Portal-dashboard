<!DOCTYPE html>
<?php include 'config.php'?>
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
        margin-top : 10em;
        margin-left : 30em;
        margin-right : 10em;
        box-shadow: 10px 10px 8px 10px #888888;
        padding : 30px;
    }
    </style>
    
    <title>Login</title>
</head>


<body>
<div class="container">
<form method = "POST"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Show password</label>
  </div>
  <button type="submit" class="btn btn-primary" name = "login">Login</button>
  <p style="text-align: center;">New User?<br> Create Account <a href="register.php"> Sign Up</a></p>
</form>
</div>
    
</body>
</html>