# C-DEV-113-LIL-1-1-integration-etienne.cadoux

PROJET INTEGRATION - ETIENNE CADOUX & KEVIN GRESSIER

1. STRUCTURE DU BODY :
- MENU BURGER RESPONSIVE = NAVBAR,
- CARROUSSEL/CARDS = CONTAINER-FLUID AVEC 2 LIGNES ET 4 COLUMNS, 1 SEARCHBAR (RESPONSIVE) ET 5 CARDS IMAGES + TEXT,
- FOOTER = POSITION:FIXED.

2. FONTS :
- ROBOTO

3. SEO : 
- BALISES ALT = OK
- TITLE (H1/H2/H3/H4) = KO

4. RESPONSIVE :
- FONCTIONNEL : SEARCH BAR / DESCRIPTION DES IMAGES / FORMS.
- SEMI-FONCTIONNEL : MENU BURGER / FILTRES / IMAGES DU CARROUSSEL.

5. LANGAGES :
- PHP,
- HTML,
- CSS,
- JS.

6. DESCRIPTIF :

Afin d'optimiser le référencement nous avons pris en compte l'intérêt des balises ALT, qui ont une grande utilité dans ce domaine.
Nous avons donc décidé de faire des descriptions concices des images, en pensant bien à employer des mots clés (ex : chaton assis amusant). 
Ces balises représentent un intérêt double : Premièrement, c'est ce qui permettra à quelqu'un ne pouvant visualiser l'image de s'en donner une idée, deuxièmement, ce sont ces mots clés, rentrés dans les descriptions, qui seront analysés pour le référencement Google, en ayant l'avantage qu'aucune vérification entre l'image et la description ne peut être faite.

L'en-tête du site est composée d'une navbar en position absolute, elle reste donc tout en haut de la page, et ne descend pas lorsqu'on scroll, dans laquelle se trouvent différents éléments :
Un menu déroulant qui s'active sur les petits écrans afin de le rendre responsive, l'affichage sur grand écran indique directement toutes les sous catégories du menu déroulant, sur la page principale, dedans se trouvent les éléments : Home, Shop, et Magazine sur la gauche, en caractères gras. L'icône vers le panier et le "LOGIN" se trouvent sur l'extrémité droite. 
Dessous se trouve une class container dans laquelle la barre de recherche a été placée, où le message "living room" apparaît d'office, et en dernière position, sur la même ligne, un menu déroulant de tris, proposant au visiteur de trier les produits selon son souhait.
D'un point de vue esthétique les principales modifications sur l'en-tête sont des couleurs de caractères et des ajouts de marges afin que les éléments prennent les dimensions voulues.

Concernant le corps de notre page, nous avons utilisé le système de Grid, on y trouve donc un container principal avec une row, puis les espaces à prendre sur la page sont définis sur la ligne "div class="col...", afin que ça soit responsive et conforme à ce qui est démandé dans l'énoncé nous avons indiqué une place de 12 lorsqu'on est sur un petit écran, sinon 3.

Ce corps est divisé en deux parties bien distinctes :
- La première partie concerne la zone de filtres "FILTER BY", on y trouve une liste de trois éléments déroulants, en dessous duquel se trouve la barre de recherche par prix. 
Sur un grand écran, on trouve cette zone à gauche de la première fiche produit, sur un petit écran il suffit de cliquer sur le bouton "filter" qui permettra d'afficher les différentes listes déroulantes.
- La deuxième partie concerne donc les fiches produits, qui sont divisées en cards, chaque card représente une fiche produit, elles sont toutes construites de la même manière.
En premier lieu sont définies les dimensions, ce qui permet d'avoir chaque carte strictement identique, et qui s'adaptera correctement à la taille de l'écran. De suite après vient l'image du produit à afficher, il suffit donc de mettre le chemin entier vers l'image à afficher afin de pouvoir la modifier.
Sous cette image de présentation sont définies deux colonnes afin que les éléments soient positionnés à gauche ou à droite, sur la gauche se trouve : Le nom du produit, la catégorie qui est écrite en gris, et la notation en étoiles, ce sont des icônes ajoutées. Sur la colonne de droite se trouve le prix et l'icône "ajouter au panier" qui a été rendue clicable. 
Certaines propriétés de style y ont aussi été rajoutées, on peut noter une marge sur le haut de chaque card afin de garder un espace entre chacune d'entre elles, la police qui a été modifiée (dans le cas présent Roboto et Avenir.

En fin de page se trouve le footer, stockée dans une div avec une position fixe sur le bas de page. Le thème du site est repris, le background est  bleu et les écritures blanches.
Chacun des éléments de la pagination est clicable.
