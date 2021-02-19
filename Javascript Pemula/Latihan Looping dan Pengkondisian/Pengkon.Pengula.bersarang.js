var s = "";
for (i = 0; i < 5; i++) {
    for (x = 0; x <= 5; x++) {
        s += "*"; //  0 <= 5 TRUE = "*" 
                // 1 <= 5 TRUE = "**"
                //2 <= 5 TRUE = "***"
                //3 <= 5 TRUE = "****"
                //4 <= 5 TRUE = "*****"
                //5 <= 5 TRUE = "******"
                //6 <= 5 FALSE = KELUAR
    }
    s += "\n"; // BARIS BARU
}

console.log(s);

//  s setelah pengulangan = ****** sebanyak 5 baris.


                        