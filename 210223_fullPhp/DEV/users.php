


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

    if (isset($_SESSION['id']) != null){
    
  ?>
      <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 col-md-10">
                <h1> BIENVENUE SUR VOTRE <br>ESPACE UTILISATEUR !</h1>
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
        <div class="col-sm-6 col-md-3">
          <br>
        </div>
          <div class="col-sm-6 col-md-6" align="Center">
            <h2>MODIFIEZ VOS INFORMATIONS</h2>';
            <div>
            
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">username</th>
                    <th scope="col">password</th>
                    <th scope="col" >email</th>

                    </tr>
                        </thead>
                      <tbody>

                      <form method="post">
                        <td>  <input type="text" name="USERNAME"  value="<?php echo $_SESSION['username'];?>" readonly="true"/>  </td> 
                        <td>  <input type="password" name="PASSWORD_M_U"/>  </td> 
                        <td>  <input type="text" name="EMAIL_M_2"/>  </td> 
                        
                        <td> <p><input type="submit" value="MODIFIER"></p> </td>
                      </form>
                    </tr>
                  </tbody> 
                </table>
                    
                    <?php
                  
                      if (isset($_SESSION['username']) AND isset($_POST["PASSWORD_M_U"]) AND isset($_POST["EMAIL_M_2"]))
                      { 
                        $host    = "localhost";
                        $user    = "admin";
                        $pass    = "adnim";
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


                        $username_M = $_SESSION['username'];
                        $PASSWORD_M_U = $_POST["PASSWORD_M_U"];
                        $EMAIL_M_2 = $_POST["EMAIL_M_2"];
                        
                        
                        $hash_M = password_hash($PASSWORD_M_U, PASSWORD_DEFAULT);


                        $sql1 = $connection->prepare("UPDATE `users` SET `email` = '$EMAIL_M_2', `password` = '$hash_M'  WHERE username = '$username_M'");
                        $result = $sql1->execute();
                        if ($result){
                          
                          echo '<br><p> La fiche de '.$username_M.' a bien été modifiée !';
                        }
                      }
                      
                    ?>
            </div>


          </div>
        <div class="col-sm-6 col-md-3">
          <br>
        </div>


            <!--edit_users -->
      <div class="container-fluid3">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <br>
          </div>
          <div class="col-sm-6 col-md-12" align="Center">
            <form method="POST">
                  <button type="submit" class="btn btn-primary" id="del_btn_1" name="destroy">SUPPRIMEZ VOTRE COMPTE (<?php echo $_SESSION['username'];?>)</button>
              </form>
                    
              <?php
          
                  if (isset($_POST['destroy']) AND isset($_SESSION['username'])) {
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

                    $prout = $_SESSION['username'];
                    $sql1 = $connection->prepare("INSERT INTO  `archives_users` SELECT * FROM `users` WHERE `username` = '$prout' ");
                    $result = $sql1->execute();
                    $sql2 = $connection->prepare("DELETE FROM `users` WHERE `username` = '$prout'");
                    $result1 = $sql2->execute();
                  if ($result){
                    
                    echo '<br><p> Votre fiche a bien été suprimée !';
                    session_destroy ();
                  } else { echo "prout";}
                }
                      
                    ?>
            </div>


          </div>
        <div class="col-sm-6 col-md-3">
          <br>
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