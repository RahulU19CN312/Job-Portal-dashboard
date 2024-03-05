<?php

$server='localhost';
$username='root';
$password='';
$database='job_portal';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error) {
    die("Error" . $conn->connect_error); 
} 
echo"";
session_start();
if (isset($_POST['login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "SELECT * FROM users WHERE `email`='$email' AND `password` = '$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else {
       $error='emailid and password is incorrect';
    }
}
if(isset($_POST['enter'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $jobDesc=$_POST['jobDesc'];
    $CTC=$_POST['CTC'];

    $job="INSERT INTO `jobs`(`cname`, `position`, `jobDesc`, `CTC`) VALUES ('$cname','$pos','$jobDesc','$CTC')";
    if(mysqli_query($conn,$job)){
        echo "New Job Posted" ;
    }
    else{
        echo "Failed to post the job . $sql." . mysql_error($conn);
    }
}
if(isset($_POST['applied'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];

    $sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
    mysqli_query($conn,$sql);
}
?>