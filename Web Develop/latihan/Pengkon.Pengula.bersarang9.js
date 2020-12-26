var s = "";
jmlBaris = 1;
polaKe = 9;

for (i = jmlBaris; i <= polaKe; i++) {
    a = 1;
    b = a;
    c = 1; 
    for (x = polaKe; x >= i; x--) {
        s += "   ";
    }
    s += a;
    s += "     ";
    for (y = jmlBaris; y < i; y++) {
        c = c * (i - y) / y;
        s += c;
        s += "     ";
    }
    s += "\n"; 
}
console.log(s);

// output :

//       1
//      1 1
//     1 2 1
//    1 3 3 1 
//   1 4 6 4 1
//  1 5 10 10 5 1
// 1 6 15 15 15 6 1 

// versi quick qount :

// for(n = prompt( o = i = ''); i++ < n; o += '\n')
// for (s = j = 1; j <= i; s = s * (i-j) / j++) o += s +' '; 
// console.log(o);
