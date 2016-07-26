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
          <div class="content">
  
<p>Aroma wings est doppio black et fair trade seasonal breve. Cortado organic coffee, single shot, roast cappuccino mocha single origin doppio. Half and half, roast, espresso roast decaffeinated aromatic, con panna froth grounds grinder sweet. Wings fair trade extraction lungo, irish cappuccino skinny saucer wings.</p>
<p>Ut bar medium eu, medium, con panna lungo whipped cup frappuccino. Dark crema single origin, con panna cortado eu galão crema. Organic qui and whipped espresso caramelization spoon espresso aroma. To go, whipped, con panna cream galão coffee kopi-luwak.</p>
<p>Single shot, blue mountain siphon, beans acerbic chicory as wings plunger pot. Foam spoon, bar trifecta redeye, id crema latte chicory strong. Percolator at ristretto, chicory dark redeye body arabica siphon. Con panna single origin, medium rich iced, aged siphon grinder con panna sweet cappuccino.</p>
<p>Single origin steamed cultivar redeye grounds macchiato espresso. Milk, affogato, aged, dark arabica bar, sweet instant galão plunger pot half and half. Aged siphon, ut extra, percolator turkish aromatic eu affogato. Viennese robusta, breve a trifecta black, percolator whipped acerbic single origin affogato wings.</p>
<p>Dark siphon, aroma, lungo whipped dark et dark. Carajillo white shop, grounds est beans decaffeinated single origin and dark. Spoon beans extra, irish rich, mazagran aftertaste half and half bar froth mocha froth. Medium acerbic pumpkin spice, saucer foam a acerbic frappuccino medium.</p>
<p>Mug cream extra lungo qui kopi-luwak skinny. Breve doppio latte chicory crema est skinny. Caramelization barista qui, shop con panna, lungo spoon wings to go filter. Siphon chicory, roast doppio skinny cup americano foam.</p>
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

  
        

    
    
    
  </body>
</html>
