console.log("universal script");
const root=document.querySelector(":root");
const setTheme=(Theme)=>{
    console.log('hi im setting the theme');
    if(Theme=="d"){
        curTheme="d";
        root.style.setProperty("--light-color0","black");
        root.style.setProperty("--dark-color0","white");
        root.style.setProperty("--light-color1"," rgb(49, 49, 49)");
        root.style.setProperty("--dark-color1","rgb(148, 144, 144)");
        root.style.setProperty("--light-color2","rgb(42, 51, 40)");
        root.style.setProperty("--dark-color2","rgb(212, 212, 212)");
        root.style.setProperty("--main-heading","rgb(3, 102, 3)");
        localStorage.setItem("Theme","d");
    }
    else{
        curTheme="l";
        root.style.setProperty("--light-color0","white");
        root.style.setProperty("--dark-color0","black");
        root.style.setProperty("--dark-color1"," rgb(49, 49, 49)");
        root.style.setProperty("--light-color1","rgb(148, 144, 144)");
        root.style.setProperty("--dark-color2","rgb(42, 51, 40)");
        root.style.setProperty("--light-color2","rgb(212, 212, 212)");
        root.style.setProperty("--main-heading","rgb(62, 177, 62)");
        localStorage.setItem("Theme","l");
    }
}

const starterTheme=()=>{
    console.log("started");
        console.log("called");
    if(localStorage.getItem("Theme")==null)
    {
        localStorage.setItem("Theme","l");
    }
    else if(localStorage.getItem("Theme")=="d")
    {
        setTheme("d");
    }
    else if(localStorage.getItem("Theme")=="l")
    {
        setTheme("l");
    }
};

starterTheme();