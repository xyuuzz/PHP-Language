var s = "";

for (i = 0; i <= 2; i++) {
    for(a = 2; a > i; a--) {
        s += " ";
    } 
    for(x = 0; x <= i; x++) {
        if (x > 0) {
            s += "**";
        } else {
        s += "*";
        }
    }
    s += "\n";
}

console.log(s);


// output :
//   *
//  ***
// ***** 
// Segitiga sama sisi