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
            <a href="notefinale.php" aria-label="Note Finale">Note Finale</a>
            <a href="notespartravail.php" aria-label="Notes Par Travail" >Notes par Travail</a>
            <a href="recherchenote.php" class="active" aria-current="page" aria-label="recherche" >Recherche</a>
        </nav>
    </header>
        <br>
    <form action="search.php" method="post">
        <label for="search">Recherche par code permanent</label>
        <input id="search" type="search" name="codepermanent" placeholder="Code Permanent (ex: HARG200181)" 
               pattern="[A-Za-z0-9]{9}" 
               title="Le code permanent doit être composé de 10 caractères alphanumériques." 
               aria-label="Entrez le code permanent" 
               aria-required="true" 
               required>
        <br>
        <button type="submit">Recherche</button>
    </form>

</body>
</html>