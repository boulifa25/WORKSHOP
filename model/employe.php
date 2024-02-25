<?php

// Model/employe.php

class Employe {
    // Attributs privés
    private $lastName;
    private $firstName;
    private $password;
    private $phone;
    private $email;
    private $dOB;

    // Constructeur
    public function __construct($lastName, $firstName, $password, $phone, $email, $dOB) {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->password = $password;
        $this->phone = $phone;
        $this->email = $email;
        $this->dOB = $dOB;
    }

    // Méthodes pour accéder aux attributs privés (getters)
    public function getLastName() {
        return $this->lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDOB() {
        return $this->dOB;
    }
}

?>
