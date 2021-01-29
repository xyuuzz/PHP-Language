const containers = document.getElementsByClassName("container")[0];
const card = document.getElementsByClassName("card")[0];
const close = document.getElementsByClassName("close")[0];


// DOM Selection
// close.addEventListener("click", function() {

//     containers.removeChild(card);

// });

// DOM Transveral
const cardList = document.querySelectorAll(".card");
const closeList = document.querySelectorAll(".close");

// closeList.forEach(function(a) {
//     // parameter a disini sama seperti = closeList[...]
//     a.addEventListener("click", function(event) {
//         // event disini mewakili closeList dengan index yang dilooping
//         // atau event bisa juga diartikan closeList[...]
//         event.target.parentElement.style.display = "none";
//         // target.parentElement disini cara membacanya : tolong targetkan parent element dari event
//         // jadi fungsi nya adalah mencari parent element dari argument event.

//         // parent element adalah method untuk mencari induk dari suatu element
//     });

// });

// Method pada DOM Transveral 
// 1. parentNode                => Node
// 2. parentElement             => Element
// 3. nextSibling               => Node
// 4. nextElemenSibling         => Element
// 5. priviousSibling           => Node
// 6. priviousElementSibling    => Element   


// Event Bubling
// Event Bubling adalah keadaan ketika kita memasang suatu event ke dalam parent element dan child element, maka saat event child element tersebut aktif, event parent element pun juga ikut aktif.
// misal : 
// a adalah parent element dari b
// event element b aktif
// karena event element b aktif, maka event element a sebagai parentnya juga ikut aktif.

// membuat close click dengan konsep event bubling 
const container = document.querySelector(".container");

container.addEventListener("click", function(event) {
    // target berfungsi sebagai pemberi tahu apa yang di klik oleh si event(mouse) tersebut
    if (event.target.className == "close") { // jika yang di klik adalah element yang memiliki class close 
        event.target.parentElement.style.display = "none"; // jalankan code berikut
    }
    event.preventDefault();
    event.stopPropagation();
});

// jika kita menggunakan syntax diatas, bukan hanya terlihat lebih simple, namun juga ketika kita menambahkan card langsung didalam console browser nya, kita tidak akan mengalami eror apapun..















