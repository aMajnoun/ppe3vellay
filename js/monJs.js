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

    $('#btndeconnexion').bind("click", function(e) {
        e.preventDefault();
        var mdp = "";
        var login = "";
         $("#pageconnexion #mdp").val(""); 
         $("#pageconnexion #login").val("")
         $("#pageconnexion #message").html("")
        $.mobile.changePage("#pageconnexion");
    });
    
});     // Fin fonction principale

