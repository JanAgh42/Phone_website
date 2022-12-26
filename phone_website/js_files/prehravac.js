let hudba, link;
function rozhodni(c, d){
    link = c;
    hudba = d;
    prehravanie();
}

function prehravanie(){
    if(hudba.paused){
        hudba.play();
        link.innerHTML = "zastaviť";
    }
    else{
        hudba.pause();
        hudba.currentTime = 0;
        link.innerHTML = "prehrať";
    }
}