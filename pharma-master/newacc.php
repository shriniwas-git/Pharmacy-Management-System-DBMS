<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $name = $_POST['name'];
        $usern=$_POST['usern'];
        $password1=$_POST['password1'];
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pharma1";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        echo 'Not connected';
    }else{
        // echo 'Connected Sucsessfully';
    }
    if(isset($_POST['usern']) && isset($_POST['password1'])){
    $hash = hash("sha256", $password1);
    $sql = "INSERT INTO `customer` (`S.No`, `Name`, `Username`, `Password`) VALUES (NULL, '$name', '$usern', '$hash');";
    $RESULT = mysqli_query($conn,$sql);
if(!$RESULT){
    echo 'Sorry query not excecuted';
}else{
    header("Location: index.php");
}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Login Form</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 1550px;
    background-image: url('https://img.freepik.com/premium-photo/pharmacy-background-dark-table-levitation-pills-tablets-dark-background-which-falling-down-pills-medicine-healthy-close-up-capsules-pills-falling-black-background_130265-1615.jpg?w=2000');
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}


form{
    height: 700px;
    width: 800px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
#but1{
    margin-top: 15px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 20px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 28px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<script>
            
            function verifyPassword() {  
                var pw = document.getElementById("password1").value;  
                //check empty password field  
                if(pw == "") {  
                    document.getElementById("message").innerHTML = "**Fill the password please!";  
                    return false;  
                }  
                if(strlen(var)<8){
                    document.getElementById("message").innerHTML = "**Size is less than 8";  
                    return false;
                }
                var p2 = document.getElementById("password2").value;
                if(pw!=p2){
                    document.getElementById("message2").innerHTML = "**Password not matched.";  
                    return false;
                }
                window.location.replace("index.php");
                return true;
                }  
                function func(){
                    if(verifyPassword()){
                alert('Your account created Succesfully. Login again to continue');
                
            }
                else{
                    document.getElementById("message3").innerHTML = "Please Try Again";
                }
            }
            
        </script>

<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return verifyPassword()" id="f1" >
        <h3>Create New Account Here</h3>
        <label for="name">Enter Name</label>
        <input type="text" name="name" placeholder="Name" id="name" required>
        <label for="usern">Enter Username</label>
        <input type="username" name="usern" placeholder="Username" id="usern" required>
        <!-- <span id = "message" style="color:red"><?php //$usern=$_POST['usern'];$sql1 = "SELECT *  FROM `customer` WHERE `Username` LIKE '$usern';";
        // $result = mysqli_query($conn,$sql1);
        // $num = mysqli_num_rows($result);
        // if($num>0){
        //     echo "Username already exists";
        //     header("Location: newacc.php");
        // }
        ?> </span>  -->
        <label for="password1">Enter New Password</label>
        <input type="password" name="password1" placeholder="Password" minlength="8" id="password1" required>
        <span id = "message" style="color:red"> </span> 
        <label for="password2">Confirm Password</label>
        <input type="password" name="password2" placeholder="Password" minlength="8" id="password2" required>
        <span id = "message2" style="color:red"> </span> 
        
         <a  style="color: #080710;" href="index.php" onclick="func()"><input type="submit" id='but1' value='Submit'></a>
        <span id = "message3" style="color:red"> </span> 
    </form>
</body>
</html>
