<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "laurelineagabibrac_prenomnom_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "laurelineagabibrac";
$password = "c8b4d35a0077655c5f327ec2af4c0eac";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

require "../classes/User.php";

$user = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];

$superman = new User($user['firstName'], $user['lastName'], $user['email']);
var_dump($superman);

?>