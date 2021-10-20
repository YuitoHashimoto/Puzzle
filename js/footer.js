// window.onload = ()=>{
    // タイトル取得
    let title = document.title;
    console.log(document.querySelector(".humanPath"));

    // パス取得
    let homePage = document.querySelector(".homePath");
    let bookPage = document.querySelectorAll(".bookPath");
    let profilePage = document.querySelectorAll(".humanPath");
    let bellPage = document.querySelectorAll(".bellPath");
    let configPage = document.querySelectorAll(".configPath");

    console.log(profilePage);

    if(title.match(/home/)){
        homePage.style.fill = "#2863BC";
    }

    if(title.match(/profile/)){
        profilePage.forEach(path => {
            path.style.fill = "#2863BC";
        });
    }
// }