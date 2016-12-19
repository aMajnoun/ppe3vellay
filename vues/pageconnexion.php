<div data-role="page" id="pageconnexion">
     <?php 
     include "vues/entetepageconnexion.php"
     ?>
        <div data-role="content" id="divconnexion">
        <p>Veuillez vous identifier</p> 
            <div class="ui-field-contain">
                <label for="login">Login</label>
                <input type="text" name="login" id="login"
                       value="" />
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp"
                       value="" />                
            </div>
            <div id="message"></div>
            <p>
                <a href="#" data-role="button"
                   id="btnconnexion" data-line="true">
                       S'identifier
                </a>
            </p>                         
        </div><!-- /content --> 
    </div><!-- /page 1 -->
