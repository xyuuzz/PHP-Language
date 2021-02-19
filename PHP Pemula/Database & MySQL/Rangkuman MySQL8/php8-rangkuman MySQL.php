<!-- 
SESSION DAN COOKIE pada PHP

SESSION
 DEFINISI SESSION adalah sebuah variabel global yang memungkinkan kita untuk mengakses variabel di lebih dari satu halaman. 
 ---
 Syarat menggunakan variabel global adalah dengan mengawali setiap halaman dengan function session_start() dan mengakses variabel nya dengan cara => session["nama_variabel"]
 ---
 Variabel Session global akan hilang jika kita telah mengalami satu sesi. Satu sesi adalah ketika kita menurup browser atau merestart computer/laptop. 
 ---
 Ada juga cara untuk menghapus session secara manual. Yaitu dengan menggunakan function session_destroy()


COOKIE
COOKIE Adalah variabel super global yang dilambangkan dengan $_COOKIE dan untuk cara membuat $_COOKIE adalah dengan memakai function setcookie("nama_arrAssosiatif", "valuenya", time()+timelimit(angka=>detik)); 
-
Dan untuk cara mengaksesnya adalah dengan $_COOKIE["nama_arrAssosiatif"];
-
COOKIE fungsi umumnya ada 3, yaitu :
--Untuk Mengenali User
--Shooping Cart atau keranjang belanjaan
--Personalisasi




-->

<!-- Sebelum masuk ke MySQL kita harus paham terlebih dahulu apa itu database -->

<!-- Database terdiri dari 1 kata inti yaitu data -->
<!-- Data adalah kumpulan representasi fakta yang ada di dunia nyata -->
<!-- Contoh data yang sederhana adalah nama, nomor ktp, harga barang, vidio dll -->

<!-- Sedangkan Database adalah kumpulan dari data yang disimpan didalam tabel. -->
<!-- Macam-macam Software database ada 4, yaitu  -->
<!-- 
    Relational DBMS  => kita akan mempelajari Relational DBMS dan menggunakan software MySQL 
    Hierarchical DBMS  
    Network DBMS 
    NoSQLDBMS 
-->

<!-- Dalam RDBMS, sebuah databse adalah kumpulan relasi yang saling terhubung satu sama lainya. -->
<!-- Didalam Relational DBMS terdapat konsep bernama primary key atau bisa juga disebut kunci utama dari sebuah tabel didalam database-->
<!-- Primary key adalah Sebuah data yang dapat merepresentasikan satu baris record, dan nilai dari sebuah primary key itu harus UNIK. -->

<!-- Sebelum belajar tentang database, alangkah baiknya pelajari terlebih dahulu istilah didalam database : -->
<!-- 
    1. Field => kolom dari sebuah tabel. Field memiliki tipe data yang berfungsi untuk mengelompokan jenis record tertentu, contohnya : int, string, varchar, date, long dll.
    2. Row  => atau Record adalah bari dari suatu tabel. Record mendefinisikan satu data dalam database.
    3. Key
        a. Primary Key => merupakan attribute yang dijadikan acuan untuk membedakan setiap baris (record) data dalam sebuah tabel. Primary Key harus bersifat unik.
        b.Foreign key  => merupakan suatu attribute untuk melengkapi hubungan yang menunjukan ke induknya. artinya adalah field pada tabel merupakan kunci tamu (penghubung) dari tabel lain
    4. Auto Increment  => Sebuah konsep pada sistem database yang dapat otomatis menyimpan dan menambahkan satu field setelah penambahan data secara otomatis. Bentuk data yang biasanya menggunakan auto increment adalah integer. Tapi tidak menutup kemungkinan bahwa bisa juga menggunakan kombinasi text dan angka
    5. Relationship => Hubungan dari satu tabel ke tabel yang lain menggunakan foreign key
    6. Normalization => proses penyususan kolom dan tabel untuk meminimalisir redundansi data atau data yang berulang. Normalization biasanya dilakukan dengan memecah tabel besar menjadi beberapa tabel kecil yang saling terhubung. Hal ini dilakukan agar developer mudah mengatur dan mengorganisir data yang ada.
 -->


