var s = ""

for (i = 4; i >= 0; i--) {
    if (i >= 2) {
        for (x = 2; x < i; x++) {
            s += " ";
        }
        for (z = 4; z >= i; z--) {
            if (z > i) {
                s += "**";
            } else {
                s += "*";
            }
        }
    } else {
        for (x = 2; x > i; x--) {
            s += " ";
        }
        for (z = 0; z <= i; z++) {
            if (z < i) {
                s += "**";
            } else {
                s += "*";
            }
        }
    }
    s += "\n";
}

console.log(s);


// output :
//   *
//  ***
// *****
//  ***
//   *
// Bentuk Belah Ketupat