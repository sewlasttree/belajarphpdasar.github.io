<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Siswa Baru | Cambridge School</title>
</head>
<body>
    
    <header>

        <h3>Siswa yang sudah mendaftar</h3>

    </header>

    <nav>

        <a href="form-daftar.php">[+] Tambah Baru</a>

    </nav>
    
    <br>

    <table border="1" cellspacing="0" cellpadding="2">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php

                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);
                $no = 1;

                while ( $siswa = mysqli_fetch_array($query) ) {
                    echo "<tr>";
                    
                    echo "<td>".$no."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'>hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                    $no++;
                }
                

            ?>

        </tbody>

    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>