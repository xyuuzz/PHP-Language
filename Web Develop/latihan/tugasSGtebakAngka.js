// PERMAINAN TEBAK ANGKA

alert("Selamat datang di permainan tebak angka!! \nSilahkan bersenang-senang!");

var ulang = true;
chance = 3;
while (ulang) {
    player = prompt("Silahkan Tebak angka antara 1 - 10!! \nSekarang Anda memiliki " + chance + " kesempatan!!");
    jawaban = Math.floor(Math.random() * 10);

    for (i = 1; i <= 3; i++) {
        if (player == jawaban) {
            if (i == 1) {
                alert("Selamat!! \n Anda memenangkan game ini pada kesempatan " + i + "\nAnda Sangat Hebat!");
                break;
            } else if (i == 2){
                alert("Selamat!! \n Anda memenangkan game ini pada kesempatan " + i + "\nNice!!");
                break;
            } else if (i == 3) {
                alert("Selamat!! \n Anda memenangkan game ini pada kesempatan " + i + "\nhuhh, Hampir saja ya!!");
                break;
            }
        } else if (player != jawaban && i != 3) {
            chance--;
            alert("Coba Lagii! Ganbaroo");
            continue
        } else {
            alert("Sayang Sekali, Anda Kalah :'> \nJawabanya adalah " + jawaban);
            break;
        }
    }

    ulang = confirm("Mau bermain lagi?");
}

alert("Terimakasih Telah Bermain");