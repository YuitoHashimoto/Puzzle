<?php
    // データベース接続
    require_once("dbConnect.php");
    session_start();
    unset($_SESSION["id"]);

    if(ISSET($_POST)){
        $newUserData = $_POST;
        $newMail = htmlspecialchars($newUserData["mail"]);
        $newPass = htmlspecialchars($newUserData["password"]);
        $keyPass = hash("md5",$newPass);
        $db->query("INSERT INTO `acountData`(`mail`,`pass`,`name`,`class`) VALUES ('{$newMail}','{$keyPass}','','');");

        // 登録したユーザーデータのIDを赤署にセット
        $result = $db->query("SELECT * FROM acountData WHERE mail='{$newMail}'");
        if($result){
            if($result -> rowCount()){
            foreach($result as $row){
                $_SESSION["id"] = $row["id"];
            }
        }
    }
}

header("Location: ../registerClass.html");

print $_SESSION["id"];

?>