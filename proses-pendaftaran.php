<?php

    include("config.php");
    //cek daftar sudah di klik atau belum
    if( isset($_POST['daftar']) ){

        // ambil data dari formulir
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jeniskelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolahasal = $_POST['sekolah_asal'];
        
        // bikin querry
        $sql = "INSERT INTO calon_siswa(nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jeniskelamin', '$agama', '$sekolahasal')";
        $query = mysqli_query($db, $sql);

        // cek query tersimpan
        if($query) {
            // jika sukses alihkan ke index.php dg status = berhasil
            header('Location: index.php?status=sukses');
        } else {
            // jika gagal alihkan ke index.php dg status = gagal
            header('Location: index.php?status=gagal');
        }



    } else {

        die("Akses dilarang...");
        
    }

?>