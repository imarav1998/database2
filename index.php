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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.min.js" type="text/javascript"></script>
</head>
<body>
    <div class="head">details</div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit = "return valid()" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <div>
            <label for="php">php</label><input type="checkbox" name = "skill[]" value="php">
            <label for="html">html</label><input type="checkbox" name="skill[]" value="html">
            <label for="js">js</label><input type="checkbox" name = "skill[]" value="js">
            <label for="css">css</label><input type="checkbox" name="skill[]" value="css">
        </div>
        <input type="number" name="age" placeholder="age">
        <input type="number" name="experience" placeholder="experience in years">
        <input type="submit">
    </form>
    <div class="log"><a href=""></a>login</a></div>
</body>
<script type="text/javascript" src="js/script.js"></script>
</html>
<?php
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
?>