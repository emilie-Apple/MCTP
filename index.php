<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>M.C.T.P</title>
  
    <meta name="description" content="MCTP site de maçonnerie">
    <meta name="keywords" content="maçonnerie, matériaux, maçon, béton">
    
    <meta property="og:image" content="https://pbs.twimg.com/media/CCNJN_XUMAAJSzU.jpg:large">
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/accordeonP3.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/prefixfree.min.js"></script>
    <script src="js/p2.min.js"></script>
    

    
  </head>

  <body>

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
          <div id="circle-shape-example">
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
  <p>

Entreprise M-C-T-P, est une entreprise de maçonnerie générale situé dans la région du Loiret à Nangeville (45330)

Vous avez un projet de construction, d'agrandissement ou de rénovation, nous sommes à votre écoute pour vous apporter la réponse la mieux adaptée et vous accompagner dans sa réalisation.

Un vaste savoir-faire en matière de maçonnerie traditionnelle et également en matière de maçonnerie plus moderne, ce qui nous permet de proposer une réponse adaptée à vos projets selon vos besoins et vos goûts.

Nos équipes de maçons interviennent pour différents types de projets : rénovation de constructions récentes mais aussi pour des bâtiments anciens, en pierre.

Nous réalisons les travaux de rénovation pour les particuliers et les professionnels.</p>
</div>
              </section>
          </div>  
          <div class="page" id="p3">
            <?php include('./includes/page3.php'); ?>
          </div>
          <div class="page" id="p4">
            <section class="icon fa fa-camera-retro">
              <span class="title">Réalisations</span>
              <p class="hint">
                
              </p>
              
            </section>
          </div> 
          <div class="page" id="p5">
            <section class="icon fa fa-plus-envelope">
              
                <div id="form-main">
  <div id="container"></div>
  <script id="template">
    <div class="flip-card" on-click="toggle('flipCard')">{{ flipCard ? 'Renvoyer un mail' : 'Contactez-nous' }}</div>
    <div class="contact-wrapper">
        <div class="envelope {{ flipCard ? 'active' : '' }}">
          <div class="back paper"></div>
          <div class="content">
            <div class="form-wrapper">
              <form>
                <div class="top-wrapper">
                  <div class="input">
                    <label>Nom</label>
                    <input type="text" name="name"/>
                  </div>
                  <div class="input">
                    <label>Téléphone</label>
                    <input type="text" name="phone"/>
                  </div>
                  <div class="input">
                    <label>Email</label>
                    <input type="text" name="_replyto"/>
                  </div>
                </div>
                <div class="bottom-wrapper">
                  <div class="input">
                    <label>Type de travaux</label>
                    <input type="text" name="_subject"/>
                  </div>
                  <div class="input">
                    <label>Message</label>
                    <textarea rows="5" name="message"></textarea>
                  </div>
                  <div class="submit">
                    <div class="submit-card" on-click="toggle('flipCard')">Envoyer</div>
                  </div>
                </div>
              </form>
              
            </div>

          </div>

          <div class="front paper"></div>
        </div>
      </div>
              </script>
            </section>
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="footer">
            <div class="container">
                © 2016 Tous droits réservés
            </div>
        </div>
</footer>
    

        <script src='http://cdn.ractivejs.org/latest/ractive.js'></script>
        <script src="js/index.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://demosthenes.info/assets/scripts/extras/shapes.js'></script>
  
        

    
    
    
  </body>
</html>
