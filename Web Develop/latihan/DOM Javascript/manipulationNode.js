// DOM Manipulation Node


// document.createElement("...") => membuat element yang disimpan pada variabel

// document.createTextNode("...") => membuat text biasa yang disimpan pada variabel

// var a.appendChild(var b) => menggabungkan/menyimpan var a yang telah dibuat ke var b, biasanya var a adalah text node, sedangkan var b adalah element.
// Yang artinya appendChild adalah method untuk menyimpan text node ke dalam element atau bisa juga untuk menyimpan element baru ke tempat element yang sudah diseleksi(berada di akhir element)

// var a.insertBefore(var b, var c) => menyimpan var b setelah var c pada var a, biasanya var adalah parent node, var b adalah element baru yang telah dibuat, dan var c adalah element yang berada sesudah var b
// Yang artinya var b disimpan pada var a yang tempatnya sebelum var c.

// var a.removeChild(var b) => menghapus var b yang ada pada var a, biasanya var a adalah parent node dari var b, sedangkan var b adalah child node dari var a.
// Yang artinya var b(child node) yang ada pada var a(parent node) akan dihapus.

// var a.replaceChild(var b, var c) => mengganti var c menjadi var b pada var a, biasanya var a adalah parent node, var b adalah child node baru, dan var c adalah child node lama.
// Yang artinya var b(child node baru) akan menggantikan var c(child node lama) yang ada pada var a(parent node)


// Studi Kasus : menambahkan element baru pada class list di akhir
// Tahapan Penyelesaian :
// Buat elementya terlebih dahulu, lalu buat text nya, baru setelah itu digabungkan elementya dengan text nya lalu setelah itu baru ditambahkan ke html


// Membuat Element baru 
const liBaru = document.createElement("li");

// Membuat text baru
const textBaru = document.createTextNode("Sejarah");

// Menggabungkan element dan text
liBaru.appendChild(textBaru);

// Menyimpan li baru pada ul => diseleksi terlebih dahulu element yang akan menjadi tempat dari element baru yang dibuat, lalu tambahkan element baru pada variabel element yang diseleksi menggunakan appendsChild

// menyeleksi element 
const selectUL = document.getElementsByClassName("list")[0];

// menambahkan element baru
selectUL.appendChild(liBaru);

// 
// 


// Studi kasus 2 : menambahkan text li pada class list di tengah tengah / acak
// Tahapan Penyelesaian sama seperti studi kasus 2, namun pada saat menambahkan element baru tidak menggunakan appendChild, namun menggunakan insertBefore()
// var a.selectBefore(var b, var c) => simpan var b sebelum var c pada var a.
// Biasanya var a adalah element yang diseleksi, var b adalah element baru yang sudah dibuat dan sudah ditambahkan text dan var c adalah element yang diseleksi yang nantinya akan berada sesudah var b.

// membuat element
const liBaru2 = document.createElement("li");

// membuat text 
const textBaru2 = document.createTextNode("HTML & CSS");

// Menggabungkan element dan text 
liBaru2.appendChild(textBaru2);

// Menyeleksi element yang akan menjadi tempat element baru
// Menggunakan selectUL.

// menyeleksi tempat yang akan digunakan oleh element baru nanti
const li2 = selectUL.querySelector("li:nth-child(2)")
// nantinya li baru akan diletakan sebelum var li2

// menambahkan element baru
selectUL.insertBefore(liBaru2, li2);
// => simpan liBaru2 sebelum li2 pada selectUL.

// 
// 


// Kasus studi 3 : menghapus node menggunakan removeChild()
// Tahapan Penyelesaian :
// Seleksi terlebih dahulu parent node yang akan dihapus child node nya, lalu seleksi child node yang akan dihapus, setelah itu gunakan method parentNode.removeChild(childNode) untuk menghapus child node nya.

// Seleksi Child Node
const parentNode = document.querySelector(".b1")

// Seleksi Child Node
const childNode = parentNode.getElementsByTagName("h5")[1];

// Menghapus child node menggunakan removeChild()
parentNode.removeChild(childNode);
// => tolong hapus child node yang ada pada parent node.

// 
// 


// Studi kasus 4 : mengganti (replace) node menggunakan replaceChild()
// Tahapan Penyelesaian : Seleksi terlebih dahulu parent node yang akan dihapus child node nya, lalu seleksi child node yang akan diganti, lalu buat child node baru yang akan menggantikan child node lama, setalah itu gunakan method parentNode.replaceChild(newChild, oldChild)

// menyeleksi parent node
// saya menggunakan parentNode 

// menyeleksi child node lama
const childNodeOld = parentNode.querySelector("h5");

// membuat child node baru
const childNodeNew = document.createElement("h3");
const childTextNew = document.createTextNode("Doomoo, element baru");
childNodeNew.appendChild(childTextNew);

// Mengganti node lama dengan node baru 
parentNode.replaceChild(childNodeNew, childNodeOld);


