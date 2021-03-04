// Menggunakan Library jQuery Untuk AJAX

// Cara baca : jQuery tolong ambilkan document/satu halaam setelah ready(di-load) dan jalankan function 
$(document).ready(function() {

    // Cara baca : Jika element ber-id keyword di ada input(value) nya, => jalankan function
    $("#keyword").on("input", function() {

        // Ajax Menggunakan fungsi load
        // $("#table").load("javascript/data.php?keyword=" + $("#keyword").val());
        // })

        // Untuk memunculkan gif loading
        // $(".loading").show();
        // Ajax menggunakan $.get pada jQuery
        $.get("javascript/data.php?keyword=" + $("#keyword").val(), function(data) {
                // Cara baca : jquery tolong kirimkan data ke data.php yang ada di folder javascript dan kirimkan data value dari element dengan id keyword => masukan ke parameter data dan jalankan function.
                $("#table").html(data);
                // Cara baca : gantikan element ber-id table dengan parameter data
                // html artinya sama saja dengan .innerHTML

                // Menghilangkan gif loading
                // $(".loading").hide(); // hide = display : none;

            })
            // Fungsi load dengan $.get() itu sama saja, namun $.get lebih fleksibel daripada load
    })

})