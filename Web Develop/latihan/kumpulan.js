// // Orientasi
// alert("Selamat Datang di Game Gunting Batu Kertas!!");
// alert("Silahkan memilih antara Batu (1), Gunting (2), Kertas (3)");

// // Variabel untuk game pilihan
// var pilihan = ["batu", "gunting", "kertas"];


// // Angka acak com
// x = pilihan.length;
// acak = Math.floor(Math.random() * x);

// // Pertanyaan
// question = true;
// while (question == true) {
//     player = prompt("Anda Memilih apa? (Menggunakan angka)");
//     player -= 1;
//     computer = acak;

//     // Kualifikasi Jawaban


//     // Rekapitulasi Pilihan
//     alert("Anda Memilih " + pilihan[player] + " Dan Computer memilih " + pilihan[computer]);

//     // Kondisi Menang, Kalah, Seri
//     if (player == 0 && computer == 0 || 
//         player == 1 && computer == 1 ||
//         player == 2 && computer == 2 ) {
//             alert("Hasil Seri!!");
//         } 
//     if ( 
//             player == 0 && computer == 1 ||
//             player == 1 && computer == 2 ||
//             player == 2 && computer == 0 ) {
//             alert("Anda Menang!!");            
//         } 
//     if ( 
//         player == 0 && computer == 2 ||
//         player == 1 && computer == 0 ||
//         player == 2 && computer == 1 ) {
//         alert("Anda Kalah Dan Computer Menang!!");            
//     } 

//     question = confirm("Main Lagi Atau Udahan?");
// }