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
    
    $('#')
    
    $('#pagesalles').load(function (e){
        $.post("ajax/traiterrecherchelistesalles.php",{
        },
        foncRetourListeSalles,"json");
    })
    
    function foncRetourListeSalles(data)
    {
        $('#pagesalles #selectsalle').empty();
        for( i = 0; i < data.length; i++){
                var lesSalles = data[i];
                var id = lesSalles['id'];
                var salle = lesSalles['room_name'] ;
                var html = "<option id ='" + id + "' value ='" + id + "'>" + salle + "</option>"
                $('#pagesalles #selectsalle').append(html);
            } 
    }
    
});     // Fin fonction principale

