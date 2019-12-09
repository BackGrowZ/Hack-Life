<!DOCTYPE html>
<html lang="fr">

  <head>
    <title>Anthony Carreta - Site professionnel</title>
    <?php require("Script/LoadScript/LoadScript.php"); ?>
  </head>
  
  <body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="navbar">
      <a class="navbar-brand" href="http://anthonycarreta.me"><i style="color: #ffbf00;">ANTHONY CARRETA</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../">Accueil<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../#first">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../#projet">Mes projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../#contact">Contact</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>-->
          </ul>
          <form action="recherche.php" method="POST" class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" name="recherche" type="search" placeholder="Rechercher" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
          </form>
      </div>
    </nav>
    <header>
      <?php require('Script/Carousel/carousel.php'); ?>
    </header>
    
    <section>
      <?php require('Script/Projets/projet.php'); ?>
    </section>

    <footer>
      <?php require("Script/Footer/footer.php"); ?>
    </footer>

  </body>

</html>