<!DOCTYPE html>
<html>
<head>
    <title>Gérer les offres d'emploi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Gérer les offres d'emploi</h1>
        <img src="logo.png" alt="Logo de votre entreprise">
    </header>
    <div class="container">
        <!-- Formulaire pour lancer une nouvelle offre d'emploi -->
        <h2>Lancer une nouvelle offre d'emploi</h2>
        <form method="post" action="process.php">
            <label for="Titre">Titre de l'offre :</label>
            <input type="text" id="Titre" name="Titre" required><br><br>
            <label for="secteur_activite">Sélectionnez un secteur d'activité :</label>
            <select id="secteur_activite" name="secteur_activite" required>
                <option value="informatique">Informatique</option>
                <option value="finance">Finance</option>
                <option value="marketing">Marketing</option>
                <!-- Ajoutez d'autres options ici -->
            </select><br><br>
            <button type="submit" name="lancerOffre">Lancer l'offre</button>
        </form>

        <!-- Inclusion du fichier PHP pour afficher les offres d'emploi -->
        <?php include 'display_offers.php'; ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Gérer les offres d'emploi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Gérer les offres d'emploi</h1>
        <img src="logo.png" alt="Logo de votre entreprise">
    </header>
    <div class="container">
        <!-- Formulaire pour lancer une nouvelle offre d'emploi -->
        <h2>Lancer une nouvelle offre d'emploi</h2>
        <form method="post" action="process.php">
            <label for="Titre">Titre de l'offre :</label>
            <input type="text" id="Titre" name="Titre" required><br><br>
            <label for="secteur_activite">Sélectionnez un secteur d'activité :</label>
            <select id="secteur_activite" name="secteur_activite" required>
                <option value="informatique">Informatique</option>
                <option value="finance">Finance</option>
                <option value="marketing">Marketing</option>
                <!-- Ajoutez d'autres options ici -->
            </select><br><br>
            <button type="submit" name="lancerOffre">Lancer l'offre</button>
        </form>

        <!-- Inclusion du fichier PHP pour afficher les offres d'emploi -->
        <?php include 'display_offers.php'; ?>
    </div>
</body>
</html>
