<?php

// Inclusion des fichiers nécessaires
require_once('../Model/employe.php');
require_once('../Controller/EmployeC.php');

// Création d'un employé
$employe1 = new Employe("Doe", "Jane", "123456789", "(Insérer le numéro de téléphone)", "Jane.Doe@gmail.com", "1/1/2000");

// Affichage des informations de l'employé avec var_dump()
echo "Affichage des informations de l'employé avec var_dump(): <br>";
var_dump($employe1);
echo "<br><br>";

// Affichage des informations de l'employé en utilisant la fonction show($employe)
echo "Affichage des informations de l'employé en utilisant la fonction show(\$employe): <br>";
$employeController = new EmployeC();
$employeController->show($employe1);

?>
