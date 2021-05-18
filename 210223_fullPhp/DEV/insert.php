<?php
//Entre les donnees recoltees par signup.php dans la bdd.
include('db_connect.php');  //Fichier pour separer nos identifiants phpmyadmin du reste du code.

//validate() dans "db_connect.php" (trim/stripslashes/htmlspecialchars)
$name = validate($_POST['name']);
$email = validate($_POST['email']);
$password = validate($_POST['password']);
$password_confirmation = validate($_POST['password_confirmation']);
$date = date("Y-m-d H:i:s");



if (!empty($name) and !empty($email) and !empty($password)) {

    if ($password==$password_confirmation) {
    
        //Connection created by db_connect.php
        //$connection = new mysqli($host, $dbUser, $dbPassword, $dbName);
    
        if (mysqli_connect_error()) {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }
        else {
            $SELECT = "SELECT email FROM users WHERE email = ? LIMIT 1";
            $INSERT = "INSERT INTO users (username, email, password, created_at) VALUES (?, ?, ?, ?)";

            //Password Hashing
            $hash=password_hash($password, PASSWORD_DEFAULT);

            //Prepare statement
            $stmt = $connection->prepare($SELECT);
            $stmt->bind_param("s",$email);              //Test de bind pour verifier si l email n existe pas deja dans la bdd
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;                    //Nombre de correspondances du mail dans la bdd
    
            if ($rnum==0) {
                $stmt->close();
    
                $stmt = $connection->prepare($INSERT);
                $stmt->bind_param("ssss", $name, $email, $hash, $date);
                $stmt->execute();
                header("Location: signin.php?success=Congratulations ! Your account has been successfully created !");
                exit();
            }
            else {
                header("Location: signup.php?error=This email already exists ! Feelsbadman");
                exit();
            }
            $stmt->close();
            $connection->close();
        }
    
    }
    else {
        header("Location: signup.php?error=Password Confirmation does not match");
        exit();
}
}
else {
    echo "All fields are required";
    die();
}
?>