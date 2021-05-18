<!DOCTYPE html>
<!-- Spécification du langage de la page et du sens de lecture -->
<html lang="fr" dir="ltr">

<head>

  <!-- Prise en charge des accents et autres caractères spéciaux -->
  <meta charset="utf-8" />
  <!-- (meta) Pour être responsive et éviter une mise à l'échelle automatique -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CDN de font awesome pour l'utilisation des fa-fa et des icones -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- CDN de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
  <!-- Lien avec la page CSS (toujours après Bootstrap pour éviter les bug) -->
  <link rel="stylesheet" href="style.css" />
  <!-- Lien éventuel pour l'utilisation d'une police -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Lien pour placer une icone dans l'onglet, avant le titre de la page -->
  <link rel="icon" href=".png">
  <!-- Titre de la page affiché dans l'onglet -->
  <title>Sign In</title>



</head>

<body>
  
<?php session_start(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 col-md-12" align="right">
    <form action="signup.php">
      <button type="submit" class="btn btn-primary" id="btn_nav_admin1">S'inscrire</button>
    </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
      <div class="col-sm-2 col-md-4">
       <br>
      </div>
      <div class="col-sm-6 col-md-4" align="center">
        <form action="checkid.php" method="POST"> 
            <?php if (isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>   <!--On recupere l'erreur envoyee dans l'url depuis checkid.php-->
            <?php }
            if (isset($_GET['success'])) {?>
                <p class="success"><?php echo $_GET['success']; ?></p>   <!--On recupere le succes envoyee dans l'url depuis insert.php-->
            <?php } ?>

            <h1>MINOULAND</h1>
            <p id='SI_TXT'>E-mail </p>
            <input type="email" name="email" placeholder="Email" required  id="set_input_1"/>
            <p id='SI_TXT'>Mot de passe </p>
            <input type="password" name="password" placeholder="Password" required id="set_input_1"/>
            <br>
            <input type="submit" name="SubmitButton" value="S'identifier" class="btn btn-primary" id="btn_nav_admin2">
            <br>
            <a id='SI_TXT' href="password_reset.php">Mot de passe oublié ?</a>

        </form>
      </div>
      <div class="col-sm-2 col-md-4">
        <br>
      </div>
  </div>        
</div>
<div class="footer">
    <div class="footer-content">
    </div><div class="footer-bottom">
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
  <script src=".js"></script>
  </body>

<html>