// window.onload = ()=>{
    let underLine = document.getElementById("underLine");
    let profileTag = document.getElementById("profileTag");
    let qTag = document.getElementById("qTag");
    let answerTag = document.getElementById("answerTag");
    let bookTag = document.getElementById("bookTag");

    profileTag.onclick = ()=>{
        underLine.style.left = "0";
        document.getElementById("homeMain").style.display = "none";
        document.getElementById("profileMain").style.display = "block";
    }
    qTag.onclick = ()=>{
        underLine.style.left = "152px";
        document.getElementById("profileMain").style.display = "none";
        document.getElementById("homeMain").style.display = "block";
        document.getElementById("homeMain").style.paddingTop = "0";
        document.getElementById("homeMain").style.paddingBottom = "128px";
        document.getElementById("fab").style.display = "none";

    }
    answerTag.onclick = ()=>{
        underLine.style.left = "304px"
    }
    bookTag.onclick = ()=>{
        underLine.style.left = "456px";
    }

    
// }