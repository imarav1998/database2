<?php
    $host = 'localhost';
    $username ='root';
    $password ="password";
    $db ='aravind';
    $port = 3308;

    $con = new mysqli($host, $username, $password, $db, $port);
    if($con->connect_error){
        die("connection failed:".$con->connect_error);
    }
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $fname = $_POST['name'];
        $email = $_POST['email'];
        $check = $_POST['skill'];
        $age = $_POST['age'];
        $expi = $_POST['experience'];
        $check1 ="";
        for($x=0; $x<sizeof($check);$x++){
            $check1 = $check[$x].' '.$check1;
        }
        $sql = "INSERT INTO details VALUES('$email', '$fname','$check1', '$age', '$expi')";
        if($con->query($sql) !== TRUE){
            if($con->error == "Duplicate entry '$email' for key 'PRIMARY'"){
                echo "<div class='head' style='color:red'>duplicate entry</div>";
            }
        }
    }
    $con->close();
    if($_SERVER['REQUEST_METHOD']=='GET'){
        
    }
?>
