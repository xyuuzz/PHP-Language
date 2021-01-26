function Angkot(sopir, trayek, penumpang, kas) {
    this.sopir = sopir;
    this.trayek = trayek;
    this.penumpang = penumpang;
    this.kas = kas

    this.penumpangNaik = function(namaPenumpang) {
        if (penumpang.length == 0) {
            this.penumpang.push(namaPenumpang);
            return this.penumpang;
        } else {
            for(i = 0; i < penumpang.length; i++) {
                if (penumpang[i] == undefined) {
                    penumpang[i] = namaPenumpang;
                    return penumpang;
                } else if (penumpang[i] == namaPenumpang) {
                    console.log(namaPenumpang + " sudah ada di dalam angkot");
                    return penumpang;
                } else if (i == penumpang.length - 1 && penumpang[i] != undefined ) {
                    this.penumpang.push(namaPenumpang);
                    return penumpang;
                } 
            }
        }
    }

    this.penumpangTurun = function(namaPenumpang) {
        if (penumpang.length == 0 || penumpang == [undefined]) {
            console.log("Tidak ada penumpang didalam angkot!");
            return penumpang;
        } else {
            for (i = 0; i < penumpang.length; i++) {
                if (penumpang[i] == namaPenumpang) {
                    penumpang[i] = undefined;
                    console.log(namaPenumpang + " turun dari angkot");
                    kas += 3000;
                    return penumpang;
                } else if (penumpang.length - 1 == i) {
                    console.log("Tidak ada nama " + namaPenumpang + " di angkot!");
                    return penumpang;
                }

            }
        }
    }

    this.info = function() {
        console.log ("Nama sopir : " + sopir + "\n" +
                "Trayek : " + trayek.join(" - ") + "\n" +
                "Penumpang : " + penumpang.join(", ") + "\n" +
                "Jumlah Kas : " + kas);
    }
}

var angkot1 = new Angkot("Yusuf", ["Penggaron", "Mangkang"], [], 0);
var angkot2 = new Angkot("Andi", ["Terboyo", "Ungaran", [], 0]);
