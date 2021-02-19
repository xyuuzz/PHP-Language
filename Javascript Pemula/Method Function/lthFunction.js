// 1
function hitungVolume (a, b) {
    var volumeA, volumeB, totalVolume;

    volumeA = a * a * a;
    volumeB = b * b * b;
    totalVolume = volumeA + volumeB;
    return totalVolume;

}
console.log(hitungVolume(10, 15));

// 2 
function tambah() {
    var hasil = 0;
    for (i = 0; i < arguments.length; i++) {       
        hasil += arguments[i];                     
    }
    return hasil;
    // .length dimulai dari angka 1
    // array dimulai dari angka 0
}

var hasil = tambah(2, 6, 10);
console.log(hasil);

// 3 => Variabel Scope
var a = 1;   // Windows Scope / gblobal scope
function tes () {
    var a = 5;
    console.log(a);         //Name Conflict
    console.log(window.a)   // Mengacu pada var a global
}
tes()
console.log(a);             // Name Conflict
// 3.b

function tesB (a, b) {
    return a + b;
}
function sampleA(a, b) {
    return a * b;
} 
function sampleB(a, b) {
    return a * b;
}
console.log(tesB(sampleA(5, 10), sampleB(10, 50)));     // Function yang memiliki argumen function

// 4 => Fungsi Rekursif
function mundur(i) {
    if (i === 0) {
        return;
    }       // => Base Case
    console.log(i);     // => Menampilkan fungsi
    return mundur(i - 1);   // Mengembalikan nilai fungsi itu sendiri.
}
mundur(10);

// 4.b => Faktorial pada Fungsi Rekursif
function faktorial(n) {
    if (n === 0) return 1;              
        return n * faktorial(n - 1);        // Rumus Faktorial
}
console.log(faktorial(5));              // Memanggil dan Mengeprint Fungsi

// 5  => Contoh Fungsi Deklarasi
Nama ("Yusuf");    
function Nama (name) {
    console.log("Halo " + name + "\nMerupakan fungsi deklarasi-");
}  // Pada Fungsi deklarasi, fungsi dapat dipanggil terlebih dahulu sebelum dideklarasikan.

// 5.b  => Contoh Fungsi Ekspresi
var Nama = function (name) {
            console.log("Halo " + name + "\nMerupakan fungsi ekspresi-");
        }
Nama("Yusuf");  // => Pada fungsi ekspresi, fungsi harus dideklarasikan terlebih dahulu
                // Sebelum di panggil.





