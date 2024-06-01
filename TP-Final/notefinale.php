<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="css/styles.css">
    <header>
        <nav aria-label="Menu Principal">
            <a href="index.php" aria-label="Page d'accueil">Page d'accueil</a>
            <a href="notefinale.php" class="active" aria-current="page" aria-label="Note Finale">Note Finale</a>
            <a href="notespartravail.php" aria-label="Notes Par Travail" >Notes par Travail</a>
            <a href="recherchenote.php" aria-label="recherche" >Recherche</a>
        </nav>
    </header>

    <h1>Notes des Étudiants</h1>
    <form method="post">
        <label for="groupe">Choisir le groupe:</label>
        <select name="groupe" id="groupe">
            <option value="Aucun">Sélectionner...</option>
            <option value="Both">Les Deux Groupes</option>
            <option value="Groupe 1" >Groupe 1</option>
            <option value="Groupe 2" >Groupe 2</option>
        </select>
        <fieldset>
        <legend>Echec</legend>
                    <label>Oui
                        <input type="radio" name="echec" value="oui" >
                    </label>
                    <label>Non
                        <input type="radio" name="echec" value="non">
                    </label>
        </fieldset>
        <fieldset>
        <legend>Mentorat</legend>
                    <label>Oui
                        <input type="radio" name="mentorat" value="oui" >
                    </label>
                    <label>Non
                        <input type="radio" name="mentorat" value="non" >
                    </label>
                    <label>Les Deux
                        <input type="radio" name="mentorat" value="both" >
                    </label>
        </fieldset>
        <button type="submit">Soumettre</button>
    </form>

    <?php 
    include 'Fonctions.php';
    include 'Donnees.php';

    $groupeSelectionne = isset($_POST['groupe']) ? $_POST['groupe'] : 'Aucun';
    $echecChecked = isset($_POST['echec']) && $_POST['echec'] == 'oui';
    $mentoratSelectionne = isset($_POST['mentorat']) ? $_POST['mentorat'] : '';
    
    if ($groupeSelectionne == 'Aucun') {
        echo "<p>Erreur - aucun groupe choisi</p>";
    } else {
        $notes = [];
    
        if ($groupeSelectionne == 'Groupe 1') {
            $notes = $NotesGroupe1;
        } elseif ($groupeSelectionne == 'Groupe 2') {
            $notes = $NotesGroupe2;
        } elseif ($groupeSelectionne == 'Both') {
            $notes = array_merge($NotesGroupe1, $NotesGroupe2);
        }
    
        if ($echecChecked) {
            $notes = array_filter($notes, function($note) {
                return $note['note'] < 60;
            });
        }
    
        if ($mentoratSelectionne == 'mentorat-oui') {
            $notes = array_filter($notes, function($note) {
                return $note['mentorat'] == 'oui';
            });
        } elseif ($mentoratSelectionne == 'mentorat-non') {
            $notes = array_filter($notes, function($note) {
                return $note['mentorat'] == 'non';
            });
        }
    
        if ($groupeSelectionne == 'Groupe 1') {
            echo showTableGroupe1($notes);
        } elseif ($groupeSelectionne == 'Groupe 2') {
            echo showTableGroupe2($notes);
        } elseif ($groupeSelectionne == 'Both') {
            echo showTableGroupe1($NotesGroupe1);
            echo showTableGroupe2($NotesGroupe2);
        }
    }
    ?>
</body>
</html>
