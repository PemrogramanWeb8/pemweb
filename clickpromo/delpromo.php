<?php
session_start();

include 'php/connect.php';
include 'php/fungsi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $result = tambah_promo();
    if ($result) {
        // Data berhasil ditambahkan
        echo '<script>alert("Data berhasil ditambahkan.");</script>';
    } else {
        // Terjadi kesalahan saat menambahkan data
        echo '<script>alert("Terjadi kesalahan saat menambahkan data.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Delete Promo</title>
    <link rel="website icon" type="png" href="img/bahan lain/logo2.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="css/delpromo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="bg-secondary">
        <!--kolom-->
    <div class="tabel1 mt-5"></div>
    <table id="t01">
        <thead>
            <tr>
                <th>Masukkan Id</th>
                <th>Aksi</th>
            </tr>
        </thead>
            <tr>
                <td><input class="form-control" type="text" name="id_promo" placeholder="id_promo/id_ecom" required />
                &nbsp; &nbsp;</td>
                <td>
                <button type="submit" class="btn btn-danger text-light mb-2">Hapus</button>
                </td>
            </tr>
    </table>
            <a button type="submit" class="btn btn-danger text-light mb-2" href="administrator.php"> << Kembali</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
