<?php 
    //classe
    class User {
        public $nome;
        public $cognome;
        public $email;

        function __construct($eta) {
            $this->eta = $eta;
        }
    }
    
    //inizio user
    $user1 = new User(24);
    $user1->nome = "Marco";
    $user1->cognome = "Rossi";
    $user1->email = "marco_rossi@gmail.com";
    //fine user

    //inizio user
    $user2 = new User(78);
    $user2->nome = "Napoleone";
    $user2->cognome = "Bonaparte";
    $user2->email = "napoleone_bonaparte@gmail.com";
    //fine user

    //inizio user
    $user3 = new User(35);
    $user3->nome = "Giovanni";
    $user3->cognome = "Verdi";
    $user3->email = "verdi@gmail.com";
    //fine user

    //inizio user
    $user4 = new User(64);
    $user4->nome = "Mattia";
    $user4->cognome = "Ferrari";
    $user4->email = "ferrari@gmail.com";
    //fine user

    $arrayUsers = [$user1, $user2, $user3, $user4];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h2>Utenti</h2>

    <?php 
        var_dump($arrayUsers);
    ?>
    
</body>
</html>