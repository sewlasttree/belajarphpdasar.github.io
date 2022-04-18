<?php

    include("config.php");

    // jika tdk ada id di query string
    if( !isset($_GET['id']) ) {
        header('location: list-siswa.php');
    }

    // ambil id dr query string
    $id = $_GET['id'];

    // buat query utk ambil data dr db
    $sql = "SELECT * FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // jika data yg di edit tdk ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir Edit Siswa | Cambridge School</title>
</head>
<body>
    <header>
        <h3>Formulir edit siswa</h3>
    </header>

    <form action="proses-edit.php" method="post">

        <fieldset>

            <input type="hidden" name="id" value="<?= $siswa['id'] ?>">
            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?= $siswa['nama'] ?>">
            </p>

            <p>
                <label for="alamst">Alamat:</label>
                <textarea name="alamat" <?= $siswa['alamat'] ?>></textarea>
            </p>

            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <?php $jeniskelamin = $siswa['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($jeniskelamin == 'Laki-laki') ? "checked": "" ?>> Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?= ($jeniskelamin == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
            </p>

            <p>
                <label for="agama">Agama:</label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama">
                    <option <?= ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?= ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?= ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                    <option <?= ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                    <option <?= ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                </select>
            </p>

            <p>
                <label for="sekolah_asal">Sekolah asal:</label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?= $siswa['sekolah_asal'] ?>">
            </p>
            
            <p>
                <button type="submit" value="Simpan" name="simpan" >Simpan</button>
            </p>

        </fieldset>

    </form>
</body>
</html>