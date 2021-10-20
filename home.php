<?php 
    define("title","home");
    require_once "header.php"; 
?>
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/ressF.css">
<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
<body>
<div class="txtSubBox">
    <form class="txtSub" action="php/mess.php" method="POST">
        <div class="txtSub__title">
            <input type="text" name="title" placeholder="タイトル">
            <button type="button" id="cancel"><img src="img/cancel.svg" alt=""></button>
        </div>
        <textarea name="txt" id="messTxt" placeholder="疑問点は何ですか？"></textarea>
        <button id="messSub">投稿</button>
    </form>
    <script src="js/mess.js"></script>
</div>

<header>
    <div class="headerContent">
        <p class="logo"><img src="img/logo.svg"></p>
        <p class="input"><input type="text" class="txt"></p>
    </div>
    <div class="header">
        <div class="head">
            <li class="menu">HTML</li>
        </div>

        <div class="head">
            <li class="menu">CSS</li>
        </div>

        <div class="head">
            <li class="menu">JS</li>
        </div>
        
        <div class="head">
            <li class="menu">PHP</li>
        </div>

        <div class="head">
            <li class="menu">CSS</li>
        </div>

        <div class="head">
            <li class="menu">JS</li>
        </div>
        
        <div class="head">
            <li class="menu">PHP</li>
        </div>
        
    </div>
</header>
<?php 
    require_once "homeMain.php"; 
    require_once "footer.php";
?>
    <button id="fab" type="button">
        <i class="fas fa-plus"></i>
    </button>
<script src="js/footer.js"></script>
<script src="js/sub.js"></script>
</body>
</html>