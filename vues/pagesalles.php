<div data-role="page" id="pagesalles">
     <?php 
     include "vues/entetepage.php"
     ?>
        <div data-role="content"> 
          <div class="ui-field-contain">
              <p>
                <label for="selectsalle">Salle : </label>
                
                <select name="selectsalle">

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
