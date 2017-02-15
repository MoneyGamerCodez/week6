<?php
include_once('database.php');

$gameID = filter_input(INPUT_POST, "IDTextField"); // $_POST["IDTextField"];
$gameName = filter_input(INPUT_POST, "NameTextField"); //$_POST["NameTextField"];
$gameCost = filter_input(INPUT_POST, "CostTextField"); //$_POST["CostTextField"];

$query = "UPDATE games SET Name = :game_name, Cost = :game_cost WHERE Id = :game_id "; // SQL statement
$statement = $db->prepare($query); // encapsulate the sql statement
$statement->bindValue(':game_id', $gameID);
$statement->bindValue(':game_name', $gameName);
$statement->bindValue(':game_cost', $gameCost);

$statement->execute(); // run on the db server
$statement->closeCursor(); // close the connection

include('index.php');
?>
