<?php
require_once('Donnees.php');
require_once('Fonctions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codePermanent = $_POST['codepermanent'];
    $groupes = [$NotesGroupe1, $NotesGroupe2];
    $resultats = [];

    foreach ($groupes as $groupe) {
        if (array_key_exists($codePermanent, $groupe)) {
            $resultats[] = $groupe[$codePermanent];
            break;  // Stop searching if found
        }
    }

    if (!empty($resultats)) {
        echo "<h2>Résultat de la recherche pour '$codePermanent'</h2>";
        echo "<table border='1'>
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

        foreach ($resultats as $details) {
            $prenom = $details[0];
            $nom = $details[1];
            $redoublant = $details[2];
            $noteTP1 = $details[3];
            $noteTP2 = $details[4];
            $noteExamen = $details[5];

            $noteFinale = calculeNoteFinale($noteTP1, $noteTP2, $noteExamen);

            echo "<tr>
                <td>$codePermanent</td>
                <td>$prenom</td>
                <td>$nom</td>
                <td>$redoublant</td>
                <td>$noteTP1</td>
                <td>$noteTP2</td>
                <td>$noteExamen</td>
                <td>$noteFinale</td>
            </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Aucun étudiant trouvé avec le code permanent '$codePermanent'.</p>";
    }
}
?>