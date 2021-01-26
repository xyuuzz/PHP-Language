var s = "";

for (i = 3; i > 0; i--) {
    for (x = 0; x < i; x++) {
        s += "*";
    }
    s += "\n";
}

console.log(s);

// output = 
// ***
// **
// *


// looping pertama :                                              
// i = 3,                                                         
// 3 > 0        => true                                           
// x = 0,                                                         
// 0 < 3        => true                                            
// s += "*"     => s = "*"
//    x++ = x = 1
//    1 < 3           => true
//    s += "*"        => s = "**"
//        x++ = x = 2 
//        2 < 3           => true
//        s += "*"        => s = "***"
//             x++ = x = 3
//             3 < 3       => false    => looping berhenti
// s += \n     => membuat baris baru

// output looping pertama :    ***
// i-- = i = 2


// looping kedua :                                              
// i = 2,                                                         
// 2 > 0        => true                                           
// x = 0,                                                         
// 0 < 2        => true                                            
// s += "*"     => s = "*"
//    x++ = x = 1
//    1 < 2           => true
//    s += "*"        => s = "**"
//      x++ = x = 2
//      2 < 2       => false    => looping berhenti
// s += \n     => membuat baris baru

// output looping kedua :    **
// i-- = i = 1


// looping ke tiga
// i = 1,                                                         
// 1 > 0        => true                                           
// x = 0,                                                         
// 0 < 1        => true                                            
// s += "*"     => s = "*"
//    x++ = x = 1
//    1 < 1       => false    => looping berhenti
// s += \n     => membuat baris baru

// output looping kedua :    *
// i-- = i = 0


// looping ke empat
// i = 0
// 0 > 0       => false
// KONDISI TERMINASI MENDAPATKAN NILAI FALSE
// MAKA AKSI FOR LOOP TIDAK AKAN DI JALANKAN
// HASIL OUTPUT FINAL DARI FOR LOOP :
// ***
// **
// *
// Segitiga siku siku terbalik kiri
