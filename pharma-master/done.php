
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pharma1";

    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        echo 'Not connected';
    }else{
        echo 'Connected Sucsessfully';
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $name = $_POST['Dname'];
        $mr=$_POST['Dmrp'];


    }
    echo $name;
    echo $mr;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        print_r($_POST);
        $name = $_POST['Dname'];
        $mr=$_POST['Dmrp'];

    }
?>
