<?php 
    define("title","profile");
    require_once "header.php";   
    
    session_start();
    $uClass = $_SESSION["class"];
    $uName = $_SESSION["name"];
?>
<link rel="stylesheet" href="css/profile.css">
<body>
    <header class="head">
        <div class="head__box">
            <img class="head__box__icon" src="img/userIcon.svg" alt="ユーザーアイコン">
            <p class="head__box__content">
                <span><?=$uClass?><span><br>
                <?=$uName?>
            </p>
        </div>
        <div class="head__nav">
            <form action="" method="post">
                <ul class="head__nav__list">
                    <li class="head__nav__list__button" id="profileTag">プロフィール<div class="underLine" id="underLine"></div></li>
                    <li class="head__nav__list__button" id="qTag">質問</li>
                    <li class="head__nav__list__button" id="answerTag">解答</li>
                    <li class="head__nav__list__button" id="bookTag">ブックマーク</li>
                </ul>
            </form>
        </div>
    </header>
    <?php
        require_once "profileMain.php";
        require_once "homeMain.php";
        require_once "footer.php"; 
    ?>
    <script src="js/profile.js"></script>
    <script src="js/footer.js"></script>
</body>
</html>