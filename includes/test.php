<form action="traitement.php" method="post">
<p>
<strong>Nom<span style="color: #ff0000;">*</span> :</strong> <label for="nom"> </label> <input id="nom" name="nom" size="28" type="text" /> 
<strong>Ville : </strong> <label for="ville"></label> <input id="ville" name="ville" size="39" type="text" /> <br /><br /> 
<strong>Téléphone<span style="color: #ff0000;">*</span> :<label for="telephone"></label></strong> <input id="telephone" name="telephone" size="27" type="text" /> 
<strong>Mail <span style="color: #ff0000;">*</span> : </strong><br /> <label for="mail"> </label><input id="mail" name="mail" size="81" type="text" /><br />
<label for="motif">Type de travaux</label>
                    <select name="subject" id="subject">
           <option value="Maconnerie">Maconnerie</option>
           <option value="Terrassement">Terrassement</option>
           <option value="Agrandissement">Agrandissement</option>
           <option value="Carrelage">Carrelage</option>
           <option value="Plomberie">Plomberie</option>
           <option value="Autres">Autres</option>
 </select></p>
<p>Message <span style="color: #ff0000;">*</span> :</p>
<p><label for="message"></label> <textarea id="message" cols="52" rows="7" name="message"></textarea></p>
<p> <input type="reset" value="Effacer" /> <input type="submit" value="Envoyer" />
</p>
</form>