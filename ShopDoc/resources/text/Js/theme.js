const changer=document.getElementById("theme");
let curTheme=localStorage.getItem("Theme");

changer.addEventListener("click",()=>{
    console.log('hi im called');
    if(curTheme=="l"){
        curTheme="d";
        root.style.setProperty("--light-color0","black");
        root.style.setProperty("--dark-color0","white");
        root.style.setProperty("--light-color1"," rgb(49, 49, 49)");
        root.style.setProperty("--dark-color1","rgb(148, 144, 144)");
        root.style.setProperty("--light-color2","rgb(42, 51, 40)");
        root.style.setProperty("--dark-color2","rgb(212, 212, 212)");
        root.style.setProperty("--lime","rgb(148, 144, 144)");
        root.style.setProperty("--main-heading","rgb(3, 102, 3)");
        localStorage.setItem("Theme","d");
    }
    else{
        curTheme="l";
        root.style.setProperty("--light-color0","white");
        root.style.setProperty("--dark-color0","black");
        root.style.setProperty("--dark-color1"," rgb(49, 49, 49)");
        root.style.setProperty("--light-color1","rgb(212, 212, 212)");
        root.style.setProperty("--dark-color2","rgb(42, 51, 40)");
        root.style.setProperty("--light-color2","rgb(148, 144, 144)");
        root.style.setProperty("--main-heading","rgb(62, 177, 62)");
        root.style.setProperty("--main-heading","rgb(62, 177, 62)");
        localStorage.setItem("Theme","l");
    }
});

