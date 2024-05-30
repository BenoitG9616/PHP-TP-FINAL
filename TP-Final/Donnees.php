<?php 

/*

    Voici les tableaux contenant les informations sur les deux groupes, que vous devez importer et utiliser ailleurs
    dans votre code.


    Les tableaux contiennent, pour chaque code permanent, un autre tableau à index numérique contenant respectivement le prénom, le nom, le statut de mentorat ("oui" ou "non"), l’âge, la note au TP1, la note au TP2 et la note à l’examen final pour chaque étudiant. 
    
    Pour fins de calcul de notes finales, prenez compte que le TP1 compte pour 15% de la note finale, le TP2 35% et l’examen final 50%. 
    
    N.B. IL NE FAUT PAS MODIFIER LA STRUCTURE DE CES TABLEAUX. Vous pouvez toutefois ajouter des étudiant.e.s à votre guise.

*/


$NotesGroupe1 = array(
	"HARG200181" => array("Michel", "Harvey", "non",  36,  90, 70, 76),
	"CHAM010283" => array("Julie", "Charpentier", "non", 34, 80, 73, 96),
	"TREV290991" => array("Valérie", "Tremblay", "oui", 26, 70, 71, 69),
	"PELL180584" => array("Laurent", "Pelletier", "oui", 30, 65, 89, 76),
	"MALF110194" => array("France", "Maltais", "non", 20, 61, 50, 59),
	"GAUM220654" => array("Martine", "Gauthier", "oui", 60, 65, 40, 76)
	
);

$NotesGroupe2 = array(
	"GIRM230383" => array("Pierre", "Girard", "non", 31, 75, 85, 56),
	"TREM300878" => array("Suzie", "Tremblay", "non", 36, 50, 50, 55),
	"POID250468" => array("Hanane", "El Habib", "oui", 46, 61, 75, 59),
	"LEML180586" => array("Martin", "Lemieux", "oui", 31, 80, 89, 100),
	"VANL130395" => array("Jeff", "Van Cleef", "non", 19, 61, 68, 33)
);