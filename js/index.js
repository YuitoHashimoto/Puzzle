// 使用方法の表示非表示処理
window.onload = ()=>{
    let blockHover = document.getElementsByClassName("main__use__content__box");
    let hideBox = document.getElementsByClassName("hideBox");

   
    for(let i = 0; i<blockHover.length; i++){
        
        blockHover[i].onclick = ()=>{
            for(let i=0 ; i < hideBox.length; i++){
                hideBox[i].style.display = "none";
            }
            hideBox[i].style.display = "block";
        }
    }
}


// head__canvas
window.addEventListener('load', draw, false);
 
function draw(){
    
    
    var r  = document.documentElement.clientHeight/(document.documentElement.clientHeight/30); // 振幅
    var T  = document.documentElement.clientWidth/(document.documentElement.clientWidth/(document.documentElement.clientWidth*0.9)); // 周期
    
    var canvas = document.getElementById('head__canvas');
    var ctx = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = 500;


    // グラデーション
    
    // var g = context.createLinearGradient(10, 200, document.documentElement.clientWidth, 1000);
    // g.addColorStop(0,tomato);
    // g.addColorStop(1,aqua);

    // ctx.fillStyle=g;
    // ctx.fillRect(0,0,300,150)
    
    
    ctx.strokeStyle ='#FFF';
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(canvas.width,600); //始点
    ctx.lineTo(0,600)
 
    for(var x=1; x<=canvas.width; x +=1) {
        var y =-r*Math.sin( (2 *Math.PI/T) * x ); //振幅 * Math.sin( 角速度(2π/周期)*時間 )
        ctx.lineTo(x, y+(canvas.height-40));
        ctx.lineTo(x,600);
        
    }
    // var x=1; x<=canvas.width; x +=1
    
    ctx.closePath();
    ctx.stroke();


    // グラデーション
    
    // var g = context.createLinearGradient(10, 200, document.documentElement.clientWidth, 1000);
    // g.addColorStop(0,tomato);
    // g.addColorStop(1,aqua);

    // ctx.fillStyle=g;
    // ctx.fillRect(0,0,300,150)
 
}
 


// foot__canvas
