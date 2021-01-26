// Array -> Method length
var arr1 = ["Aku", "Anak", "ke", 1, true];  // Index array dimulai dari angka 0
console.log(arr1.length);  // => 5, dihitung dari angka 1
console.log(arr1[0]);   // => "Aku"

// Fungsi Didalam array
function fungsiArr(name) {
    return "Fungsi didalam array\n" + name;     // Untuk mengembalikan nilai ke fungsi
}
var arr2 = ["Fungsi", 1, fungsiArr("Haloo!")];  // Memanggil fungsi
console.log(arr2[2]);    // Menampilkan isi fungsi ke layar

// Array didalam array atau array multidimensi
var arr3 = ["Ini", "adalah", ["array", "multi", "dimensi"], true];
console.log(arr3[2][2]);    // => dimensi
// arr3[2] => ["array", "multi", "dimensi"]
// arr3[2][2] => "dimensi";

// Array   => Manipulasi Array dengan method
// a. method join => untuk menampilkan array menjadi string ke layar
var arr4 = ["Namaku", "Adalah", "Yusuf"];
console.log(arr4);  // Tanpa method join => ["Namaku", "Adalah", "Yusuf"]
console.log(arr4.join(" - "));    // Dengan method join => Namaku - Adalah - Yusuf

// b. method push dan pop
// push => Menambahkan elemen array di bagian paling akhir
arr4.push("Salam", "kenal");    // method push bisa diisi data lebih dari 1 
console.log(arr4.join(" - "));
// pop => menghapus elemen array di bagian paling akhir
arr4.pop();     // method push hanya bisa menghapus elemen array 1 kali
arr4.pop();     // Jadi jika ingin menghapus elemen lebih dari 2 harus dituliskan lagi
console.log(arr4.join(" - "));  // elemen array "Salam" dan "kenal" dihapus 
var arr4 = ["Namaku", "Adalah", "Yusuf"];

// c. method unshift dan shift
// unshift => menambahkan elemen array di bagian depan
arr4.unshift("Halo", "Semua", 10);  // Sama seperti method push, unshift juga dapat diisi data lebih dari 1
console.log(arr4.join(" - "));
// shift => menghapus elemen array di bagian depan
arr4.shift();   // Sama seperti pop, shift hanya dapat menghapus 1 elemen saja namun di bagian depan
console.log(arr4.join(" - "));
var arr4 = ["Namaku", "Adalah", "Yusuf"];

// d. splice dan slice
// splice => Menambahkan dan menghapus bagian array(bebas dimanapun)
arr4.splice(0, 1, "Nama", "saya");
console.log(arr4.join(" - ")); // => namaku dihilangkan dan diganti oleh nama saya
// slice => Mengiris array dan membentuk array baru dar array yang diiris
var sliceArr = arr4.slice(1,3);
console.log(sliceArr.join(" - "));

// e. sort => mengurutkan elemen array dari terkecil hingga terbesar
var angka = [3,1,6,7,4,2,9,0];
angka.sort();
console.log(angka.join(" - "));
// Jika di elemen array ada angka puluhan atau lebih maka menggunakan fungsi ascending
var angka = [4,8,37,86,91,2];
angka.sort(function(a,b) {
    console.log("ini nilai " + a + " dan " + b);
    return a - b;   // => fungsi ascending => mengurut menaik   (return a - b);
})                  // dan lawanya fungsi descending => menurun (return b - a)
console.log(angka.join(" - "));

// f. Find dan Filter 
// find, mencari sebuah elemen array lalu menampungya ke dalam variabel dan menampilkanya 
// (hanya bisa menampilkan satu elemen array)
var senang = [1,3,5,4,9,2,7,19];
var senangFind = senang.find(function(e) {
    return e > 6;   
})
console.log(senangFind);       // 9 nilai 19 tidak dianggap karena sudah menemukan nilai 9 dahulu
// filter, sama seperti find namun filter menampilkanya dalam bentuk array
var SenangFilter = senang.filter(function (e) {
    return e > 4;
})
console.log(SenangFilter);  //  =>  [5,9,7,19] karena > 4

// g. forEach => artinya adalah ulangi setiap, forEach adalah looping yang tergantung pada panjang(length) tipe data yang ingin di looping dan didalam method forEach terdapat function untuk menginisiasi statement yang ingin dijalankan oleh array tsb. 
// misal array yang memiliki length 4, maka forEach akan looping sampai array tersebut keluar semua.

arr = ["aku", "seorang","pelajar"];
arrGab = "";
arr.forEach(function (e, i) {
    arrGab += e + " ";
    console.log(i);     // menghasilkan bil 0 - 2 yang artinya ada 3 kali looping sama seperti length array arr.
});
console.log(arrGab);    // => aku seorang pelajar