$(function(){
   /*-----------------------Page connexion----------------------------------*/
    $('#pageconnexion #btnconnexion').bind("click", function(e) {
            e.preventDefault();
            var mdp = $("#pageconnexion #mdp").val(); 
            var login = $("#pageconnexion #login").val();
            $.post("ajax/traiterconnexion.php",{
                        "mdp" : mdp,        
                        "login" : login },
                        foncRetourConnexion,"json" );
    });

    
     function foncRetourConnexion(data){
            if(data != null){
                $.mobile.changePage("#pagesalles");
             }
             else{
                $("#pageconnexion #message").css({color:'red'});
                $("#pageconnexion #message").html("erreur de login et/ou mdp");
             }
    }


    /*-----------------------Autres pages----------------------------------*/


    $('#entetepage #btndeconnexion').bind("click", function(e) {
        var mdp = "";
        var login = "";
        $.mobile.changePage("#pageconnexion");
        $("#pageconnexion #mdp").val(""); 
        $("#pageconnexion #login").val("");
        $("#pageconnexion #message").html("");

    });

    
    $('#')

    /*-----------------------page salles----------------------------------*/
    $('#pagesalles').ready(function (e){
        $.post("ajax/traiterrecherchelistesalles.php",{
            
        },
        foncRetourListeSalles,"json");
    });

    
    function foncRetourListeSalles(data)
    {
        for( i = 0; i < data.length; i++)
            {
                var lesSalles = data[i];
                var id = lesSalles['id'];
                var salle = lesSalles['room_name'] ;
                var html = "<option id ='" + id + "' value ='" + id + "'>" + salle + "</option>"
                $('#pagesalles #selectsalle').append(html);
            } 
            
    }
    
    $('#pagesalles #selectJour').bind("click", function(e)
    {
        $('#pagesalles #choixDate').html('<input type="date" name="dateReservation" id="dateReservation" value="" class ="required"/>')
    });
    $('#pagesalles #selectSemaine').bind("click", function(e)
    {
        $('#pagesalles #choixDate').html('<input type="week" name="dateReservation" id="dateReservation" value="" class ="required"/>')
    });

    /*-----------------------page liste utilisateurs----------------------------------*/

    $('#pagelisteutilisateurs').ready(function (e){
    $.post("ajax/traiterafficherlisteutilisateurs.php",{
        },
        foncRetourListeUtilisateurs,"json");
    });

    //marche
    $('#entetepage #btnlisteutilisateurs').bind("click", function(e){
    $.mobile.changePage("#pagelisteutilisateurs");  
    $.post("ajax/traiterafficherlisteutilisateurs.php",{
        },
        foncRetourListeUtilisateurs,"json");
    });

          function foncRetourListeUtilisateurs(data){
          var lesUtilisateurs = data;
          var html ="";
          for(i = 0; i<lesUtilisateurs.length ; i++){
              var unUtilisateur = lesUtilisateurs[i];
              var droits = unUtilisateur['level'];
              var nom = unUtilisateur['name'];
              var courriel = unUtilisateur['email'];
              if (droits == 0)
              {
                droits = "none";
              }
              if (droits == 1)
              {
                droits = "user";
              }
              if (droits == 2)
              {
                droits = "admin";
              }
              html+="<tr><td>" + "<a href=''>modifier</a>" + "</td><td>" + droits + "</td><td>" + nom + "</td><td>";
              html+= courriel + "</td></tr>";              
          }
          $("#pagelisteutilisateurs #listeUtilisateurs").html(html);
          $("#pagelisteutilisateurs #tabUtilisateurs").table("refresh");
      }

      
    $('#btnajouterutilisateur').bind("click", function(e){
    $.mobile.changePage("#pagesajoututilisateur");
    });
    
    
    //---------------Page ajouter reservation-----------------------
    $('#entetepage #btnajouter').bind("click", function(e){
    $.mobile.changePage("#pageajoutreservation")});
});     // Fin fonction principale

