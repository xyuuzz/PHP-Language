var s = "";

for (i = 2; i >= 0; i--) {
    for (x = 1; x >= i; x--) {
        s += " ";
    }
    for (z = 0; z <= i; z++) {
        if (z < i) {
            s += "**"
        } else {
            s += "*";
        }
    }
    s += "\n";
}

console.log(s);


// output :
// *****
//  ***
//   *
// Segitiga sama sisi terbalik
