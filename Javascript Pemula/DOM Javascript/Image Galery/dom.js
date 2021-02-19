// Membuat Image Gallery 

const bigbos = document.querySelector(".big");
const thumbnail = document.querySelector(".thumbnail");
const thumbnails = document.querySelectorAll(".thumbnail");


thumbnail.addEventListener("click", function(event) {

    if(event.target.className == "child") {
        const src = event.target.getAttribute("src");
        bigbos.setAttribute("src", src);
    }

    bigbos.classList.add("fadeIn");
    setTimeout(function() {
        bigbos.classList.remove("fadeIn");
    }, 500);



});  