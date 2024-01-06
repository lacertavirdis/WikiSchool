let komunikat = document.getElementById("komunikat");
let art1 = document.querySelector("article:first-of-type");
let sec1 = document.querySelector("section:first-of-type");

const timeout = setTimeout(kom, 500);
function kom(){
    komunikat.style.display = "flex";
}

komunikat.addEventListener("click", function(){
    komunikat.style.display = "none";
    art1.style.display = "flex";
    sec1.style.display = "flex";
})

art1.addEventListener("click", function(){
    window.open("http://localhost/wikischool/applications.php", "_self");
})