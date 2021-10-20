<?php 
    define("title","about");
    require_once "header.php"; 
?>
<link rel="stylesheet" href="css/index.css">
<body>
<header class="head">
    <canvas id="head__canvas"></canvas>
    <div class="head__all">
        <div class="head__logo">
            <h1>puzzle</h1>
            <p><img src="img/indexLogo.svg" alt="Puzzleロゴ"></p>
        </div>
        <div class="head__btn">
            <p><a href="register.html">新規登録<img src="img/arrow.svg" alt="矢印"></a></p>
            <p><a href="login.html">ログイン<img src="img/arrow.svg" alt="矢印"></a></p>
        </div>
    </div>
</header>

<main class="main">
    <div class="main__about">
        <h2>質問、悩みが聞いて解決。</h2>
        <p>
        WEBサイトなどを制作していく上で先輩に質問したい。<br>
        だけど、誰に聞けばいいかわからないし、質問する機会がない。<br>
        先輩が何が得意でどういう技術を持ってるかわからない。<br>
        そんな質問、悩みを交流というかたちで解決するサービスです。
        </p>
        <a href="">puzzleについて<img src="img/arrowGrey.svg" alt="矢印"></a>
    </div>
    <div class="main__merit">
        <h2 class="title">Merit</h2>
        <p class="subtitle">puzzleを使うと、こんなメリットが！！</p>
        <ul>
            <li>
                <img src="img/light.svg" alt="電球">
                <p>悩みが解決して、実力up</p>
            </li>
            <li>
                <img src="img/light.svg" alt="電球">
                <p>話すきっかけになる</p>
            </li>
            <li>
                <img src="img/light.svg" alt="電球">
                <p>降雨流の幅が広がる</p>
            </li>
        </ul>
    </div>
    <div class="main__use">
        <h2 class="title">How&nbsp;to&nbsp;use</h2>
        <p class="subtitle">puzzleの使用方法</p>
        <div class="main__use__content">
            <div class="main__use__content__box">
                <h3>01</h3>
                <img src="img/ideaHuman.svg" alt="人">
                <p class="imgOne">質問を投稿する</p>
            </div>
            <div class="main__use__content__box">
                <h3>02</h3>
                <img src="img/ideaHuman.svg" alt="人">
                <p class="imgTwo">コンタクトをとる</p>
            </div>
            <div class="main__use__content__box">
                <h3>03</h3>
                <img src="img/ideaHuman.svg" alt="人">
                <p class="imgThree">教えてもらう</p>
            </div>
            <div class="main__use__content__box">
                <h3>04</h3>
                <img src="img/ideaHuman.svg" alt="人">
                <p class="imgFour">解決！！</p>
            </div>
        </div>
        <div class="main__use__point">
            <div class="main__use__point__one hideBox">
                <p class="hideBox__title"><span>01</span>質問を投稿する</p>
                <p class="hideBox__content">
                先輩（解答する人）から通知がきます。<br>
                そこから会話で会う日などを決めます。
                </p>
            </div>
            <div class="main__use__point__two hideBox">
                <p class="hideBox__title"><span>02</span>コンタクトをとる</p>
                <p class="hideBox__content">
                先輩（解答する人）から通知がきます。<br>
                そこから会話で会う日などを決めます。
                </p>
            </div>
            <div class="main__use__point__three hideBox">
                <p class="hideBox__title"><span>03</span>教えてもらう</p>
                <p class="hideBox__content">
                先輩（解答する人）から通知がきます。<br>
                そこから会話で会う日などを決めます。
                </p>
            </div>
            <div class="main__use__point__four hideBox">
                <p class="hideBox__title"><span>04</span>解決！！</p>
                <p class="hideBox__content">
                先輩（解答する人）から通知がきます。<br>
                そこから会話で会う日などを決めます。
                </p>
            </div>

        </div>
    </div>
    <div class="main__acount">
        <h2 class="title">Account</h2>
        <p class="subtitle">puzzleの使用方法</p>
        <ul>
            <li>
                <a href="/register.html">
                Sign&nbsp;up<br>
                -新規登録-
                </a>
            </li>
            <li>
                <a href="/login.html">
                Sign&nbsp;in<br>
                -ログイン-
                </a>
            </li>
        </ul>
    </div>
</main>
<script src="js/index.js"></script>
</body>
</html>