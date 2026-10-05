<?php
try {
    $dsn = "mysql:host=gateway01.eu-central-1.prod.aws.tidbcloud.com;port=4000;dbname=Evan_pokedex";
    $username = "2uC5AkXauvMESnX.root";
    $password = "2qz5EHJOG69vrVjG";

    $options = [
        // Ignore les certificats
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        // Active la connexion SSL
        PDO::MYSQL_ATTR_SSL_CA => true,
        // Affiche les erreurs retournees par la BDD
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    $connection = new PDO($dsn, $username, $password, $options);
} catch (Exception $e) {
    echo ("Connection à la BDD impossible". $e->getMessage());
    die();
}
?>