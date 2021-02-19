// Tugas Sandika Galih membuat aplikasi sederhana pengelolaan penumpang angkot

var penumpang = [];
jmlPenumpang = 0;


var tambahPenumpang = function (nama, penumpang) {
    // Jika Angkot Kosong
    if (penumpang.length == 0) {
        // Tambah penumpang di awal array
        penumpang.push(nama);
        // Kembalikan isi array dan keluar dari function
        return penumpang;
    } else {
        for (i = 0; i < penumpang.length; i++) {
            if (penumpang[i] == undefined) {
                penumpang[i] = nama;
                return penumpang;                
            } else if (penumpang[i] == nama) {
                console.log("Maaf Penumpang bernama " + nama + " sudah ada didalam angkot\n Harap cari angkot lain");
                return penumpang;                
            } else if ( i == penumpang.length - 1 && penumpang[i] != undefined){
                penumpang.push(nama);
                return penumpang;                
            }
        } 
    }
    
}

var hapusPenumpang = function (nama, penumpang) {
    if (penumpang.length == 0) {
        console.log("Angkot Masih Kosong");
        return penumpang;
    } else {   
        for (a = 0; a < penumpang.length; a++) {
            if (nama == penumpang[a]) {
                penumpang[a] = undefined;
                return penumpang;
            } else if (a == penumpang.length - 1){
                console.log("Tidak ada penumpang bernama " + nama + " didalam angkot");
                return penumpang;
            }
       }
    }
}