<!-- Jenis Data Pada MySQL -->
<!-- 

    1. Integer      => integer berbentuk angka, cara menuliskan nya adalah tanpa tanda kutip = 8
    2. String       => kumpulan dari huruf, cara menuliskan nya adalah dengan tanda kutip, bisa tanda kutip satu maupun 2 = "Ini adalah string"
    3. Date         => berbentuk tanggal bulan dan tahun, cara menuliskanya sama seperti string yaitu dibalut dengan tanda petik = "2005-08-10" => format : tahun-bulan-tanggal

 -->


 <!-- Operator Perbandingan pada MySQL -->
 <!-- 

    Operator pada MySQL itu sebenarnya sama seperti operator perbandingan pada bahasa pemrograman. 
    Diantaranya yaitu : > , < , <= , >=
    Cara menggunakanya biasanya dipadukan dengan klausa WHERE, contoh :
    select *
    from contoh
    WHERE tanggal >= "2018-10-24";      => seleksi semua kolom dari tabel contoh yang dimana tanggalya lebih(tua) dari sama dengan 24 okt 2018.
    Di dalam MySQL tidak hanya tipe data int saja yang dapat menggunakan operator perbandingan, tipe data date juga dapat memakainya.

  -->


<!-- Syntax Syntax pada MySQL -->

