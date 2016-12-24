<div data-role="page" id="pagelisteutilisateurs">
     <?php 
     include "vues/entetepage.php";     
     ?>
        <div data-role="content"> 
        <h2>Liste des utilisateurs</h2>
          <div class="ui-field-contain">
			<table border="1" id="tabUtilisateurs">
				<thead>
				   <tr>
				       <th>Action</th>
				       <th>Droits</th>
				       <th>Nom</th>
				       <th>Adresse courriel</th>
				   </tr>
				</thead>
				<tbody id="listeUtilisateurs">
             
                </tbody>				
			</table>
          </div>
        </div><!-- /content --> 
</div><!-- /page 1 -->
