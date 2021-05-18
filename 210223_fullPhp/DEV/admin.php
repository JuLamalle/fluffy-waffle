

<!DOCTYPE html>
<html lang="fr" dir='ltr'>
  <head>
    <!-- Prise en charge des accents et autres caractères spéciaux -->
    <meta charset="utf-8" />
    <!-- (meta) Pour être responsive et éviter une mise à l'échelle automatique -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CDN de font awesome pour l'utilisation des fa-fa et des icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CDN de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Lien avec la page CSS (toujours après Bootstrap pour éviter les bug) -->
    <link rel="stylesheet" href="minouland.css">
    <!-- Lien éventuel pour l'utilisation d'une police -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Lien pour placer une icone dans l'onglet, avant le titre de la page -->
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABILAAASCwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAOwAAADdAAAAxQAAAPYAAABfAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADYAAAD+AAAA/wAAAP8AAAD/AAAAcQAAAAAAAABEAAAAjQAAAE8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcAAADMAAAA/wAAAP8AAAD/AAAA/wAAAOwAAACfAAAA/gAAAOUAAAD+AAAASwAAAAAAAAAAAAAAAAAAAAAAAABhAAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA9QAAAHIAAAADAAAA0AAAAKIAAAAAAAAAAAAAAAAAAAAAAAAAkgAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAM0AAAAAAAAAAAAAAJMAAACUAAAAAAAAAAAAAAAPAAAABgAAAHQAAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAACwAAAAAQAAABUAAAABAAAAAQAAAAAAAAAAAAAAKQAAAFkAAACrAAAA/wAAAP8HBgX/Dw4O/wAAAP8AAAD/AAAA0QAAAF4AAAA7AAAAAAAAAAAAAAAAAAAAAAAAABMAAAB1AAAA/xwoKv8fLC//FBMT/yUkI/8RGRr/Kjo+/wAAAP8AAAClAAAAHgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAs4a8yv//////8////1t/iP8aJCb////////////S////AAAA7QAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAM+h4vH//////3alsf8SGRv/AAAA/2+cp//1////5f///wAAAP8AAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACoAAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAADkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAeQAAAP8AAAD/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/AAAAtQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHmCh87/AAAA/wAAAP8AAAD/AAAA/wAAAP8AAAD/Wl6P/zk7WrQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB5tb3//wAAAP8AAAD7AAAA0gAAANYAAADvAAAA/4iN1/8+QGK0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAeTU3VP8AAADgAAAAPAAAAAAAAAAAAAAAHgAAAMITEx7/LC1GtAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGwAAACuAAAAEgAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAgwAAAKQAAAAAAAAAAAAAAAAAAAAA8D8AAPABAADgAQAA4AEAAOAZAACAAQAAgAMAAIADAADABwAAwAcAAMAHAADADwAAwA8AAMAPAADDDwAAx48AAA==" rel="icon" type="image/x-icon">
    <!-- Titre de la page affiché dans l'onglet -->
    <title>Minouland</title>

  </head>

  <style>
  </style>

  <body>
  <?php
  
    session_start();

    if (isset($_SESSION['admin'])){
    
  ?>
      <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 col-md-10">
                <h1> BIENVENUE SUR L'ESPACE <br>ADMIN DE MINOULAND !</h1>
              </div>

              <div class="col-sm-6 col-md-2" align="center">
              <div style="display:flex">
              <form action="index.php">
                  <button type="submit" class="btn btn-primary" id="btn_nav_admin1" >Espace adoption</button>
              </form>
                <form action="logout.php">
                  <button type="submit" class="btn btn-primary" id="btn_nav_admin1">Logout</button>
                </form>
                </div>
              </div>
            </div>
      </div>

      <br>
      <br>
      <br>


      <div class="container-fluid2">
        <div class="row">
          <div class="col-sm-6 col-md-2" align="left">
            <button type="button" onclick="toggle_chats()" class="btn btn-primary" id="btn_nav_admin2" action="toggle"> MENU CHATS</button>
                <div id=toggle_chats>
                  <p><br>Afficher</p>
                    <button type="button" onclick="display_table_chats()" class="btn btn-light" id="btn_nav_admin3">Voir tous les chats</button>
                  <p><br>Editer</p>
                    <button type="button" onclick="add_chats()" class="btn btn-light" id="btn_nav_admin3">Ajouter un chat</button>
                    <button type="button" onclick="edit_chats()" class="btn btn-light" id="btn_nav_admin3">Editer la fiche d'un chat</button>
                    <button type="button" onclick="delete_chats()" class="btn btn-light" id="btn_nav_admin3">Supprimer la fiche d'un chat</button>
                </div>


            <p><br></p>
            
            <button type="button" onclick="toggle_users()" class="btn btn-primary" id="btn_nav_admin2">MENU UTILISATEURS</button>
            <div id=toggle_users>
              <p><br>Afficher</p>
                  <button type="button" onclick="display_table_users()" class="btn btn-light" id="btn_nav_admin3">Voir tous les utilisateurs</button>
              <p><br>Editer</p>
                  <button type="button" onclick="add_users()" class="btn btn-light" id="btn_nav_admin3">Ajouter un utilisateur</button>
                  <button type="button" onclick="edit_users()" class="btn btn-light" id="btn_nav_admin3">Editer la fiche d'un utilisateur</button>
                  <button type="button" onclick="delete_users()" class="btn btn-light" id="btn_nav_admin3">Supprimer la fiche d'un utilisateur</button>
            </div>
            
            


          </div>

          <div class="col-sm-6 col-md-9">

            <!--table_chats -->
            <div  id="table_chats">          
              <?php

               
                $host    = "localhost";
                $user    = "minou";
                $pass    = "yfg7ehsc";
                $db_name = "my_shop";
                $port = "utf8";

                //create connection
                $connection = mysqli_connect($host, $user, $pass, $db_name);

                //test if connection failed
                if(mysqli_connect_errno()){
                    die("connection failed: "
                        . mysqli_connect_error()
                        . " (" . mysqli_connect_errno()
                        . ")");
                }

                //get results from database
                $result_table_chats = mysqli_query($connection,"SELECT * FROM products");
                $all_property = array();  //declare an array for saving property
                echo '<h2> LISTE DES CHATS</h2>';
                //showing property
                echo '<table class="table table-sm">
                      <thead>
                        <tr>';  //initialize table tag
                while ($property = mysqli_fetch_field($result_table_chats)) {
                    echo '<th scope="col">' . $property->name . '</th>';  //get field name for header
                    array_push($all_property, $property->name);  //save those to array
                }
                echo '</tr>
                </thead>
                <tbody>'; //end tr tag
                
                //showing all data
                while ($row = mysqli_fetch_array($result_table_chats)) {
                    echo "<tr>";
                    foreach ($all_property as $item) {
                      echo '<td scope="row">' . $row[$item] . '</td>'; //get items using property value
                    }
                    echo '</tr>';
                }
                echo "</tbody> 
                </table>";
              ?>

            </div>

            <!--table_users -->
            <div  id="table_users">
              <?php
                $host    = "localhost";
                $user    = "minou";
                $pass    = "yfg7ehsc";
                $db_name = "my_shop";
                $port = "utf8";

                //create connection
                $connection = mysqli_connect($host, $user, $pass, $db_name);

                //test if connection failed
                if(mysqli_connect_errno()){
                    die("connection failed: "
                        . mysqli_connect_error()
                        . " (" . mysqli_connect_errno()
                        . ")");
                }

                //get results from database
                $result_table_users = mysqli_query($connection,"SELECT * FROM users");
                $all_property = array();  //declare an array for saving property
                echo '<h2> LISTE DES UTILISATEURS</h2>';
                //showing property
                echo '<table class="table table-sm">
                      <thead>
                        <tr>';  //initialize table tag
                while ($property = mysqli_fetch_field($result_table_users)) {
                    echo '<th scope="col">' . $property->name . '</th>';  //get field name for header
                    array_push($all_property, $property->name);  //save those to array
                }
                echo '</tr>
                </thead>
                <tbody>'; //end tr tag
                
                //showing all data
                while ($row = mysqli_fetch_array($result_table_users)) {
                    echo "<tr>";
                    foreach ($all_property as $item) {
                        echo '<td scope="row">' . $row[$item] . '</td>'; //get items using property value
                    }
                    echo '</tr>';
                }
                echo "</tbody> 
                </table>";
              ?>
            </div>

            <!--add chats -->
            <div  id="add_chats">
              <?php
                $host    = "localhost";
                $user    = "minou";
                $pass    = "yfg7ehsc";
                $db_name = "my_shop";
                $port = "utf8";

                //create connection
                $connection = mysqli_connect($host, $user, $pass, $db_name);

                //test if connection failed
                if(mysqli_connect_errno()){
                    die("connection failed: "
                        . mysqli_connect_error()
                        . " (" . mysqli_connect_errno()
                        . ")");
                }

                //get results from database
                $result_add_chats = mysqli_query($connection,"SELECT * FROM products");
                $all_property = array();  //declare an array for saving property
                echo '<h2> AJOUTER UN CHAT</h2>';

                //showing property
                echo '<table class="table table-sm">
                      <thead>
                        <tr>';  //initialize table tag
                while ($property = mysqli_fetch_field($result_add_chats)) {
                    echo '<th scope="col">' . $property->name . '</th>';  //get field name for header
                    array_push($all_property, $property->name);  //save those to array
                }
                echo '</tr>
                </thead>
                <tbody>'
                ?>
                  <tr>
                    <th scope="row"> // </th> 
                      <form method="post">
                          <td> <input type="text" name="NOM"/>  </td> 
                          <td> <input type="text" name="AGE"/>  </td> 
                          <td> <select name="SEXE">
                              <option value="M">M</option>
                              <option value="F">F</option>
                              </select>
                          </td>  
                          <td>  <select name="CARACTERE">
                                  <option value="Calin(e)">Calin(e)</option>
                                  <option value="Solitaire">Solitaire</option>   
                                  <option value="Grognon">Grognon</option>
                                  <option value="Peureux(se)">Peureux(se)</option>   
                                  <option value="Timide">Timide</option>   
                                  <option value="Bavard">Bavard</option>   
                                  <option value="Joueur">Joueur</option> 
                                  <option value="Chasseur">Chasseur</option>
                                  </select>

                          </td> 
                          <td>  <select name="COULEUR_1">
                                  <option value="Noir">Noir</option>
                                  <option value="bleu">bleu</option>   
                                  <option value="Chocolat">Chocolat</option>
                                  <option value="Lilas">Lilas</option>   
                                  <option value="Cannelle">Cannelle</option>   
                                  <option value="Fauve">Fauve</option>   
                                  <option value="Roux">Roux</option> 
                                  <option value="Crème">Crème</option>
                                  <option value="Blanc">Blanc</option>
                                  </select>

                          </td> 
                          <td> <input type="text" name="PHOTO"/>  </td>
                        <td> <p><input type="submit" value="AJOUTER"></p> </td>
                      </form>
                    </tr>
                  </tbody> 
                </table>
              
                  <?php
                    // Vérfier que le formulaire a bien été rempli pour accéder aux erreurs / actions
                    if (isset($_POST["NOM"]) AND isset($_POST["AGE"]) AND isset($_POST["SEXE"]) AND isset($_POST["CARACTERE"]) AND isset($_POST["COULEUR_1"]) AND isset($_POST["PHOTO"]))
                    { 
                      $NOM = $_POST["NOM"];
                      $AGE = $_POST["AGE"];
                      $SEXE = $_POST["SEXE"];
                      $CARACTERE = $_POST["CARACTERE"];
                      $COULEUR_1 = $_POST["COULEUR_1"];
                      $PHOTO = $_POST["PHOTO"];

                      $sql1 = $connection->prepare("INSERT INTO products (NOM, AGE, SEXE, CARACTERE, COULEUR_1, PHOTO) VALUES ('$NOM', '$AGE', '$SEXE', '$CARACTERE', '$COULEUR_1', '$PHOTO')");
                      $sql1->execute();           
                        }
              ?>
            </div>

            <!--add users -->
            <div  id="add_users">
              <?php
                $host    = "localhost";
                $user    = "minou";
                $pass    = "yfg7ehsc";
                $db_name = "my_shop";
                $port = "utf8";

                //create connection
                $connection = mysqli_connect($host, $user, $pass, $db_name);

                //test if connection failed
                if(mysqli_connect_errno()){
                    die("connection failed: "
                        . mysqli_connect_error()
                        . " (" . mysqli_connect_errno()
                        . ")");
                }

                //get results from database
                $result_add_users = mysqli_query($connection,"SELECT * FROM users");
                $all_property = array();  //declare an array for saving property
                echo '<h2>AJOUTER UN UTILISATEUR</h2>';

                //showing property

                echo '<table class="table table-sm">
                      <thead>
                        <tr>';  //initialize table tag
                while ($property = mysqli_fetch_field($result_add_users)) {
                    echo '<th scope="col">' . $property->name . '</th>';  //get field name for header
                    array_push($all_property, $property->name);  //save those to array
                }
                echo '</tr>
                </thead>
                <tbody>'
                ?>
                  <tr>
                    <th scope="row"> // </th> 
                      <form method="post">
                        <td>  <input type="text" name="USERNAME"/>  </td> 
                        <td>  <input type="password" name="PASSWORD"/>  </td> 
                        <td>  <input type="text" name="EMAIL"/>  </td> 
                        <td>  <select name="ADMIN">
                                <option value="1">Oui</option>
                                <option value="0">Non</option>
                              </select></td>
                        <td> <input type="text" name="CREATED_AT" value="<?php echo date('Y-m-d H:i:s');?>" readonly="true"> </td> 
                        
                        <td> <p><input type="submit" value="AJOUTER"></p> </td>
                      </form>
                    </tr>
                  </tbody> 
                </table>
              
                  <?php
                    if (isset($_POST["USERNAME"]) AND isset($_POST["PASSWORD"]) AND isset($_POST["EMAIL"]) AND isset($_POST["ADMIN"]) AND isset($_POST["CREATED_AT"]))
                    { 
                      $USERNAME = $_POST["USERNAME"];
                      $password = $_POST["PASSWORD"];
                      $EMAIL = $_POST["EMAIL"];
                      $ADMIN = $_POST["ADMIN"];
                      $CREATED_AT = $_POST["CREATED_AT"];
                      
                      $hash=password_hash($password, PASSWORD_DEFAULT);

                      $sql1 = $connection->prepare("INSERT INTO users (username, password, email, admin, created_at) VALUES ('$USERNAME', '$hash', '$EMAIL', '$ADMIN', '$CREATED_AT')");
                      $sql1->execute();
                      

                        }
              ?> 
            </div>

            <!--edit_chats -->
            <div id="edit_chats">
              <?php
              

                $result5 = mysqli_query($connection,"SELECT ID, NOM FROM products");

                echo "<h2>EDITER LA FICHE D'UN CHAT</h2>";

                echo'<form method="POST">
                <select type="button" class="btn btn-light" id="edit_btn_1" name="SEL_CHATS_EDIT" >';

                if ($result5){
                      while ($row = $result5->fetch_row()) {
                        echo '<option value='.$row[1].'> id('.$row[0].') - '.$row[1].'</option>';
                    }
                                  }

                echo '</select>
                <input class="btn btn-light" type="submit" value="SELECTIONNER" id="edit_btn_1">
                </form>';

                if (isset($_POST["SEL_CHATS_EDIT"])) {
                  global $name;
                  $name = $_POST["SEL_CHATS_EDIT"];

                  $result_edit_chats2 = mysqli_query($connection,"SELECT * FROM products WHERE NOM = '$name'");
                  $all_property = array(); 
                  

                  echo '<table class="table table-sm">
                        <thead>
                          <tr>';  //initialize table tag
                  while ($property = mysqli_fetch_field($result_edit_chats2)) {
                      echo '<th scope="col">' . $property->name . '</th>';  //get field name for header
                      array_push($all_property, $property->name);  //save those to array
                  }
                  echo '</tr>
                  </thead>
                  <tbody>';
                  
                  while ($row = mysqli_fetch_array($result_edit_chats2)) {
                    echo "<tr>";
                    foreach ($all_property as $item) {
                        echo '<th scope="row">' . $row[$item] . '</td>'; //get items using property value
                    }
                    echo '</tr>';
                    }   
                
                
                ?>

                <tr>
                  <th scope="row">
                      <?php 
                        $result_id_chat = mysqli_query($connection,"SELECT * FROM products WHERE NOM = '$name'");
        
                        if ($result_id_chat){
                              while ($row = $result_id_chat->fetch_row()) {
                                $id_petit_chat = $row[0];
                                echo $id_petit_chat;}}?>
                    </th> 
                  <form method="POST">
                    <td>  <input type="text" name="NOM_M" value="<?php echo $_POST["SEL_CHATS_EDIT"];?>" readonly="true"></input>
                     </td> 
                    <td>  <input type="text" name="AGE_M"></td> 
                    <td>  <select name="SEXE_M">
                            <option value="M">M</option>
                            <option value="F">F</option>
                          </select>
                    </td>  
                    <td>  <select name="CARACTERE_M">
                            <option value="Calin(e)">Calin(e)</option>
                            <option value="Solitaire">Solitaire</option>   
                            <option value="Grognon">Grognon</option>
                            <option value="Peureux(se)">Peureux(se)</option>   
                            <option value="Timide">Timide</option>   
                            <option value="Bavard">Bavard</option>   
                            <option value="Joueur">Joueur</option> 
                            <option value="Chasseur">Chasseur</option>
                            </select>

                    </td> 
                    <td>  <select name="COULEUR_1_M">
                            <option value="Noir">Noir</option>
                            <option value="bleu">bleu</option>   
                            <option value="Chocolat">Chocolat</option>
                            <option value="Lilas">Lilas</option>   
                            <option value="Cannelle">Cannelle</option>   
                            <option value="Fauve">Fauve</option>   
                            <option value="Roux">Roux</option> 
                            <option value="Crème">Crème</option>
                            <option value="Blanc">Blanc</option>
                            </selenonect>

                    </td> 
                    <td>  <input type="text" name="PHOTO_M"></td> 

                    <td> <p><input class="btn btn-light" id="edit_btn_1"  type="submit" value="MODIFIER"></p> </td>
                  </form>
                </tr>
                </tbody> 
                </table>
                  
                  <?php
                }
                    if (isset($_POST["NOM_M"]) AND isset($_POST["AGE_M"]) AND isset($_POST["SEXE_M"]) AND isset($_POST["CARACTERE_M"]) AND isset($_POST["COULEUR_1_M"]) AND isset($_POST["PHOTO_M"]))
                    { 
                      $NOM_M = $_POST["NOM_M"];
                      $AGE_M = $_POST["AGE_M"];
                      $SEXE_M = $_POST["SEXE_M"];
                      $CARACTERE_M = $_POST["CARACTERE_M"];
                      $COULEUR_1_M = $_POST["COULEUR_1_M"];
                      $PHOTO_M = $_POST["PHOTO_M"];
                      
                      $sql1 = $connection->prepare("UPDATE `products` SET `AGE` = '$AGE_M', `SEXE` = '$SEXE_M', `CARACTERE` = '$CARACTERE_M', `COULEUR_1` = '$COULEUR_1_M', `PHOTO` = '$PHOTO_M' WHERE NOM = '$NOM_M'");
                      $result = $sql1->execute();
                      if ($result){
                        
                        echo '<br><p> La fiche de '.$NOM_M.' a bien été modifiée !';
                      }
                    }
                    
                  ?>
            </div>

            <!--edit_users -->
            <div id="edit_users">
              <?php
              

                $result5 = mysqli_query($connection,"SELECT ID, username FROM users");

                echo "<h2>EDITER LA FICHE D'UN UTILISATEUR</h2>";

                echo'<form method="POST">
                <select type="button" class="btn btn-light" name="SEL_USERS_EDIT" id="edit_btn_1">';

                if ($result5){
                      while ($row = $result5->fetch_row()) {
                        echo '<option value='.$row[1].'> id('.$row[0].') - '.$row[1].'</option>';
                    }
                                  }
                         
                echo '</select>
                <input class="btn btn-light" type="submit" value="SELECTIONNER" id="edit_btn_1">
                </form>';

                if (isset($_POST["SEL_USERS_EDIT"])) {
                  global $name;
                  $name = $_POST["SEL_USERS_EDIT"];

                  $result_edit_users2 = mysqli_query($connection,"SELECT * FROM users WHERE username = '$name'");
                  $all_property = array();     
                  
                  echo '<table class="table table-sm">
                        <thead>
                          <tr>';  //initialize table tag
                  while ($property = mysqli_fetch_field($result_edit_users2)) {
                      echo '<th scope="col">' . $property->name . '</th>';  //get field name for header
                      array_push($all_property, $property->name);  //save those to array
                  }
                  echo '</tr>
                  </thead>
                  <tbody>';
                  
                  while ($row = mysqli_fetch_array($result_edit_users2)) {
                    echo "<tr>";
                    foreach ($all_property as $item) {
                        echo '<th scope="row">' . $row[$item] . '</td>'; //get items using property value
                    }
                    echo '</tr>';
                    }   
                
                
                ?>

                <tr>
                  <th scope="row">
                      <?php 
                        $result_id_user = mysqli_query($connection,"SELECT * FROM users WHERE username = '$name'");
        
                        if ($result_id_user){
                              while ($row = $result_id_user->fetch_row()) {
                                $id_petit_user = $row[0];
                                echo $id_petit_user;}}?>
                    </th> 
                  <form method="POST">
                    <td>  <input type="text" name="username_M" value="<?php echo $_POST["SEL_USERS_EDIT"];?>" readonly="true"></input>
                     </td> 
                    <td>  <input type="text" name="password_M"></td> 
                    <td>  <input type="text" name="email_M"></td> 
                    <td>  <select name="admin_M">
                            <option value="1">Oui</option>        
                            <option value="0">Non</option>
                            </select>

                    </td> 
                    <td> <p><input class="btn btn-primary" id="edit_btn_1" type="submit" value="MODIFIER"></p> </td>
                  </form>
                </tr>
                </tbody> 
                </table>
                  
                  <?php
                }
                    if (isset($_POST["username_M"]) AND isset($_POST["password_M"]) AND isset($_POST["email_M"]) AND isset($_POST["admin_M"]))
                    { 
                      $username_M = $_POST["username_M"];
                      $password_M = $_POST["password_M"];
                      $email_M = $_POST["email_M"];
                      $admin_M = $_POST["admin_M"];
                      
                      
                      $hash_M = password_hash($password_M, PASSWORD_DEFAULT);


                      $sql1 = $connection->prepare("UPDATE `users` SET `password` = '$hash_M', `email` = '$email_M', `admin` = '$admin_M' WHERE username = '$username_M'");
                      $result = $sql1->execute();
                      if ($result){
                        
                        echo '<br><p> La fiche de '.$username_M.' a bien été modifiée !';
                      }
                    }
                    
                  ?>
            </div>
          
            <!--delete chats -->
            <div id="delete_chats">
              <?php


                $result5 = mysqli_query($connection,"SELECT ID, NOM FROM products");

                echo "<h2>SUPPRIMER LA FICHE D'UN CHAT</h2>";

                echo'<form method="POST">
                <select type="button" class="btn btn-light" id="edit_btn_1" name="SELECTION_CHATS" >';

                if ($result5){
                      while ($row = $result5->fetch_row()) {
                        echo '<option value='.$row[1].'> id('.$row[0].') - '.$row[1].'</option>';
                      }
                    
                                  }
                         
                echo '</select>
                <input class="btn btn-primary" type="submit" value="SELECTIONNER" id="edit_btn_1">
                </form>';

                if (isset($_POST["SELECTION_CHATS"])) {
                  global $name2;
                  $name2 = $_POST["SELECTION_CHATS"];
                  $result_edit_chats2 = mysqli_query($connection,"SELECT * FROM products WHERE NOM = '$name2'");
                  $all_property = array();              
                  echo '<table class="table table-sm">
                        <thead>
                          <tr>';  //initialize table tag
                  while ($property = mysqli_fetch_field($result_edit_chats2)) {
                      echo '<th scope="col">' . $property->name . '</th>';  //get field name for header
                      array_push($all_property, $property->name);  //save those to array
                  }
                  echo '</tr>
                  </thead>
                  <tbody>';
                  
                  while ($row = mysqli_fetch_array($result_edit_chats2)) {
                    echo "<tr>";
                    foreach ($all_property as $item) {
                        echo '<th scope="row">' . $row[$item] . '</td>'; //get items using property value
                    }}

                    echo '<th scope="row">' . '<form method="POST"> <input type="submit" name="btnDelete" id="del_btn_1" value="Supprimer '.$name2.' ?" /> </form>' . '</td>';
                    echo '</tr>';
                       
                  }

                  if (isset($_POST['btnDelete'])) {
                    $name2 = str_replace("Supprimer ","",$_POST['btnDelete']);
                    $name3 = str_replace(" ?","",$name2);

                    $sql1 = $connection->prepare("INSERT INTO  `archives_products` SELECT * FROM `products` WHERE NOM = '$name3'");
                    $result = $sql1->execute();
                    $sql2 = $connection->prepare("DELETE FROM `products` WHERE NOM = '$name3'");
                    $result1 = $sql2->execute();
                    if ($result AND $result1){
                      echo '<br><p> La fiche de '.$name3.' a bien été suprimée !';
                    }
                    else{ echo "prout";}
                  }

                    
                  ?>
            </div>
            <!--delete users -->
            <div id="delete_users">
              <?php

                $result5 = mysqli_query($connection,"SELECT ID, username FROM users");
                echo "<h2>SUPPRIMER LA FICHE D'UN UTILISATEUR</h2>";
                echo'<form method="POST">
                <select type="submit" class="btn btn-light" id="edit_btn_1" name="SELECTION_USERS" >';

                if ($result5){
                      while ($row = $result5->fetch_row()) {
                        echo '<option value='.$row[1].'> id('.$row[0].') - '.$row[1].'</option>';
                      }
                    
                                  }
                         
                echo '</select>
                <input class="btn btn-primary" type="submit" value="SELECTIONNER" id="edit_btn_1">
                </form>'
                ;
                

                if (isset($_POST["SELECTION_USERS"])) {
                  global $name2;
                  $name2 = $_POST["SELECTION_USERS"];
                  $result_edit_users3 = mysqli_query($connection,"SELECT * FROM users WHERE username = '$name2'");
                  $all_property = array();              
                  echo '<table class="table table-sm">
                        <thead>
                          <tr>';  //initialize table tag
                  while ($property = mysqli_fetch_field($result_edit_users3)) {
                      echo '<th scope="col">' . $property->name . '</th>';  //get field name for header
                      array_push($all_property, $property->name);  //save those to array
                  }
                  echo '</tr>
                  </thead>
                  <tbody>';
                  
                  while ($row = mysqli_fetch_array($result_edit_users3)) {
                    echo "<tr>";
                    foreach ($all_property as $item) {
                        echo '<th scope="row">' . $row[$item] . '</td>'; //get items using property value
                    }}

                    echo '<th scope="row">' . '<form method="POST"> <input type="submit" name="btnDelete" id="del_btn_1" value="Supprimer '.$name2.' ?" /> </form>' . '</td>';
                    echo '</tr>';
              

                  }

                  if (isset($_POST['btnDelete'])) {
                    $name2 = str_replace("Supprimer ","",$_POST['btnDelete']);
                    $name3 = str_replace(" ?","",$name2);

                    $sql1 = $connection->prepare("INSERT INTO  `archives_users` SELECT * FROM `users` WHERE username = '$name3'");
                    $result = $sql1->execute();
                    $sql2 = $connection->prepare("DELETE FROM `users` WHERE username = '$name3'");
                    $result1 = $sql2->execute();
                    if ($result AND $result1){
                      echo '<br><p> La fiche de '.$name3.' a bien été suprimée !';
                    }
                    else{ echo "prout";}
                  }

                    
                  ?>
            </div>

          <!-- ne pas toucher les 3 div ci dessous -->
          </div>
        </div>
      </div>

  


    <?php } else { header("location: signin.php?error=Veuillez vous connecter") ;}?>

<div class="footer">
  <div class="footer-content">
    </div>
    <div class="footer-bottom">
        &copy; minouland.fr | Designed by GagaDesChats59
    </div>
</div>

    <!-- CDN JavaScript toujours à la fin du body pour éviter les bug -->
      <!-- D'abord le CDN de JQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <!-- Puis le CDN du Popper.js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <!-- Et enfin le CDN de Bootstrap.js -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <!-- Sweet alert 2 -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
      <!-- Lien avec la page JS (toujours après les CDN de JQuery/AngularJs) -->
      <script src="myscript.js"></script>

  </body>
</html>