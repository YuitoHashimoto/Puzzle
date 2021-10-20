<?php
    require_once("dbConnect.php");
    session_start();

    if(ISSET($_POST)){
        // データセット
        $newClass = $_POST["class"];
        $newName = $_POST["name"];
        $id = $_SESSION["id"];
        

        $query = $db->query("UPDATE acountData SET name='{$newName}' ,class='{$newClass}'  WHERE id='{$id}';");
        print $id;

        $result = $db->query("SELECT * FROM acountData WHERE id='{$id}'");
            if($result){
                if($result -> rowCount()){
                foreach($result as $row){
                    $_SESSION["name"] = $row["name"];
                    $_SESSION["class"] = $row["class"];
                }
            }
        }
    }
    header("Location: ../home.php");
    
?>