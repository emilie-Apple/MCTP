<form id="contact" method="post" action="traitement_formulaire.php">
<section class="icon fa fa-plus-envelope">
              
                
  <div id="container"></div>
  
  <script id="template">
  
    <div class="flip-card" on-click="toggle('flipCard')">{{ flipCard ? 'Renvoyer un mail' : 'Contactez-nous' }}</div>
    <div class="contact-wrapper">
        <div class="envelope {{ flipCard ? 'active' : '' }}">
          <div class="back paper"></div>
          <div class="content">
            <div class="form-wrapper">

              
                <div class="top-wrapper">
                  <div class="input">
                    <label for="name">Nom</label>
                    <input type="text" name="name" placeholder="Madame, Monsieur"/>
                  </div>
                  <div class="input">
                    <label for="phone">Téléphone</label>
                    <input type="text" name="phone" placeholder=""/>
                  </div>
                  <div class="input">
                    <label for="mail">Email</label>
                    <input type="text" name="mail" placeholder="nom@gmail.com"/>
                  </div>
                </div>

                <div class="bottom-wrapper">
                  <div class="input">
                    <label for="subject">Type de travaux</label>
                    <select name="subject" id="subject">
           <option value="Maconnerie">Maconnerie</option>
           <option value="Terrassement">Terrassement</option>
           <option value="Agrandissement">Agrandissement</option>
           <option value="Carrelage">Carrelage</option>
           <option value="Plomberie">Plomberie</option>
           <option value="Autres">Autres</option>
                    
                  </div>
                  <div class="input">
                    <label for="message">Message</label>
                    <textarea rows="8" name="message"></textarea>
                  </div>
                  <div class="input" type="submit" name="envoi" value="Envoyer">
                    <div class="submit-card" on-click="toggle('flipCard')">Envoyer</div>
                  </div>
                  </div>
                    </form>
                  </div>
                  </div>
                  <div class="front paper"></div>
                  </div>
                  
        </script>
            <div class="carte_visite">
              <img src="./assets/img/cv.jpg">
            </div>  
            
          </section>
          </form>
          </div> 

        </div>
      </div>
    </div>
  </div>
</div>