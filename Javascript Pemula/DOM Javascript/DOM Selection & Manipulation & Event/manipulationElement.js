// DOM Manipulation adalah istilah yang artinya mengubah element yang diseleksi menggunakan DOM Selection mrnggunakan method method tertentu.

// DOM Manipulation Element :

// DOM Manipulation : innerHTML => mengubah isi element HTML yang diseleksi.
const manp1 = document.getElementById("judul");
manp1.innerHTML = "Maulana Yusuf"; // => isi element yang mempunyai id "judul" diubah paksa menggunakan innerHTML.

const manp2 = document.getElementsByClassName("salam")[0];
manp2.innerHTML = "<h1> element ini telah diubah menjadi tag h1 oleh innerHTML </h1>";
// element yang diseleksi dapat diubah menggunakan tag HTML biasa, tetapi penggunaanya tetap menggunakan tanda petik.


// DOM Manipulation : domSelection.style.<properti> = nilai properti 
// Artinya adalah menambahkan style css ke dalam element yang telah di seleksi.
const manp3 = document.querySelector("#haloMen");
manp3.style.color = "red";
manp3.style.marginTop = "50px";  // Jika propertinya lebih dari satu kata -> menggunakan camelcast


// DOM Manupulation : element.setAttribute() => untuk mengelola sesuatu yang menempel pada tag HTML, contohnya adalah id,class,href pada <a>
const manp4 = document.getElementsByTagName("h5")[0];
manp4.setAttribute("class", "manp4"); // => menambahkan class manp4 pada tag h5 pertama. Perlu diwaspadai, jika sebuah element sudah memiliki class dan ditambahkan class lagi menggunakan method setAttribute maka class yang lama akan ditimpa dengan class yang baru.

// DOM Manipulation : element.getAttribute() => untuk mencari tahu atribut apa yang ada pada element yang sudah diseleksi.
const manp5 = document.getElementById("haloMen");
manp5.getAttribute("id");  // maka hasilnya adalah "haloMen" => ini tidak akan ditampilkan ke layar

// DOM Manipulation : element.removeAttribute() => untuk menghapus atribut yang ada pada element yang sudah diseleksi.
const manp6 = document.querySelector(".link1");
manp6.removeAttribute("style"); // => menghapus atribut style pada element yang mempunyai class link1


// DOM Manipulation : element.classList.add() => untuk menambahkan attribute class pada element yang diseleksi 
const manp7 = document.getElementsByTagName("h1")[0];
manp7.classList.add("manp7");   // Menambahkan class pada tag name h1 yang berada pada indeks pertama

// element.classList.remove() => Untuk menghapus attribute class pada element yang diseleksi
const manp8 = document.getElementsByTagName("div")[1];
manp8.classList.remove("container");  // Menghapus class pada tag name div yang berada di indeks ke 1

// element.classList.toggle() => method ini sedikit spesial karena berfungsi jika element punya class tersebut maka hapus class tersebut, tapi jika element tersebut tidak punya class tersebut maka tambahkan class tersebut.
const manp9 = document.getElementsByTagName("h1")[0];
manp9.classList.toggle("manp7"); // Dicek terlebih dahulu,, jika element manp9 punya class manp7 maka class manp7 akan dihapus dari element manp9 namun jika element manp9 tidak punya class manp7, maka class manp7 akan ditambahkan ke class manp9.
// Karena manp9 mempunyai class manp7 maka class manp7 dihapus dari element manp9..

// element.classList.item(urutan/indeks) => Mencari class yang ada pada element yang diseleksi sesuai urutan (parameter)
const manp10 = document.getElementById("judul1");
console.log(manp10.classList.item(0)); // Mencari class pertama pada element manp10

// element.classList.contains("nama class") => contains menghasilkan dua nilai yaitu true dan false, true jika nama class dari element tersebut ada di element tersebut dan false jika class tidak ada dalam element tersebut.
const manp11 = document.getElementsByTagName("h3")[0];
console.log(manp11.classList.contains("salam")); // Mencari apakah ada class salam di dalam element manp11 jika ada maka true namun jika tidak false
console.log(manp11.classList.contains("doomo")); // Mencari apakah ada class doomo di dalam element manp11 jika ada maka true namun jika tidak false

// element.classList.replace("class lama", "class baru") => mengganti class yang sudah ada menjadi class yang baru.
const manp12 = document.getElementById("judul1");
manp12.classList.replace("konjungan", "methodReplace"); // Mencari class konjungan pada element manp12 lalu diganti dengan class yang baru yaitu methodReplace.























