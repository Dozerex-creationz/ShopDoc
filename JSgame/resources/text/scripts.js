var count=0;
var speed=4;
var jumpSpeed=0.8;
var run=0;
var start=0;
var score=0;
const scoreEle=document.getElementById("score");
const char=document.getElementById("character");
const obs=document.getElementById("obstacle");
function gameOver(){
        var charStyle=window.getComputedStyle(char);
        var obsStyle=window.getComputedStyle(obs);
        var charPos=parseFloat(charStyle.getPropertyValue("top"));
        var obsPos=parseFloat(obsStyle.getPropertyValue("left"));
        if(run==0 && (obsPos>=convertRemToPixels(1.5) && obsPos<=convertRemToPixels(3)))
        {
            if(charPos>=convertRemToPixels(14.89)){
                alert("Sorry!! Game Over!");
                window.location.reload();
            }
        }
        else if(run==0){
            score+=1;
            scoreEle.innerHTML="Your score: "+score; 
        }
}
function game(){
    obs.classList.add("anim");
    document.querySelector(".game").addEventListener("click",()=>{
        console.log(run+""+count);
        if(run==0 && count==0){
        char.classList.add("jump");
        setTimeout(function(){
            char.classList.remove("jump");
        },jumpSpeed*1000);}
    });
    setTimeout(change,15000);
}
function StopGame(){
    obs.classList.remove("anim");
    run=1;
}

function change(){
    const root=document.getElementById("root");
    if(count==0){
    StopGame();    
    root.classList.add("trans");
    count=1;
    }
    else{
        root.classList.remove("trans");
        run=0;
        count=0;
        game();
    }
}

function check(){
    const answer=document.querySelector( 'input[name="answer"]:checked').value;
    if(answer=="right"){
        console.log("hooray! right answer");
    }
    else{
        console.log("sorry!!!, incorrect answer");
        if(speed >0.2){
        speed-=(speed*0.3);
        jumpSpeed-=(jumpSpeed*0.2)
        obs.style["-webkit-animation-duration"]=speed+"s";
        char.style["-webkit-animation-duration"]=jumpSpeed+"s";
        }
    }
    answer.checked = false;
    change();
}
function convertRemToPixels(rem) {    
    return rem * parseFloat(getComputedStyle(document.documentElement).fontSize);
}

document.addEventListener("click",()=>{
    if(start==0){
        game();
        setInterval(gameOver,10);
        start=1;
    }
});
