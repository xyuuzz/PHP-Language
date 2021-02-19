// DOM Events

// Events pada javascript mempresentasikan sebuah kejadian yang terjadi di dalam DOM, 
// kejadian tersebut bisa dilakukan oleh user ataupun dilakukan secara otomatis oleh API

// Cara "Mendengarkan" Event ada 2 yaitu,
// Event Handler
// Event Handler menggunakan on sebagai kata penghubung, contoh onclick => saat di click maka jalankan fungsi ini
// Event handler menggunakan fungsi sebagai wadah untuk perintah yang mau dijalankan.
// Ada 2 cara menggunakan event handler yaitu :
    // Inline HTML Attribute, yaitu dengan ditulis langsung di file HTML sebagai attribute element
    // element method, yaitu ditulis di file jacascript sebagai method.
// Contoh Event Handler :
// Kita akan mengubah tulisan Hello World saat di klik 

// Menyeleksi element h1
const h1 = document.getElementById("judul");
// membuat element baru
const newChild = document.createElement("h1");
// membuat text baru
const newText = document.createTextNode("Halo Semua");
// menggabungkan text ke dalam element
newChild.appendChild(newText);
// menyeleksi parent node
const judul1 = document.getElementById("judul1");

// menyeleksi ul dan li anak ke-2
const ul = document.getElementsByTagName("ul")[0];
const li2 = document.querySelector("li:nth-child(2)");

// membuat fungsi untuk aksi saat di klik
function event1() {
    judul1.replaceChild(newChild, h1);
    ul.removeChild(li2);
}
// syntax menggunakan event handler on pada js.
h1.onclick = event1; // fungsi tidak usah memakai ()

// 
// 


// addEventListener, memiliki 2 parameter, parameter pertama adalah syarat terjadinya addEventListener seperti click, lalu parameter kedua adalah fungsi yang berisi ekspresi yang akan dijalankan saat addEventListener dijalankan. Cara penggunaan :

let a = 0;
const childB1 = document.querySelector(".b1");
const lastChild = childB1.getElementsByTagName("h5")[1];
const tekan = childB1.querySelector("h1");

tekan.addEventListener("click", function() {
    a += 1;
    const newElement = document.createElement("h5");
    const newText = document.createTextNode("Ini adalah text baru ke-" + a);
    newElement.appendChild(newText);
    childB1.appendChild(newElement);
});

// 
// 


// Berikut adalah macam macam event pada DOM javascript
// Silahkan kunjungi link ini :
// https://developer.mozilla.org/en-US/docs/Web/Events



