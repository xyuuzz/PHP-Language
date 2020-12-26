var s = "";


for (var i = 3; i > 0; i--) {
    for (y = 2; y >= i; y--) {
        s += " ";
    }
    for (x = 0; x < i; x++) {
        s += "*";
    }
    s += "\n";
}

console.log(s);


// output :
//  ***
//   **
//    *
// Segitiga siku siku terbalik kanan
