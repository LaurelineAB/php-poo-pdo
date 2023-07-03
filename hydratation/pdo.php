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


//EXERCICE 1
$user = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];

$superman = new User($user['firstName'], $user['lastName'], $user['email']);
var_dump($superman->getFirstName());


//EXERCICE 2
$query = $db->prepare('SELECT * FROM users LIMIT 1');
$query->execute();
$test = $query->fetch(PDO::FETCH_ASSOC);
var_dump($test);
var_dump($test['id']);
$lennon = new User ($test['first_name'], $test['last_name'], $test['email']);
var_dump($lennon);


//EXERCICE 3
$query = $db->prepare('SELECT * FROM users');
$query->execute();
$request = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($request);

$users = [];
foreach($request as $item)
{
    $item = new User($item['first_name'], $item['last_name'], $item['email']);
    array_push($users, $item);
}
var_dump($users);


//EXERCICE 4
$query = $db->prepare(
    "INSERT INTO users (first_name, last_name, email) 
    VALUES (?,?,?);");
$query->execute([$superman->getFirstName(), $superman->getLastName(), $superman->getEmail()]);
?>