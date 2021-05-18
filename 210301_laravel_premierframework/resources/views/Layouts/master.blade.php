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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Lien avec la page CSS (toujours après Bootstrap pour éviter les bug) -->
    <link rel="stylesheet" href="/css/layout.css">
    <!-- Lien éventuel pour l'utilisation d'une police -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Lien pour placer une icone dans l'onglet, avant le titre de la page -->
    
    <!-- Titre de la page affiché dans l'onglet -->
    <title>@yield('title')</title>
</head>

<body>
{{-- header --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home"><span>Sushi</span>Land</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


{{-- header --}}
  <div class="content">
    @yield('contenu')
  </div>

<!-- footer -->

    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1><span>Sushi</span>Land</h1>
                <p>
                    <span>Sushi</span>Land is wonderful platform that allows anyone to post free ads.
                    Don't forget to eat sushis coz sushi is love, sushi is life.
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> &nbsp; +33612345678</span>
                    <span><i class="fas fa-envelope"></i> &nbsp; etienne.chagassedu59@epitech.eu</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <br>
                <ul>
                    <a href="#"><li>Favorites</li></a>
                    <a href="#"><li>Trendy</li></a>
                    <a href="#"><li>Team</li></a>
                    <a href="#"><li>Gallery</li></a>
                    <a href="#"><li>Terms and Conditions</li></a>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h2>Contact us</h2>
                <br>
                <form action="index.html" method="post">
                <!-- Penser a ajouter une classe aux 2 inputs pour css le text (harmoniser avec tous les text input du site) -->
                    <input type="email" name="contactemail" class="contact-input" placeholder="Your email adress..." required>
                    <textarea name="message" class="contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="contact-btn">
                        <i class="fas fa-envelope"></i>
                        Send
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; sushiland.fr | Designed by GrosSushiDu62
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
    <script src="/js/myscript.js"></script>

</body>

</html>
