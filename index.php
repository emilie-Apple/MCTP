<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>M.C.T.P</title>
  
    <meta name="description" content="MCTP site de maçonnerie">
    <meta name="keywords" content="maçonnerie, matériaux, maçon, béton">
    <meta property="og:url" content="http://codepen.io/hrtzt/details/NPZKRN">
    <meta property="og:image" content="https://pbs.twimg.com/media/CCNJN_XUMAAJSzU.jpg:large" />
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
    <link rel="stylesheet" href="./assets/css/loading.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/accordeonP3.css" />
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./assets/js/prefixfree.min.js"></script>

    
  </head>

  <body>
        <!-- Ecran de chargement -->
        <div class="loading1">
            <div class="loading2"></div>
        </div>
   
    </div>
      <!-- -->

    <div class="ct" id="t1">
  <div class="ct" id="t2">
    <div class="ct" id="t3">
      <div class="ct" id="t4">
         <div class="ct" id="t5">
          <ul id="menu">
            <a href="#t1"><li class="icon fa fa-home" id="uno"> Accueil</li></a>
            <a href="#t2"><li class="icon fa fa-users" id="dos"> Qui sommes-nous ?</li></a>
            <a href="#t3"><li class="icon fa fa-building" id="tres"> Activité</li></a>
            <a href="#t4"><li class="icon fa fa-camera-retro" id="cuatro"> Réalisations</li></a>
            <a href="#t5"><li class="icon fa fa-envelope" id="cinco"> Contact</li></a>
          </ul>
          <div class="page" id="p1">
             <section class="accueil"><span class="title">M.C.T.P</span></section>  
          </div>
          <div class="page" id="p2">
            <section class="icon fa fa-users"><span class="title">Qui sommes-nous ?</span>
          


            </section>
          </div>  
          <div class="page" id="p3">
            <?php include('./includes/page3.php'); ?>
          </div>
          <div class="page" id="p4">
              ppo
          </div> 
          <div class="page" id="p5">
            <section class="icon fa fa-plus-envelope">
              <span class="title">Contactez-nous</span>
                <div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" method="post" action="traitement.php">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Commentaire"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="Envoyer" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
              
            </section>
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="footer-copyright grey darken-3">
            <div class="container">
                © 2016 Tous droits réservés
            </div>
        </div>
</footer>
  </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="./assets/js/loading.js" type="text/javascript"></script>
    <script src='./assets/js/modal.js' type="text/javascript"></script>
    <script>
       
    </script>
</html>
