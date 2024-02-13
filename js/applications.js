let ht = document.getElementById("ht");
let hl = document.getElementById("hl");
let hd= document.getElementById("hd");
let hn = document.getElementById("hn");

ht.addEventListener("click", function(){
    window.open("http://localhost/wikischool/php/teams.php", "_self");
})

hl.addEventListener("click", function(){
    window.open("http://localhost/wikischool/php/outlook.php", "_self");
})

hd.addEventListener("click", function(){
    window.open("http://localhost/wikischool/php/onedrive.php", "_self");
})

hn.addEventListener("click", function(){
    window.open("http://localhost/wikischool/php/onenote.php", "_self");
})