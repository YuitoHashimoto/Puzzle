<?php
   // データベース接続
   require_once("dbConnect.php");
   session_start();
   unset($_SESSION["id"]);

   if(ISSET($_POST)){
      $loginData = $_POST;
      // 入力情報取得
      $logmail = htmlspecialchars($loginData["mail"]);
      $logPassword = htmlspecialchars($loginData["password"]);        // パスワードハッシュ化
      $hashPassword = hash("md5",$logPassword);

      $result = $db->query("SELECT * FROM acountData WHERE mail='{$logmail}'");

      //ログイン
      if($result){
            if($result -> rowCount()){
               foreach($result as $row){
                  $password = $row["pass"];
                  $_SESSION["id"] = $row["id"];
                  $_SESSION["name"] = $row["name"];
                  $_SESSION["class"] = $row["class"];
               }
               if($password == $hashPassword){
                  print "ログインしました。";
                  header("Location: ../home.php");
               }else{
                  print "ログイン失敗しました。";
               }
            }
      }
   }
?>