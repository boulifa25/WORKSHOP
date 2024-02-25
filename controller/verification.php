<?php

// Inclusion des fichiers nécessaires
require_once('../Model/employe.php');
require_once('../Controller/EmployeC.php');

// Vérification des données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $lastName = $_POST["lastName"];
    $firstName = $_POST["firstName"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    
    // Création d'un objet employe1 à partir des informations du formulaire
    $employe1 = new Employe($lastName, $firstName, $password, $phone, $email, $dob);
    
    // Affichage des informations de employe1 avec var_dump()
    echo "Informations de employe1 avec var_dump(): <br>";
    var_dump($employe1);
    echo "<br><br>";
    
    // Affichage des informations de employe1 en utilisant la méthode show($employe)
    echo "Informations de employe1 avec la méthode show(\$employe): <br>";
    $employeController = new EmployeC();
    $employeController->show($employe1);
}

?>
