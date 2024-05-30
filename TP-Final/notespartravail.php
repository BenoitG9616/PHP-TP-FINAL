<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes des Étudiants</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav aria-label="Menu Principal">
            <a href="index.php" aria-current="page" aria-label="Page d'accueil">Page d'accueil</a>
            <a href="notefinale.php" aria-label="Note Finale">Note Finale</a>
            <a href="notespartravail.php" class="active" aria-label="Notes Par Travail">Notes par Travail</a>
            <a href="recherchenote.php" aria-label="recherche">Recherche</a>
        </nav>
    </header>

    <h1>Notes des Étudiants</h1>
    <form method="post">
        <label for="groupe">Choisir le groupe:</label>
        <select name="groupe" id="groupe" onchange="this.form.submit()">
            <option value="Aucun">Sélectionner...</option>
            <option value="Groupe 1" >Groupe 1</option>
            <option value="Groupe 2" >Groupe 2</option>
        </select>
    </form>

    <?php 
    include 'Fonctions.php';
    include 'Donnees.php';

    $groupeSelectionne = isset($_POST['groupe']) ? $_POST['groupe'] : 'Aucun';

    if ($groupeSelectionne == 'Aucun') {
        echo "<p>Erreur - aucun groupe choisi</p>";
    } elseif ($groupeSelectionne == 'Groupe 1') {
        // Call the function and echo the result
        echo showTableGroupe1($NotesGroupe1);
    } elseif ($groupeSelectionne == 'Groupe 2') {
        // Call the function and echo the result
        echo showTableGroupe2($NotesGroupe2);
    }
    ?>
</body>
</html>