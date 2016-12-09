<div data-role="page" id="pagesalles">
     <?php 
     include "vues/entetepage.php"
     ?>
        <div data-role="content"> 
          <div class="ui-field-contain">
              <p>
                <label for="selectsalle">Salle : </label>
                
                <select name="selectsalle">
                    <option id="1" value="1">Daum</option>
                    <option id="2" value="2">Corbin</option>
                    <option id="3" value="3">Baccarat</option>
                    <option id="4" value="4">Longwy</option>
                    <option id="5" value="5">Multimédia</option>
                    <option id="6" value="6">Amphithéâtre</option>
                    <option id="7" value="7">Lamour</option>
                    <option id="8" value="8">Grüber</option>
                    <option id="9" value="9">Majorelle</option>
                    <option id="10" value="10">Salle de restauration</option>
                    <option id="11" value="11">Galerie</option>
                    <option id="12" value="12">Salle informatique</option>
                    <option id="13" value="13">Hall d'accueil</option>
                    <option id="14" value="14">Gallé</option>
                </select>
               </p>
              
                <p>
                    <label id="LblSelectperiode">Date : </label><br/>
                    <input type="radio" name="selectPeriode" id="selectJour" value="Jour">Jour<br/>
                    <input type="radio" name="selectPeriode" id="selectSemaine" value="Semaine">Semaine
                </p>
                
                <p>
                    <input type="date" name="dateReservation" id="dateReservation" value="" class ="required"/>
                </p>
          </div>
        </div><!-- /content --> 
</div><!-- /page 1 -->
