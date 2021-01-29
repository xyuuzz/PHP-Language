// Buat Button
const button = document.createElement("button");
const text = document.createTextNode("Klik");
button.appendChild(text);
button.setAttribute("type", "button");

// Seleksi Parent Node
const body = document.getElementsByTagName("body")[0];
// Bisa juga menggunakan document.body
body.appendChild(button);

// Properti element button
button.style.padding = "10px 20px";

// addEventListener
button.addEventListener("click", function() {
    // bermain warna 1
    // body.style.backgroundColor = "orange";

    // bermain warna 2
    // body.classList.toggle("dark-mode");

    // bermain warna 3
    const r = Math.round(Math.random() * 255 + 1);
    const g = Math.round(Math.random() * 255 + 1);
    const b = Math.round(Math.random() * 255 + 1);
    body.style.backgroundColor = "rgb("+ r +", "+ g +", "+ b +")"; // menggunakan operator konkatenasi

});

// 
// 


// Bermain warna 4 menggunakan slider 

// membuat slider merah
const sliderMerah = document.createElement("input");
sliderMerah.setAttribute("type", "range");
sliderMerah.name = "merah";
sliderMerah.setAttribute("min", "0");
sliderMerah.setAttribute("max", "255");
body.appendChild(sliderMerah);
// properti sliderMerah
sliderMerah.style.marginTop = "10px";
// menambahkan enter agar button dan sliderMerah tidak berdempetan
const enter = document.createElement("br");
body.insertBefore(enter, sliderMerah);

// membuat sliderHijau
const sliderHijau = document.createElement("input");
sliderHijau.setAttribute("type", "range");
sliderHijau.name = "hijau";
sliderHijau.setAttribute("min", "0");
sliderHijau.setAttribute("max", "255");
body.appendChild(sliderHijau);
// properti sliderHijau
sliderHijau.style.marginTop = "10px";
// menambahkan enter agar slider tidak berdempetan
body.insertBefore(enter, sliderHijau);

// membuat sliderBiru
const sliderBiru = document.createElement("input");
sliderBiru.setAttribute("type", "range");
sliderBiru.name = "biru";
sliderBiru.setAttribute("min", "0");
sliderBiru.setAttribute("max", "255");
body.appendChild(sliderBiru);
// properti sliderBiru
sliderBiru.style.marginTop = "10px";
// menambahkan enter agar slider tidak berdempetan
body.insertBefore(enter, sliderBiru);


// membuat kotakMerah
const kotakMerah = document.createElement("div");
kotakMerah.classList.add("kotak", "merah");
body.insertBefore(kotakMerah, sliderMerah);
// membuat kotakHijau
const kotakHijau = document.createElement("div");
kotakHijau.classList.add("kotak", "hijau");
body.insertBefore(kotakHijau, sliderHijau);
// membuat kotakBiru
const kotakBiru = document.createElement("div");
kotakBiru.classList.add("kotak", "biru");
body.insertBefore(kotakBiru, sliderBiru);


// mengatur warna dengan sliderMerah
const merah = document.querySelector("input[name=merah]");
const hijau = document.querySelector("input[name=hijau]");
const biru = document.querySelector("input[name=biru]");

// jika kita menggunakan event change, maka warna akan berubah ketika crushor dilepaskan
// kita akan ganti ke event input, agar warna berubah secara real time
sliderMerah.addEventListener("input", function() {
    const red = merah.value;
    const green = hijau.value;
    const blue = biru.value;
    body.style.backgroundColor = "rgb("+ red +", "+ green +", "+ blue +")";
});

sliderHijau.addEventListener("input", function() {
    const red = merah.value;
    const green = hijau.value;
    const blue = biru.value;
    body.style.backgroundColor = "rgb("+ red +", "+ green +", "+ blue +")";
});

sliderBiru.addEventListener("input", function() {
    const red = merah.value;
    const green = hijau.value;
    const blue = biru.value;
    body.style.backgroundColor = "rgb("+ red +", "+ green +", "+ blue +")";
});

// 
// 


// Bermain warna 5 =>  menggunakan crushour untuk mengubah background color
// event mousemove adalah saat mouse digerakan
body.addEventListener("mousemove", function(event) {
    // mencari tahu posisi crushour dengan sumbu x
    const posX = Math.round((event.clientX / window.innerWidth) * 255);
    // clientX => method untuk mencari nilai sumbu x
    // windowinnerWidth => method untuk menghitung nilai panjang window(halaman browser)
    // 255 => kalkulasi untuk nilai rgb nya nanti
    const posY = Math.round((event.clientY / window.innerHeight) * 255);
    // clientY => method untuk mencari nilai sumbu Y
    // windowinnerHeight => method untuk menghitung nilai tinggi window(halaman browser)

    body.style.backgroundColor = "rgb("+ posX +", "+ posY +", 100)";

});











