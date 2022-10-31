<?php 
$msg='';
$scrpt='';
if($_SERVER["REQUEST_METHOD"]=="POST"){
$conn = mysqli_connect('127.0.0.1','root');

mysqli_select_db($conn,'bagsinfo');

$Uname = $_POST['username'];
$pass = $_POST['Password'];

$qry="select * from userdata where Uname='$Uname' AND password='$pass'";
$check_duplicate=mysqli_query($conn,$qry);

if(mysqli_num_rows($check_duplicate)>0){

    $scrpt='<input type="text" name="lgn" value=1 style="display:none"/>';
}
else{
    $msg="Login Failed <br>Username or Password incorrect";

}
}
?>

<!DOCTYPE html>
<html>
<head><title> LOGIN </title>
    <link rel="stylesheet" type="text/css" href="web.css">
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
            </div>
    </header>

<!--Website Body starts here-->
    <section id="body">
            <div class="form">
                <form name="Login" id="log" action="Login.php" method="POST" >
                    
                        <fieldset>
                            <legend align="center" style="color:black"> LOGIN </legend>
                            
                                <lable> Username:</lable>
                                <br>
                                <input type="text" name="username" placeholder="Username" autofocus style="color: black;"/><br>
                                <br>
                                <lable>Passowrd:</lable>
                                <br>
                                <input type="Password" name="Password" placeholder="Password" style="color: black;"/>
                                <br>
                                <p id="error" style="color:red;font-size:20px ;"><?php echo $msg; ?></p>
                                <?php echo $scrpt; ?> 
                                <a href="UserData.php"><p style="color:blue; padding:10px"> Register/Sign up </p></a>
                                <button type="submit" class="submit" style="font-weight:1000; color:black; height:25px; width:90px; border-radius: 10%;">Login</button> 
                                &nbsp; &nbsp; 
                                <input type="reset" class="reset" value="Cancel" style="font-weight:1000;color:black; height:25px; width:90px; border-radius: 10%;"/>
                            </div>
                        
                        </fieldset>
                    
                </form>
            </div>
        
    </section>
    <script type="text/javascript">
            var val=Login.lgn.value;
            console.log(val);
                    if(val=='1'){
                        console.log("Login successful");
                        document.getElementById("log").innerHTML='<h1>Login Sucessful</h1> <br><a href="index.html" style=color:grey;>Home</a>';
                        localStorage.setItem("slogin","1");
                    }
                    </script>
</body>
</html>