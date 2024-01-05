let ht = document.getElementById("ht");
let hl = document.getElementById("hl");
let hd= document.getElementById("hd");
let hn = document.getElementById("hn");

ht.addEventListener("click", function(){
    window.open("http://localhost/wikischool/teams.php", "_self");
})

hl.addEventListener("click", function(){
    window.open("http://localhost/wikischool/outlook.php", "_self");
})

hd.addEventListener("click", function(){
    window.open("http://localhost/wikischool/onedrive.php", "_self");
})

hn.addEventListener("click", function(){
    window.open("http://localhost/wikischool/onenote.php", "_self");
})