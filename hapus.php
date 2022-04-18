<?php
    include("config.php");
    
    if( isset($_GET['id']) ) {
        
        // ambil id dari query string
        $id = $_GET['id'];

        // hapus query
        $sql = "DELETE FROM calon_siswa WHERE id=$id";
        $query = mysqli_query($db, $sql);

        // hapus berhasil atau gagal
        if ( $query ) {
            header('Location: List-siswa.php');
        } else {
            die("gagal menghapus");
        }

    } else {
        die ("akses dilarang");
    }
?>