//js : empecher retour haut de page quand le lien est vide ou #
//mettre class link aux a 

$(document).ready(function() {

	$(".link").click(function() {
        return false;
    });

});