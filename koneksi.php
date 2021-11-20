<?php
    // buat variabel untuk membuat nama server , nama pengguna dan kata sandi mysql
    $namaserver ="localhost";
    $username="root";
    $password="";
    $db = "29_mywebsite_12rpl2";

    // membuat koneksi ke mysql
    $koneksi = mysqli_connect($namaserver, $username, $password, $db);

    // periksa apakah koneksi berhasil atau tidak
    // tanda ! berfungsi negasi / not(kebalikan)
    if(!$koneksi){
        // tampilkan pesan jika gagal
        die("koneksi gagal<br> :" .mysqli_connect_error()."<br>".mysqli_connect_errno());
}else{
    //echo ("koneksi berhasil");
}
?>