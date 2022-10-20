<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="judul">Sistem data Pattimura</h1>
    <div class="form-class">
        <h3>Tambah data pattimura</h3>
        <form action="tambah.php" method="post">

            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text"><br>

            <label for="">suku</label><br>
            <input type="text" name="suku" class="form-text"><br>

            <label for="">agama</label><br>
            <input type="" name="agama" class="form-text"><br>

            <label for="">tanggal lahir</label><br>
            <input type="text" name="tanggal_lahir" class="form-text"><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="64" rows="10"></textarea><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">

        </form>
    </div>

</body>

</html>