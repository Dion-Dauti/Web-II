<?php
class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function changePassword($newPassword) {
        $this->password = $newPassword;
    }

    public function changeUsername($newUsername) {
        $this->username = $newUsername;
    }

    public function displayInfo() {
        echo "Username: " . $this->username . "<br>";
        echo "Password: " . $this->password . "<br>";
    }
}

// Krijimi i një shfrytëzuesi të ri
$user = new User("user123", "password123");

// Shfaqja e të dhënave të shfrytëzuesit
$user->displayInfo();

// Ndryshimi i fjalëkalimit
$newPassword = "newpassword123";
$user->changePassword($newPassword);

// Ndryshimi i përdoruesit
$newUsername = "newuser123";
$user->changeUsername($newUsername);

// Shfaqja e të dhënave të shfrytëzuesit pas ndryshimeve
$user->displayInfo();
?>
