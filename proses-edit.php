<?php

    include("config.php");

    // cek tombol sdh diklik
    if( isset( $_POST['simpan'] ) ) {
        // ambil data dr formulir
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jeniskelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolahasal = $_POST['sekolah_asal'];

        // buat query update
        $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jeniskelamin', agama='$agama', sekolah_asal='$sekolahasal' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        // apakah query berhasil?
        if($query) {
            // apabila berhasil alihkan ke halaman list-siswa.php
            header('Location: list-siswa.php');
        }  else {
            // jika gagal tampilkan pesan
            die("perubahan gagal");
        }
    } else {
        die("Akses dilarang");
    }

?>
