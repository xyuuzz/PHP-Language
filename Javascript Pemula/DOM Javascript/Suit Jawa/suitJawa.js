const body = document.getElementsByTagName("body")[0];

// buat element img untuk result player
const img = document.createElement("img");
img.classList.add("pilihan", "result");


// source img for com
const arrSrc = ["orang.png", "gajah.png", "semut.png"];
const ranArrSrc = Math.round(Math.random() * (arrSrc.length - 1));

// computer
const com = document.createElement("img");
com.setAttribute("src", arrSrc[ranArrSrc]);
com.classList.add("pilihan", "result", "computer");

// Teks Result
const p = document.createElement("h4");
const text = document.createTextNode("Hasil Pertandingan : ");
p.appendChild(text);

// Teks VS / Lawan
const p2 = document.createElement("p");
const text2 = document.createTextNode("VS");
p2.appendChild(text2);

// teks untuk player
const pPlayer = document.createElement("p");
const textPlayer = document.createTextNode("Anda memilih :");
pPlayer.appendChild(textPlayer);

// img2 untuk player
const img2 = document.createElement("img");
img2.classList.add("pilihan", "result");

// teks untuk hasil Result
const elResult = document.createElement("h3");
const textResult = document.createTextNode("Pemenangnya adalah");
const textSeri = document.createTextNode("Hasil Seri!!!");
const elResult2 = document.createElement("h2");
const textWinner = document.createTextNode("Selemat Anda Menang!!");
const textLose = document.createTextNode("Anda Kalah!!");


// aksi event
const pilihan = document.getElementsByClassName("pilihan");
for (a = 0; a < pilihan.length; a++) {
    let b = a; 
    // looping   
    pilihan[a].addEventListener("click", function() {
        // gambar gunting
        img.setAttribute("src",arrSrc[b]);
        document.body.appendChild(img);
        // teks p sebelum element teks player
        body.insertBefore(p, img);
        // teks player sesudah element p
        body.insertBefore(pPlayer, img);
        // teks p2 setelah gambar player
        img.after(p2);
        // gambar com setelah teks p2
        p2.after(com); 

        // Hasil Pertandingan :
        if (b == ranArrSrc ) {
            elResult.appendChild(textSeri);
        } else{
            elResult.appendChild(textResult);
        }
        
        if (b == ranArrSrc) com.after(elResult); 
         else if (b == 0 && ranArrSrc == 2 || b == 1 && ranArrSrc == 0 || b == 2 && ranArrSrc == 1) {
            com.after(elResult);
            // 
            img2.setAttribute("src", arrSrc[b]);
            elResult.after(img2);
            // 
            elResult2.appendChild(textWinner);
            img2.after(elResult2);
        } else {
            com.after(elResult);
            // 
            img2.setAttribute("src", arrSrc[ranArrSrc]);
            elResult.after(img2);
            // 
            elResult2.appendChild(textLose);
            img2.after(elResult2);
        }

        // button refresh
        const elAgain = document.createElement("button");
        const txtAgain = document.createTextNode("Refresh");
        elAgain.setAttribute("type", "button");
        // style button
        elAgain.style.marginTop = "20px";
        elAgain.style.padding = "10px 30px";
        elAgain.style.color = "white";
        elAgain.style.backgroundColor = "black";

        elAgain.appendChild(txtAgain);
    
        elResult.after(elAgain);
        elResult2.after(elAgain);

        elAgain.onclick = function() {
            window.location.reload();
        }
    });
}






