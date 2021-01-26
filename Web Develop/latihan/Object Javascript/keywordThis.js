// Keyword Spesial this.

// this itu sendiri

var a = 100;
console.log(this);  // window
console.log(window === this); // true, berartii => scope global = this = windows (dalam scope global) 
console.log(a);


// this pada fungsi deklarasi
function thisFc () {
//  this didalam fungsi deklarasi
    console.log(this); // => mengembalikan nilai window
    console.log("halo => fungsi deklarasi");
}
// thisFc();       
window.thisFc();    // sama saja dengan yang di atas karena dia scope nya adalah global
this.thisFc();      // Jadi saya juga bisa menulis seperti ini..
// Jadi, this pada fungsi deklarasi mengembalikan object global (window)


// this pada object literal
var obj = {nama : "Maulana", no : 21};
obj.halo = function() {
//  this didalam fungsi pada properti di objeck literal
    console.log(this);  // => mengembalikan nilai objek literal
    console.log("halo => objek literal");
} 
obj.halo();
// Jadi, this pada object literal mengembalikan nilai objeck itu sendiri atau object yang bersangkutan


// this pada constructor
function Obj () {
    console.log(this);  // mengembalikan nilai objek
    console.log("halo => constructor");   
}
new Obj();
// Jadi, pada constructor this mengembalikan nilai object yang baru di buat
var Obj1 = new Obj(); // => nilai this mengacu (adalah) pada variabel Obj1
var Obj2 = new Obj(); // => nilai this mengacu (adalah) pada variabel Obj2