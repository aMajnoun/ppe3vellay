<div data-role="page" id="pageajoutreservation">
     <?php 
     include "vues/entetepage.php";     
     ?>
        <div data-role="content"> 
          <div class="ui-field-contain">
            <h2>Réservation d'une salle<h2>
            <form method="post" action="">  

              <br><br>
              Date début: <input type="date" name="datedebut" id="datedebut"> <br/>
              Date fin: <input type="date" name="datefin" id="datefin"><br/>
              Domaine: <select name="selectiondomaine" id="selectionDomaine"></select><br/>
              Salle: <select name="selectionsalle" id="selectionsalle"></select><br/>
              Type: <select name="selectiontype" id="selectiontype"></select><br/>
              
              Etat confirmation: <input type="radio" name="selectconfirmation" id="selectConfirme" value="Confirme" >Confirmé<br/>
              <input type="radio" name="selectconfirmation" id="selectProvisoire" value="Provisoire">Provisoire
              <br><br>
              
              Type périodicité: <select name="selectperiodicite" id="selectperiodicite"></select><br/>
              Date fin périodicité: <input type="date" name="nom" id="datefinperiodicite">  <br/>
              
              Jour:<br>
              Lundi <input type="checkbox" id="lundi" value="lundi">  
              Mardi <input type="checkbox" id="mardi" value="mardi">  
              Mercredi <input type="checkbox" id="mercredi" value="mercredi"> 
              Jeudi <input type="checkbox" id="jeudi" value="jeudi">  
              Vendredi <input type="checkbox" id="vendredi" value="vendredi">  
              Samedi <input type="checkbox" id="samedi" value="samedi"> 
              Dimanche <input type="checkbox" id="dimanche" value="dimanche"> <br/>
              
              Intervalle de semaines (pour n-semaines): <input type="text" id="intervallesemaine"><br><br>
              
             <button id="btnajouter">Ajouter</button>
            </form>
          </div>
        </div><!-- /content --> 
</div><!-- /page 1 -->
