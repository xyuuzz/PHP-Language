// Cara Penulisan Object secara umum

var contohObjc = {
    nama        : "Maulana Yusuf",
    pekerjaan   : "Siswa SMK",
    hobi        : ["Bermain Gitar, Menonton Kartun Jepang"],
    umur        : 15,
    perkenalan  : function() {
        return "Perkenalkan nama saya " + this.nama + ("\n") +
                "Umur saya adalah " + this.umur + " tahun\n" +
                "Saya mempunyai hobi + " + this.hobi.join(" dan ")}
}

// Cara penulisan Object pada JS

// 1. Dengan cara literal => Cara biasa
var objLiteral = {
    nama            : "Galih",              // Mendeklarasikan isi properti secara manual
    alamat          : "JL.Cinta Abadi",
    email           : "Galuhsetya@gmail.com"
}

// 2. Dengan menggunakan fungsi deklarasi 
function objDeclaration (nama, alamat, email) { // => Meletekan object di dalam fungsi deklarasi
    var object      = {};       // Mendeklarasikan var object kosong terlebih dahulu
    object.nama     = nama;     // Mengisikan isi properti menurut parameter dari fungsi
    object.alamat   = alamat;
    object.email    = email;
    return object;      // => Mengembalikan isi object
}
var objDeclaration2 = objDeclaration("Maulana", "Soekarno Hatta", "maulana@gmail.com"); 

// 3. Dengan cara Constructor => Cara ini hampir mirip dengan fungsi deklarasi
function ObjectCons (nama, alamat, email) { // => Meletakan object didalam fungsi, mirip seperti fungsi deklarasi
    // var this = {}      => Tidak perlu mendeklarasikan this lagi
    this.nama     = nama;       // Cukup menuliskan this.(nama properti) = (nilai);
    this.alamat   = alamat;
    this.email    = email;
    // return this        => Dan tidak perlu mengembalikan nilai this
}

var newObjectCons = new ObjectCons("yusuf", "Tambak Dalem", "yusuf@gmail.com");
// Karena dua hal itu sudah di urus oleh keyword "new" yang diletakan sebelum penulisan fungsi.
// Jika tidak menuliskan keyword "new" maka js akan menganggap fungsi itu adalah fungsi deklarasi.
