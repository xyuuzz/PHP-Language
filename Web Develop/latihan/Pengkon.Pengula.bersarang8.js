var s = "";

for (i = 2; i <= 5; i++) {
    if (i % 2 == 1) {
        for (x = 10; x >= 1; x--) {
            if (x % 2 == 1) {
                s += "#";
            } else {
                s += " ";
            }
        }
    } else {
        for (x = 10; x >= 1; x--) {
            if (x % 2 == 1) {
                s += " ";
            } else {
                s += "#";
            }
        }
    }
    s += " \n";
}

console.log (s);


// output :
// # # # # #  
//  # # # # # 
// # # # # #  
//  # # # # # 
// Seperti papan catur :
// # = putih dan space = hitam