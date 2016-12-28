<div data-role="page" id="pagesajoututilisateur">
     <?php 
     include "vues/entetepage.php";     
     ?>
        <div data-role="content"> 
          <div class="ui-field-contain">
            <h2>Ajouter un nouvel utilisateur<h2>
            <form method="post" action="">  
              Droits : <SELECT name="nom" id="ajoutdroit" size="1">
                <OPTION>none
                <OPTION>user
                <OPTION>admin
              </SELECT>
              <br><br>
              Nom: <input type="text" name="nom" id="ajoutnom" value="">  
              Courriel: <input type="text" name="courriel" id="ajoutcourriel" value="">
              Mot de passe: <input type="password" name="mdp" id="ajoutmdp" value="">
              Validation mot de passe: <input type="password" name="validmdp" id="ajoutverifmdp" value="">
              <br><br>
             <button id="btnajouter">Ajouter</button>
            </form>
          </div>
        </div><!-- /content --> 
</div><!-- /page 1 -->
