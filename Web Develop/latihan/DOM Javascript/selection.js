// Mengunakan DOM selection getElementById()
const judul = document.getElementById("judul");
judul.style.color = "red";      // Menambahkan selektor css pada js menggunakan DOM
judul.style.backgroundColor = "#ccc";   // untuk selektor yang mempunyai 2 kata, kita menggunakan camelcast.
// method ini menghasilkan element HTML => tunggal


// Menggunakan DOM Selection getElementsByTagName()
const desk = document.getElementsByTagName("li");   
for (a = 0; a < desk.length; a++) {     // Karena method getElementsByTagName() bersifat jamak => HTMLColection
    desk[a].style.color = "aqua";       // Sehingga bentuknya adalah array, maka jika ingin menambahkan
    if (a == 1) {                       // selektor yang sama, kita harus menggunakan looping
        desk[a].innerHTML = "Teks ini telah diubah";    // Cara mengubah teks HTML menggunakan DOM lewat js
        desk[a].style.color = "blue";
    }
}    
// method ini menghasilkan jamak berbentuk array (HTMLCollection) => Hal ini juga berlaku pada 1 tagname


// Menggunakan DOM Selection querySelector() 
const selektor = document.querySelector("li:nth-child(1)"); // berisi selektor
// nth-child() adalah sebuah psedeu class pada css yang artinya -> memilih anak ke ... (dimulai dari angka 1)
selektor.innerHTML = "Ini adalah contoh query selector"; // innerHTML adalah method yang digunakan untuk mengubah isi tag HTML.
// method ini menghasilkan element yang berarti tunggal.


// Menggunakan DOM Selection querySelectorAll()
const selektorAll = document.querySelectorAll("li");
selektorAll.forEach(function (a,b) {
    selektorAll[b].style.backgroundColor = "green";
    selektorAll[b].style.marginBottom = "10px";
});
// querySelectorAll() berbentuk Nodelist => array jadi untuk mengakses nya kita membutuhkan indeks.


// Mengubah Node Root pada DOM
// document => scope node root default. Kita bisa memperkecil scope nya dengan mengubah text document nya dengan yang lain. Contoh :
const bagh5 = document.querySelector(".b1"); // bagh5 berisi => tag selector kelas b1 dengan node root document atau public atau general yang artinya kita mencari selector .b1 di syntax HTML secara global

const bagh52 = bagh5.getElementsByTagName("h5")[0]; // bagh52 berisi h5 pada indeks ke 0 dengan node root bagh5 yaitu tag selector kelas b1 yang artinya kita hanya mencari tag h5 didalam bagh5

bagh52.innerHTML = "Bagian ini diubah dengan cara mengubah node root.";
























