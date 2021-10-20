<?php

    require_once("dbLocal.php");
    try
    {
        $db = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST.";charset=".CHARSET,USERNAME,USERPASS);
    }
    catch(PDOExeption $e)
    {
        echo "DB接続エラー" . $e->getMessage();
    }

?>