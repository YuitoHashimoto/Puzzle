document.getElementById("messSub").onclick = ()=>{
    let txtArea = document.getElementById("messTxt").value.replace(/(\n|\r)/g, "<br>");;
    document.getElementById("messTxt").value = txtArea;
}