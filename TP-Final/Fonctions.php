<?php
 
/*
    C'est ici que vous allez développer et documenter selon le standard vu en classe les fonctions dont vous aurez besoin dans votre code. 

    Je vous en propose une : la fonction calculeNoteFinale, qui prend en paramètre la note au TP1, la note au TP2 et la note à l'examen final et qui calcule et retourne la note finale pour ces trois notes. À vous de la développer et de la documenter.

*/
require_once "Donnees.php";
//Fonction calcul note finale
function calculeNoteFinale($noteTP1, $noteTP2, $noteExamen)
{
    $pourcentTP1 = 0.15;
    $pourcentTP2 = 0.35;
    $pourcentExamen = 0.50;

    $NoteFinale = ($pourcentTP1*$noteTP1) + ($pourcentTP2*$noteTP2) + ($pourcentExamen*$noteExamen);

    return $NoteFinale;
}
//* Tableau 1 & 2 pour notes par travail
function showTableGroupe1($NotesGroupe1){
// Titre tableau 1
echo "<h2>Tableau du Groupe 1</h2>";

echo "<table id='table1' border='4'>
<tr>
    <th>ID</th>
    <th>Prénom</th>
    <th>Nom</th>
    <th>Redoublant</th>
    <th>Note TP1</th>
    <th>Note TP2</th>
    <th>Note Examen</th>
    <th>Note Finale</th>
</tr>";

// Premier tableau

foreach ($NotesGroupe1 as $id => $details) {
    $prenom = $details[0];
    $nom = $details[1];
    $redoublant = $details[2];
    $noteTP1 = $details[3];
    $noteTP2 = $details[4];
    $noteExamen = $details[5];

    $noteFinale = calculeNoteFinale($noteTP1, $noteTP2, $noteExamen);

    echo "<tr>
        <td>$id</td>
        <td>$prenom</td>
        <td>$nom</td>
        <td>$redoublant</td>
        <td>$noteTP1</td>
        <td>$noteTP2</td>
        <td>$noteExamen</td>
        <td>$noteFinale</td>
    </tr>";
}

echo "</table><br><br>";
}

function showTableGroupe2($NotesGroupe2){

    echo "<h2>Tableau du Groupe 2</h2>";

echo "<table id='table2' border='4'>
<tr>
    <th>ID</th>
    <th>Prénom</th>
    <th>Nom</th>
    <th>Redoublant</th>
    <th>Note TP1</th>
    <th>Note TP2</th>
    <th>Note Examen</th>
    <th>Note Finale</th>
</tr>";
    
foreach ($NotesGroupe2 as $id => $details) {
    $prenom2 = $details[0];
    $nom2 = $details[1];
    $redoublant2 = $details[2];
    $noteTP12 = $details[3];
    $noteTP22 = $details[4];
    $noteExamen2 = $details[5];

    $noteFinale2 = calculeNoteFinale($noteTP12, $noteTP22, $noteExamen2);

    echo "<tr>
        <td>$id</td>
        <td>$prenom2</td>
        <td>$nom2</td>
        <td>$redoublant2</td>
        <td>$noteTP12</td>
        <td>$noteTP22</td>
        <td>$noteExamen2</td>
        <td>$noteFinale2</td>
    </tr>";
}

echo "</table>";
}
?>