<?php

// Controller/EmployeC.php

class EmployeC {
    // Méthode pour afficher les informations d'un employé dans un tableau
    public function show($employe) {
        $table = '<table border="1">';
        $table .= '<tr><th>Nom de famille</th><th>Prénom</th><th>Mot de passe</th><th>Téléphone</th><th>Email</th><th>Date de naissance</th></tr>';
        $table .= '<tr>';
        $table .= '<td>' . $employe->getLastName() . '</td>';
        $table .= '<td>' . $employe->getFirstName() . '</td>';
        $table .= '<td>' . $employe->getPassword() . '</td>';
        $table .= '<td>' . $employe->getPhone() . '</td>';
        $table .= '<td>' . $employe->getEmail() . '</td>';
        $table .= '<td>' . $employe->getDOB() . '</td>';
        $table .= '</tr>';
        $table .= '</table>';

        echo $table;
    }
}

?>
