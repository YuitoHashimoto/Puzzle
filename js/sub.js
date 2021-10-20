let fab = document.getElementById("fab");
let cancel = document.getElementById("cancel");

fab.onclick = ()=>{
    document.querySelector(".txtSubBox").style.display = "flex";
    console.log("ok");
}

cancel.onclick = ()=>{
    document.querySelector(".txtSubBox").style.display = "none";
    console.log("hidden");
}