<!-- 

    create database name_database;  => membuat database

    show databases;                 => melihat list database yang ada
    
    use name_database               => mengganti database yang akan digunakan

    describe name_database          => melihat struktur database

    create table name_table (name value, ...)   => membuat tabel

    insert into name_database values (...)  =>  menambahkan value/ data ke dalam tabel, diinputkan secara urut dari kiri ke kanan. Jiks bentuk datanya string menggunakan tanda petik 1 ('..').

    select .. from name_table       => menampilkan data dari kolom yang dipilih. ketik * untuk melihat semua isi tabel. Jika ingin menyeleksi kolom lebih dari 2 => nameKolom1, nameKolom2, .. (memakai koma)

    select * from name_table WHERE a = b       => menampilkan isi tabel yang dimana a nya adalah b. Jika a != b maka isi tabelnya tidak ditampilkan.

    delete from name_table id = ..;         => untuk menghapus baris yang memiliki id yang diinputkan.

    update name_table set name_data = value WHERE id = ...        => mengganti value data dari nama data yang mempunyai id yang diinputkan.

    drop table name_table       => menghapus tabel dan semua isinya

    drop database name_database         => menghapus database dan semua tabel nya.

    ... WHERE coloumn like "%value%";   => menyeleksi baris yang di baris tersebut terdapat kata value.

    ... WHERE coloumn like "value%      => menyeleksi baris yang di baris tersebut value nya berada di awal. atau disebut juga prefiks

    ...WHERE cloumn like "%value"       => menyeleksi baris yang di baris tersebut valuenya berada di akhir atau disebut juga postfiks

    ...WHERE coloumn = "value"         => ini fungsinya sama seperti menggunakan like

    ...WHERE NOT cloumn = "value"      => menyeleksi coloumn yang tidak mengandung kata / angka dari value yang dimasukan

    ...WHERE cloummn IS NULL        => NULL disini berarti kosong, sebuah isi tabel yang tidak mempunyai nilai disebut NULL. Menyeleksi coulmn yang tidak ada isinya.

    ...WHERE cloummn IS NOT NULL        => Menyeleksi coulmn yang ada isinya. Jadi coulm yang kosong tidak akan terseleksi

    WHERE column IS value
    AND column IS value             => Menyeleksi baris yang column nya memenuhi kondisi yang diinputkan dan semua kondisi wajib terpenuhi 

    WHERE column IS value
    OR column IS value             => Menyeleksi baris yang column nya memenuhi salah satu / keduanya dari kondisi yang diinputkan

    WHERE column IS value 
    ORDER BY ASD/DESC           => Mengurutkan column secara => dari kecil ke besar = Ascending => ASC    
                                   Mengurutkan column secara => dari besar ke kecil = Descending => DESC
    
    SELECT DISTINCT(column)     => Untuk menampilkan column tanpa duplikasi. Jadi column yang nama nya sama hanya akan ditampilkan satu saja.

    Operator Aritmatika pada MySQL :
    Pada MySQL kita bisa menggunakan operator aritmatika, diantaranya adalah + / * -  cara penggunaanya adalah :
    SELECT column_name + value

    SELECT SUM(column_name)         => Fungsi SUM() berfungsi untuk menjumlahkan isi semua column yang dipilih Fungsi ini juga dapat dikombinasikan dengan klausa WHERE.

    SELECT AVG(column_name)         => Function AVG() dapat digunakan setelah SELECT untuk menghitung rata-rata baris untuk kolom yang di inputkan.

    SELECT COUNT(column_name)       => Function COUNT() digunakan untuk menghitung jumlah baris pada column yang diinputkan. Untuk baris yang kosong/bernilai null tidak akan dihitung. Cara agar mengatasai hal tersebut adalah dengan menggunakan tanda bintang pada parameter COUNT  => COUNT(*)

    SELECT MAX(column_name)         => digunakan untuk mencari nilai maksimal dari kolom yang di inputkan.

    SELECT MIN(column_name)         => digunakan untuk mencari nilai minimal dari kolom yang di inputkan.

    GROUP BY column_name        => digunakan untuk mengelompokan column yang isinya sama. Jika ingin mengelompokan column lebih dari satu, tambahkan koma setelah column nya.

    HAVING condition         => digunakan untuk menampilkan baris yang sudah di grup dan memenuhi kondisi yang di inputkan. 
    HAVING berbeda dengan WHERE, jika WHERE akan mencari ke semua baris sebelum di grup. Sedangkan HAVING akan mencari pada baris yang digrup oleh GROUP BY. 


    MySQL Tahap 2

    AS
    AS adalah syntax MySQL yang berguna untuk mengubah nama column pada MySQL sementara. Cara penggunaanya adalah 
    SELECT height AS "tinggi badan"
    FROM table;
    => pilih coulmn height pada table dan nama menjadi tinggi badan.

    Sub Kueri
    Sub kueri adalah sebuah metode penulisan syntax MySQL yang penulisanya ada di dalam syntax MySQL itu. Dari pada bingung mari kita praktekan.
    SELECT * FROM table             
    WHERE rowTable > (
        SELECT weight FROM table
        WHERE weight > 10
    );
    Cara membacanya adalah pilih semua baris dari table yang dimana rowTable lebih besar dari (hasil dari syntax yang ada didalam () )
    => rowTable > (weight > 10)

    JOIN dan ON
    Klausa JOIN digunakan untuk menggabungkan 2 tabel menjadi 1 dengan kondisi penggabungan nya dituliskan setelah klausa ON. Klausa join tidak menampilkan foreign key yang bernilai NULL atau kosong. Contoh
    SELECT *
    FROM tabel_a
    JOIN tabel_b
    ON tabel_a.foreign_key = tabel_b.primary_key;

    Jika menggabungkan 2 tabel, dan ingin mengambil column tabel dengan nama yang sama, maka tambahkan nama tabelnya di depan nama column nya. Berlaku pada semua syntax yang menggunakan klausa JOIN.
    => SELECT tabel_a.column_name, tabel_b.column_name
    Saat menggunakan JOIN, pengerjaan code dijalankan berdasarkan tabel yang ditentukan dengan FROM. Namun, baris dengan nilai foreign key NULL, tidak akan ditampilkan pada hasil yang dijalankan.

    LEFT JOIN
    Dengan menggunakan LEFT JOIN Anda bisa mendapatkan semua data tabel yang ditentukan di klausa FROM. Baris dengan nilai foreign key NULL juga akan ditampilkan dihasil yang dijalankan, sebagai NULL.

    Menggabungkan lebih dari 2 tabel
    JOIN adalah statement SQL tunggal yang dapat digunakan lebih dari sekali. Perhatikan bahwa, meskipun Anda menggunakan JOIN lebih dari satu kali, Anda hanya perlu menulis FROM satu kali. Klausa LEFT JOIN dengan JOIN itu sebenarnya sama, namun hanya berbeda fungsi nya saja.
    SELECT *
    FROM tabel_a
    JOIN tabel_b
    ON tabel_a.foreign_key = tabel_b.id
    JOIN tabel c
    ON tabel_a.foreign_key = tabel_c.id;


    FUNGSI FUNGSI PADA MYSQLI YANG BIASA DIAPLIKASIKAN DI BAHASA PEMROGRAMAN 

    mysqli_real_escape_string($connect, string) => untuk mengecek bahwa string yang dimasukan tidak menggunakan symbol. Biasanya digunakan untuk mencegah pembobolan menggunakan sql injection.
    ---
    mysqli_num_rows(array database) => untuk mengecek ada atau tidaknya baris pada parameter yang dimasukan. Jika ada akan mengembalikan nilai 1, namun jika tidak akan mengembalikan nilai 0.
    ---
    mysqli_fetch_assoc(array database) => mengubah array pada database yang sebelumnya adalah numerik menjadi array asosiatif sesuai column_name nya.

    mysqli_affected_rows(koneksi_database) => fungsi ini berguna jika ada eror pada syntax mysql maka akan mengembalikan nilai dibawah 0.

    mysqli_connect("server", "username database", "password database", "nama database") => untuk menyambungkan ke database mysql.


 -->



