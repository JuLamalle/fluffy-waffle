<?php 

//Modifie les entrees de l'utilisateur par securite
function validate($data){
    $data = trim($data);                    // Supprime les espaces (ou d'autres caracteres) en debut et fin de chaine 
    $data = stripslashes($data);            //Supprime les antislashs d'une chaine
    $data = htmlspecialchars($data);        //Convertit les caracteres speciaux en entites HTML
    return $data;
}


//Cree une connection a la bdd avec identifiants admin
$host="localhost";
$dbUser="admin";
$dbPassword="adnim";
$dbName="my_shop";
// $connection = new mysqli($host, $dbUser, $dbPassword, $dbName);      //Equivalent a la ligne en dessous
$connection = mysqli_connect($host, $dbUser, $dbPassword, $dbName);


if (!$connection) {
    echo "Connection failed";
}
?>

