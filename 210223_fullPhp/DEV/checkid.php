<?php 
session_start();
include ("db_connect.php");


if (isset($_POST['email']) && isset($_POST['password'])) {
    
    //validate() dans "db_connect.php" (trim/stripslashes/htmlspecialchars)
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)){
        header("Location: signin.php?error=Email is required"); //Envoi un message d'erreur dans l'url (que l'on va identifier dans signin.php pour afficher le message d'erreur)
    exit();
    }
    elseif (empty($password)){
        header("Location: signin.php?error=User Password is required");
        exit();
    
    }
    else {
        $sql = "SELECT * FROM users WHERE email='$email' ";   //On teste email et password en même temps pour la sécurité (ne pas donner trop d'indices sur ce qui ne va pas)
        $result = mysqli_query($connection, $sql);

        $sql2 = "SELECT password FROM users WHERE email='$email' ";
		$result2 = mysqli_query($connection, $sql2);


        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && password_verify($password, $row['password']) === true) {
                $_SESSION['username']=$row['username'];
                $_SESSION['id']=$row['id'];
                if ($row['admin'] == 1) {
                    $_SESSION['admin'] = $row['admin'];
                    header("Location: admin.php");
                    exit();
                }
                else {
                    $_SESSION['admin'] = null;
                    header("Location: index.php");
                    exit();
                }
            }
            else {
                header("Location: signin.php?error=Incorrect Email or Password");
                exit();
            }
        }
        else {
            header("Location: signin.php?error=Incorrect Email or Password");
            exit();
        }
    
    }

}
else { 
    header("Location: signin.php");
    exit();
}


?>