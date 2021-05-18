


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

  if ($_SESSION['id'] != null ){
  
?>
      <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 col-md-10">
                <h1> BIENVENUE SUR L'ESPACE <br> ADPOTION DE MINOULAND !</h1>
              </div>

              <div class="col-sm-12 col-md-2" align="center">
              <div style="display:flex">
              <?php if ($_SESSION['admin'] == 1 ){ ?>
                <form action="admin.php">
                  <button type="submit!" class="btn btn-primary" id="btn_nav_admin1" >Espace admin</button>
                </form>
              <?php } ?>
              <?php if ($_SESSION['admin'] == 0 ){ ?>
                <form action="users.php">
                  <button type="submit!" class="btn btn-primary" id="btn_nav_admin1" >Espace utilisateur</button>
                </form>
              <?php } ?>
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
              <div class="col-sm-6 col-md-12">
              <input  class="form-control" id="myInput" type="text" placeholder="Search..">
              </div>
            </div>
      </div> 



    <?php 

      $host    = "localhost";
      $user    = "admin";
      $pass    = "adnim";
      $db_name = "my_shop";
      $port = "utf8";

      //create connection
      $connection = mysqli_connect($host, $user, $pass, $db_name);

      function getHighlights($connection){

        $q = "SELECT * FROM products";
        $r = mysqli_query($connection, $q);
  
        echo '<div class"container-fluid2" >';
        while($page = mysqli_fetch_assoc($r)){
  
        echo '
          <div id="test1234">
            <div class="col-sm-3 col-md-3" style="margin-top: 40px; " align="center">
              <div class="card">
                <img src="IMAGES/'.$page['PHOTO'].'" class="card-img-top" alt="..." id="IMG_INDEX">
                  <div class="card-block" >
                    <div class="card-body col-sm-12" style="margin-top: 10px;" id="card_block">
                        <p class="card-title" id="card_text_0">'.$page['NOM'].'</p>
                        <p id="card_text_1">Sexe : '.$page['SEXE'].' | '.$page['AGE'].' ans</p>
                        <p id="card_text_1">'.$page['COULEUR_1'].'</p>
                        <p id="card_text_1">Caractère : '.$page['CARACTERE'].'</p>

                        </div>
                  </div>
              </div>
            </div>
          </div>
            ';}
      }
      //test if connection failed
      if(mysqli_connect_errno()){
          die("connection failed: "
              . mysqli_connect_error()
              . " (" . mysqli_connect_errno()
              . ")");
              
      } else {getHighlights($connection);}

      

    
    ?>

    <script>
        $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#test1234 div").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                    });
                    });
    </script>

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