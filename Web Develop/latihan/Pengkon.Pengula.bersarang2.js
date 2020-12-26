var s = "";

for (i = 0; i < 3; i++) { 
    for(x = 0; x <= i; x++) {
        s += "*";   
    }
    s += "\n";
}

console.log(s);

// output = 
// *
// **
// ***

// looping pertama :                                              looping ketiga :
// i = 0,                                                         i = 2
// 0 < 3       => true                                            2 < 3        => true
// x = 0,                                                         x = 2
// 0 <= 0      => true                                            2 <= 2       => true
// s += "*"    => s = "*"                                         s += *       => s = ***
// s += "\n"   => membuat baris baru                              s += \n      => membuat baris baru

// output looping  = *                                            output looping = ***
// i++     => i = 1                                               i++           => i = 3                                  
// x++     => x = 1                                               x++           => x = 3
// s       => s = * dan membuat baris baru                        s             => *** dan membuat baris baru


// looping kedua :                                                looping ke empat :
// i = 1,                                                         i = 3
// 1 < 3       => true                                            3 < 3         => false
// x = 1,                                                         KONDISI TERMINASI MENDAPATKAN NILAI FALSE
// 1 <= 1      => true                                            MAKA AKSI FOR LOOP TIDAK AKAN DI JALANKAN 
// s += *      => s = **                                          HASIL OUTPUT FINAL DARI FOR LOOP :             
// s += "\n"   => membuat baris baru                              *
//                                                                **
// output looping kedua = **                                      ***
// i++     => i = 2                                               Segitiga siku siku
// x++     => x = 2
// s       => s = ** dan membuat baris baru

