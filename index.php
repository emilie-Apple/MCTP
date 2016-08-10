<!DOCTYPE html>

<html >
  <head>
    <meta charset="UTF-8">
    <title>M.C.T.P</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <meta name="description" content="MCTP site de maçonnerie">
    <meta name="keywords" content="maçonnerie, matériaux, maçon, béton">
    <meta property="og:image" content="https://pbs.twimg.com/media/CCNJN_XUMAAJSzU.jpg:large">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css' />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/accordeonP3.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/realisations.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/page4/carousel.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="js/prefixfree.min.js"></script>  
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
             <section class="accueil"></section> 
          <div id="box1" class="box blurred-bg tinted">
  <div class="content">
      <h3><i class="fa fa-phone" aria-hidden="true">  06.34.18.31.90</i></h3>
      
  </div>
</div>
          </div>
          <div class="page" id="p2">
          <section class="icon fa fa-users"><span class="title">Qui sommes-nous ?</span>
          <div id="circle-shape-example">
            <img src="assets/img/logo.png" alt="logo" class="logo">
            <h4>Présentation</h4>
            <p>L'entreprise <strong>M-C-T-P </strong> situé dans la région du Loiret à Nangeville (45330) <br/>
                est une entreprise de maçonnerie générale créée en 2013 par Fabien TECHER.</p>
            <p>Avec l’aide de son associé Grégory et d’une équipe de 4 personnes, l’entreprise <br/>
                <strong>M-C-T-P </strong>met toutes ses compétences et son savoir faire à votre service .<br/>
                Des petits travaux de maçonnerie, réparations, rénovations complètes,<br/> 
                constructions de maisons neuves, nous réalisons tous vos travaux de maçonnerie <br/> 
                et de gros œuvre.</p>
            <p>Vous avez un projet de construction, d'agrandissement ou de rénovation,<br/> 
                nous sommes à votre écoute pour vous apporter la réponse la mieux adaptée <br/> 
                et vous accompagner dans sa réalisation.

          </div>
          </section>
          </div>  
          <div class="page" id="p3">
            <?php include('./includes/page3.php'); ?>
          </div>
          <div class="page" id="p4">
            <?php include('./includes/page4.php'); ?>
          </div> 
          <div class="page" id="p5">
            <section class="icon fa fa-plus-envelope">
              
                
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
</script>
                
      
            
          </section>
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<main>
  <div class="arrow animated bounce">
</main>

<footer>
<h1>Mentions légales  |  © 2016 Emilie Chartier & Thomas Merlin. All rights reserved.</h1>   
</footer>
    
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap/bootstrap.min.js"></script>
    <script src='http://cdn.ractivejs.org/latest/ractive.js'></script>
    <script src="./assets/js/index.js"></script>  
    <script src='./assets/js/modal.js' type="text/javascript"></script> 
    <script src="./assets/js/realisations.js" type="text/javascript"></script>
    <script src="./assets/js/carousel.js" type="text/javascript"></script>
    

    <script>
            $('.xsResponsiveMenu-ContentLink').on('click', function() {
                $('#trigger').click();
            })
        </script>

        </body>
    </html>

