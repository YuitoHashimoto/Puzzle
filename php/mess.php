<?php

require_once("dbConnect.php");
session_start();

if(ISSET($_POST)){
    $messData = $_POST;
    $newTitle = $messData["title"];
    $newMess = $messData["txt"];
    $id = $_SESSION["id"];

    $db->query("INSERT INTO `messData`(`userId`,`title`,`mess`) VALUES ('{$id}','{$newTitle}','{$newMess}');");
}
 header("Location: ../home.php");

?>