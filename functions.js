window.onload = init;
function init(){
    var artists = document.getElementsByClassName("artist");
    for(i=0;i<artists.length;i++){
        artists[i].addEventListener("mouseover", fadeInText);
        artists[i].addEventListener("mouseleave", fadeOutText);
    }
}

function fadeInText(){
    this.getElementsByTagName("p")[0].style.visibility = "visible";
    this.getElementsByTagName("p")[0].style.fontSize = "150%";
} 
function fadeOutText(){
    this.getElementsByTagName("p")[0].style.visibility = "hidden";
}
