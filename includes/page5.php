<section class="icon fa fa-plus-envelope"></section>
<div class = "frame">

<div id = "button_open_envelope">
        Envoyez un mail
      </div>

          
      <div class = "message">
        <form method="post" action="traitement_formulaire.php">
          
            <input type="text" name="Nom" id="name" placeholder="Nom*" required />
    
            <input type="text" name="Téléphone" id="phone" placeholder=" Tél (optionel)" />
            <input type="email" name="Email" id="email" placeholder=" Email* " />

            <label class="typeTravaux">Type de travaux</label>
            <select name="Sujet" id="subject">
            <option value="Maconnerie">Maconnerie</option>
            <option value="Terrassement">Terrassement</option>
            <option value="Agrandissement">Agrandissement</option>
            <option value="Carrelage">Carrelage</option>
            <option value="Plomberie">Plomberie</option>
            <option value="Autres">Autres</option>
                    
               
          <textarea name="message" id="messarea" placeholder=" Votre Message* " required></textarea>
                
            <input type="submit" name="envoi" value="Envoyer" id="send">
        </form>

      </div>
       
      <div class = "bas"></div>      
      <div class = "gauche"></div>
      <div class = "droit"></div>
      <div class = "haut"></div>
  
     <script src="./assets/js/script.js"></script>
    </div>
   
    <script src="./assets/js/index.js"></script>
    
    <div class="carte_visite">
      <img src="./assets/img/cv.jpg" alt="Carte de visite" />
    </div>
