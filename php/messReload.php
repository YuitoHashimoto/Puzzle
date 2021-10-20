<?php

    // データベース接続
    function makeMess() {
        require_once("dbConnect.php");
        $result = $db->query("SELECT * FROM messData ORDER BY messId DESC");
        while($catch = $result->fetch(PDO::FETCH_ASSOC)) {
            $title = $catch["title"];
            $mess = $catch["mess"];
            // 要素の生成
        
            echo '<div class="question">';
            echo '<div class="title">';
            echo '<p><img src="img/human.svg"></p>';
            echo '<p class="title-txt">'.$title.'</p>';
            echo '</div>';    
            echo '<p class="content">'.$mess.'</p>';
            echo '<div class="btn">';
            echo '<p><button type="button">+Me too</button></p>';
            echo '<p><button type="button">+Answer</button></p>';
            echo '<p><button type="button">+Bookmark</button></p>';
            echo '</div>';
            echo '</div>';
        }
    }
    makeMess();
?>