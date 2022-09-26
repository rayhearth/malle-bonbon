$(document).ready(function() {
    if($(window).width()<426) {
        // quand le document est prêt
        $("ul.sous-menu").hide(); // on cache tous les sous-menu
        $("#service").click(function() {
            // au click du li #support :
            $("#propos ul.sous-menu").slideUp("normal");
            $("#marque ul.sous-menu").slideUp("normal");
            
        
            // on remonte le sous-menu du li #myreverse
            $(this).children("ul.sous-menu").slideToggle("normal");
            // on remonte ou on descend le sous-menu de #support
            $("#propos").removeClass("open");
            $("#marque").removeClass("open");
            // on enlève la class open du li #myreverse
            $(this).toggleClass("open");
            // on ajoute ou enlève la class au li #support
        });
        
        $("#propos").click(function() {
            // au click du li #support :
            $("#service ul.sous-menu").slideUp("normal");
            $("#marque ul.sous-menu").slideUp("normal");
            $(this).children("ul.sous-menu").slideToggle("normal");
            $("#service").removeClass("open");
            $("#marque").removeClass("open");
            $(this).toggleClass("open");
            
        });
        
        
        $("#marque").click(function() {
            $("#service ul.sous-menu").slideUp("normal");
            $("#propos ul.sous-menu").slideUp("normal");
            $(this).children("ul.sous-menu").slideToggle("normal");
            $("#service").removeClass("open");
            $("#propos").removeClass("open");
            $(this).toggleClass("open");
        });
       
    }
});