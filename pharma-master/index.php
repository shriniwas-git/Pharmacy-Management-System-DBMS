//contributer
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username1=$_POST['username1'];
        $passwor=$_POST['passwor'];
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
    if(isset($_POST['username1']) && isset($_POST['passwor'])){
        $hash = hash("sha256", $passwor);
        // echo $hash;
    $sql = "SELECT * FROM `customer` WHERE `Username` = '$username1' AND `Password` = '$hash';";
    $RESULT = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($RESULT);
if($num>0){
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username1'] = $username1;
    echo '<script>alert("Successfully Logged in")</script>';
    header("Location: afterlogin.php");
}else{
    echo '<script>alert("Invalid Credentials.")</script>';
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
    height: 520px;
    width: 400px;
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
            function func(){
                alert('Succsessfully logged in.');
            }
            function func1(){
                alert('Invalid Credentials.');
            }
        </script>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h3>Login Here</h3>

        <label for="username1">Username</label>
        <input type="text" name="username1" placeholder="Enter Username" id="username1" required>
        <label for="passwor">Password</label>
        <input type="password" name="passwor" placeholder="Enter Password" id="passwor" required>
        <a  style="color: #080710;" href="afterlogin.php" ><input type="submit" id='but1' value='Login'></a>
        <button id='but1'><a style="color: #080710; " href="newacc.php">Create New Account</a> </button>
    </form>
    
</body>
</html>
