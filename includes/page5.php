<div class = "frame">

<div id = "button_open_envelope">
        Envoyez un mail
      </div>

           
      <div class = "message">
        <form method="post" action="traitement_formulaire.php">
          
            <input type="text" name="Nom" id="name" placeholder="Nom*" required>
    
            <input type="text" name="Téléphone" id="phone" placeholder=" Tél (optionel)" autofocus> 
            <input type="email" name="Email" id="email" placeholder=" Email* " required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$">

            <label>Type de travaux</label>
            <select name="Sujet" id="subject">
            <option value="Maconnerie">Maconnerie</option>
            <option value="Terrassement">Terrassement</option>
            <option value="Agrandissement">Agrandissement</option>
            <option value="Carrelage">Carrelage</option>
            <option value="Plomberie">Plomberie</option>
            <option value="Autres">Autres</option>
                    
               
          <textarea name="Message" id="messarea" placeholder=" Votre Message* " required></textarea>
                
            <input type="submit" value="Envoyer" id="send">
        </form>

      </div>
       
      <div class = "bottom"></div>      
      <div class = "left"></div>
      <div class = "right"></div>
      <div class = "top"></div>
  
     <script src="./assets/js/script.js"></script>
    
   
    <script src="./assets/js/index.js"></script>
    </div>
    <div class="carte_visite">
              <img src="./assets/img/cv.jpg">
            </div>