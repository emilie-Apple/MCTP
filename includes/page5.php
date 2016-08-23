<section class="icon fa fa-plus-envelope"></section>
<div class = "frame">

<div id = "button_open_envelope">
        Envoyez un mail
      </div>

          
      <div class = "message">
        <form method="post" action="traitement_formulaire.php">
          
            <input type="text" name="nom" id="name" placeholder="Nom*" required>
    
            <input type="phone" name="phone" id="phone" placeholder=" Tél (optionel)" > 
            <input type="email" name="email" id="email" placeholder=" Email* " required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$">

            <label>Type de travaux</label>
            <select name="sujet" id="subject">
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
       
      <div class = "bottom"></div>      
      <div class = "left"></div>
      <div class = "right"></div>
      <div class = "top"></div>
  
     <script src="./assets/js/script.js"></script>
    </div>
   
    <script src="./assets/js/index.js"></script>
    
    <div class="carte_visite">
              <img src="./assets/img/cv.jpg">
            </div>