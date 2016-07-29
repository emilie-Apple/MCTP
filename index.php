<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8" />
            <title>M.C.T.P</title>
            <meta name="description" content="MCTP site de maçonnerie" />
            <meta name="keywords" content="maçonnerie, matériaux, maçon, béton" />
            <meta property="og:url" content="http://codepen.io/hrtzt/details/NPZKRN" />
            <meta property="og:image" content="https://pbs.twimg.com/media/CCNJN_XUMAAJSzU.jpg:large" />
            <link rel="stylesheet" href="./assets/css/normalize.css" />
            <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css' />
            <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css' />
            <link rel="stylesheet" href="./assets/css/loading.css" type="text/css" />
            <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
            <link rel="stylesheet" type="text/css" href="./assets/css/accordeonP3.css" />
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
                                <!--<div class="xsResponsiveMenu">
                                    
                                    <input type="checkbox" id="menu-toggle" />
                                    <label id="trigger" for="menu-toggle"></label>
                                    <label id="burger" for="menu-toggle"></label>
                                    <ul id="xsResponsiveMenu-Content">
                                        <a class="xsResponsiveMenu-ContentLink" href="#"><img class="xsResponsiveMenu-ContentLogo" src="./assets/img/MctpLogo.png" alt="Logo de l'entreprise MCTP" /></a>
                                        <a class="xsResponsiveMenu-ContentLink" href="#t1">Accueil</a>
                                        <a class="xsResponsiveMenu-ContentLink" href="#t2">Qui sommes-nous ?</a>
                                        <a class="xsResponsiveMenu-ContentLink" href="#t3">Activité</a>
                                        <a class="xsResponsiveMenu-ContentLink" href="#t4">Réalisations</a>
                                        <a class="xsResponsiveMenu-ContentLink" href="#t5">Contact</a>
                                    </ul>
                                </div>-->

                                <div class="page" id="p1">
                                    <section class="accueil"><span class="title">M.C.T.P</span></section>  
                                </div>

                                <div class="page" id="p2">
                                    <?php include ('./includes/page2.php'); ?>
                                </div>
                                
                                <div class="page" id="p3">
                                    <?php include('./includes/page3.php'); ?>
                                </div>

                                <div class="page" id="p4">
                                    <section class="icon fa fa-camera-retro">
                                        <span class="title">Réalisations</span>
                                        <p class="hint"></p> 
                                    </section>
                                </div>  

                                <div class="page" id="p5">
                                    <section class="icon fa fa-plus-envelope">
                                        <div id="form-main">
                                            <div id="container"></div>
                                            <div id="template">
                                                <div class="flip-card" on-click="toggle('flipCard');">
                                                    <script>
                                                        {{ flipCard ? 'Renvoyer un mail' : 'Contactez-nous' }}
                                                    </script>
                                                </div>
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
                                            </div>
                                        </div>
                                    </section>
                                </div>
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
                <div class="footer-copyright grey darken-3">
                    <div class="container">
                        © 2016 Tous droits réservés
                    </div>
                </div>
            </footer>
        </body>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="./assets/js/prefixfree.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script type="text/javascript" src="./assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script src="./assets/js/loading.js" type="text/javascript"></script>
        <script src='./assets/js/modal.js' type="text/javascript"></script>
        <script>
            $('.xsResponsiveMenu-ContentLink').on('click', function() {
                $('#trigger').click();
            })
        </script>
    </html>