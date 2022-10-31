function regf()
        {
            var Nam=reg.Nam.value;
            var Username=reg.Username.value;
            var Password=reg.Password.value;
            var DOB=reg.DOB.value;
            var Mobile=reg.Mobile.value;
            var email=reg.email.value;
            var address=reg.address.value;
            var gender=reg.gender.value;
            if(Nam==""){
                alert("Please insert Your name");
                document.reg.Nam.focus();
                return false;
            }
            if(Username==""){
                alert("Please type Your  Username");
                document.reg.Username.focus();
                return false;
            }
            if(Password==""){
                alert("Please set Your password");
                document.reg.Password.focus();
                return false;
            }
            if(Password.length<6){
                alert("Password should be atleast 6 characters long");
                document.reg.Password.focus();
                return false;
            }
            if(DOB==""){
                alert("Please Select Your date of Birth");
                document.reg.DOB.focus();
                return false;
            }
            if(Mobile==""){
                alert("Please Enter mobile number");
                document.reg.Mobile.focus();
                return false;
            }
            if(isNaN(Mobile)==true){
                alert("Please Enter valid phone number");
                document.reg.Mobile.focus();
                return false;
            }
            if(Mobile.length!=10 ){
                alert("Please Enter a 10 digit phone number");
                document.reg.Mobile.focus();
                return false;
            }           
            if(email==""){
                alert("Please Enter your E-mail ID");
                document.reg.email.focus();
                return false;
            }    
            if(address==""){
                alert("Please Mention your address");
                document.reg.address.focus();
                return false;
            }
            if(gender==""){
                alert("Please Select Your Gender");
                return false;
            }
        }

function login(){
    var username=Login.username.value;
    var password=Login.Password.value;
    if(localStorage.getItem(username)==password){
        console.log("Login successful");
        document.getElementById("log").innerHTML='<h1>Login Sucessful</h1> <br><a href="index.html" style=color:grey;>Home</a>';
        localStorage.setItem("slogin","1");
    }
    else
    {
        document.getElementById("error").innerHTML="Login Failed <br>Username or Password incorrect";
    }
}

function kd()
{
    
    con=confirm('Your Registration will be canceled do you want to continue?')
    if(con==true){
        reg.Nam.value="";
            reg.Username.value="";
            reg.DOB.value="";
            reg.Mobile.value="";
            reg.email.value="";
            reg.address.value="";
            reg.gender.value="";
    }
}