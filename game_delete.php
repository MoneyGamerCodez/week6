<?php
include_once('database.php');

$gameID = $_GET["gameID"]; // assigns the gameID from the URL

if($gameID != false){
    $query = "DELETE from games WHERE ID = :game_id";
    $statement = $db->prepare($query);
    $statement->bindValue(":game_id", $gameID);
    $success = $statement->execute();
    $statement.closeCursor();
}
?>