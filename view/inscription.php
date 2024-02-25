

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription Employé</title>
</head>
<body>
    <h2>Inscription Employé</h2>
    <form action="Verification.php" method="POST">
        <label for="lastName">Nom de famille :</label>
        <input type="text" id="lastName" name="lastName"><br><br>
        
        <label for="firstName">Prénom :</label>
        <input type="text" id="firstName" name="firstName"><br><br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password"><br><br>
        
        <label for="phone">Téléphone :</label>
        <input type="text" id="phone" name="phone"><br><br>
        
        <label for="email">Email :</label>
        <input type="text" id="email" name="email"><br><br>
        
        <label for="dob">Date de naissance :</label>
        <input type="text" id="dob" name="dob" placeholder="jj/mm/aaaa"><br><br>
        
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
