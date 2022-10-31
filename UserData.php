<?php
$msg='';
if($_SERVER["REQUEST_METHOD"]=="POST"){
$msg='';
$conn = mysqli_connect('127.0.0.1','root');

mysqli_select_db($conn,'bagsinfo');

$Name = $_POST['Nam'];
$Uname = $_POST['Username'];
$pass = $_POST['Password'];
$DOB = $_POST['DOB'];
$phone = $_POST['Mobile'];
$Mail = $_POST['email'];
$Address = $_POST['address'];
$Gender = $_POST['gender'];

$qry="select * from userdata where Uname='$Uname'";
$check_duplicate=mysqli_query($conn,$qry);

if(mysqli_num_rows($check_duplicate)==1){
    $msg='<div style="color:red"><b> Username not available</div>';

}
else{
$query = "INSERT INTO userdata( `Name`, `Uname`, `password`, `DOB`, `Mobile`, `Email`, `Address`, `Gender`) VALUES ('$Name','$Uname','$pass','$DOB','$phone','$Mail','$Address','$Gender')";

mysqli_query($conn,$query);

header('location:Login.html');
}

}
?>


<!DOCTYPE html>
<html>
<head></head><title>SIGNUP </title>
    <link rel="stylesheet" href="form.css" type="text/css">
    <script src="form.js"></script>
</head>
<body>
    <header>
        <div class="header-bg">
            <img src="Nav-bar/bg.jpeg" class="header-img" style="width:18%;">
            <img src="Nav-bar/bg2.jpeg" class="header-img">
            <img src="Nav-bar/bg5.jpeg" class="header-img">
            <img src="Nav-bar/bg8.jpeg" class="header-img" style="width:10%;">
            <img src="Nav-bar/style bags.jpeg" class="header-img">
            <img src="Nav-bar/bg4.jpeg" class="header-img">
            <img src="Nav-bar/handbags.jpeg" class="header-img">
        </div>
            <p class="head-name"><a href="index.html">SHEIN Bags</a></p>
            <div class="options">
                <a href="men.html">MEN</a>
                <a href="women.html">WOMEN</a>
                <a href="Kids.html">KIDS</a>
                <a href="Gallery.html">Gallery</a>
                <a  href="Login.html">Login</a>
            </div>
    </header>

    <!--Body starts here-->
    <section id="body" >
        <div class="form">
    <form name="reg" action="" method="post">
        <table border=5 rules="none" cellpadding=10 >
            <tr>
                <td colspan=2>
                    <h1> Register</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <lable>Enter your name:</lable></td> <td><input type="text" name="Nam" placeholder="First Name" required autofocus></td>
            <tr>
                <td>
                    <lable>Enter Username:</lable></td> <td><input type="text" name="Username" placeholder="Username" required>
                        <?php 
                        echo $msg;
                        ?>
                        <td></tr>
            <tr>
                <td>
                    <lable>Set Password:(atleast 6 characters)</lable></td> <td><input type="password" name="Password" placeholder="Enter Password" required><td></tr>
            <tr>
                <td>
                    <lable>Select your Birthdate:</Select>:</lable></td> <td><input type="date" name="DOB" required><td></tr>
            <tr>  
                <td>
                    <lable>Enter Mobile no:</lable></td> <td><input type="tel" name="Mobile" placeholder="Example: 5760749983 " required></td></tr>
            <tr>
                <td>
                    <lable>Enter Email:</lable></td> <td><input type="email" name="email" placeholder="Example@gmail.com"></td></tr>
            <tr >
                <td valign="top">
                    <lable>Enter Address:</lable></td> <td><textarea rows="4" cols="30" name="address" placeholder="Address" required></textarea></td></tr>
                    <tr><td>
                    <lable>Select Gender:</lable></td> <td><input type="radio" name="gender" value="male"> <lable>Male</lable> &nbsp <input type="radio" name="gender" value="female"> <lable>Female</lable> &nbsp <input type="radio" name="gender" value="Others"><lable>Others</lable></td></tr>
    </table>
    <br>
    <Button type="submit" class="submit" onclick="regf();">Submit</Button>
    <input type="button" value="cancel" class="reset" onclick="kd()">
</form>
</div>
</section>
</body>
</html>
