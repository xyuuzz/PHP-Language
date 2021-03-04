// Ambil element menggunakan DOM

let keyword = document.getElementById("keyword");
let search = document.getElementById("search");
let wadahTable = document.getElementById("table");

keyword.addEventListener("input", function() {

    let ajax = new XMLHttpRequest();

    // Cek apakah ajax siap untuk digunakan
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            wadahTable.innerHTML = ajax.responseText;
        }
    }

    // Mengeksekusi ajax
    ajax.open("GET", "javascript/data.php?keyword=" + keyword.value, true);
    // Parameter pertama => ajax ingin menggunakan method apa? GET / POST   
    // Parameter kedua => file yang akan diambil source nya
    // Parameter ketiga => jika true => assincrhonus, jika false => syncrhonus

    ajax.send();

})