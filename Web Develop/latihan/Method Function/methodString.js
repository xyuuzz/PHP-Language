// SubString => berfungsi menampilkan string dari karakter awal pada parameter pertama ke berapa sampai ke karakter akhir + 1 pada parameter kedua kaberapa 
var str = "Aku Seorang Siswa";
console.log(str.substring(4,11));   // 4 terletak di huruf 's' sedangkan 11 terletak di huruf g + 1

// Substr => berfungsi manampilkan string dari karakter awal pada parameter pertama dan panjang karakter pada parameter kedua
var str = "Aku Bekerja di Kantor";
console.log(str.substr(0,3));   // 0 merupakan huruf 'A' sedangkan 3 adalah panjang dari huruf 'Aku'

// replace => berfungsi mengganti sebuah kata di dalam string
var str = "Aku Bolos Sekolah";
console.log(str.replace("Bolos", "Masuk")); // Parameter pertama adalah kata yang ingin diganti, sedangkan parameter kedua adalah kata ganti dari kata pada parameter pertama


// toUpperCase => Menjadikan huruf pada string menjadi besar semua(CAPS LOCK)
var str = "Aku Senang Sekali";
console.log(str.toUpperCase());

// toLowerCase => Menjadikan huruf pada string menjadi kecil semua (lawan dari toUpperCase)
var str = "Wow Primitif";
console.log(str.toLowerCase());
