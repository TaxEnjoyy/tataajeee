<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Pasien</h3>
                <?php
include 'koneksi.php';
$panggil = $koneksi->query("SELECT * FROM kopi where id_Pelanggan='$_GET[edit]'");
?>
                
<?php
while ($row = $panggil->fetch_assoc()) {
?>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="id_Pelanggan">ID Pasien</label>

                        <input type="text" class="form-control mb-3" name="id_Pelanggan" value="<?= $row['id_Pelanggan'] ?>" readonly>

                    </div>
                    <div class="form-group">
                        <label for="nmPesanan">Nama Pasien</label>

                        <input type="text" class="form-control mb-3" name="nmPesanan" value="<?= $row['nmPesanan'] ?>">

                    </div>

                    <div class="form-group">

                        <label for="Jp">Jenis Pesanan</label>
                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="Jp" value="Makanan" <?php if (($row['Jp']) === "Makanan") {
echo "checked";
} ?>> Makanan
                        </div>

                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="Jp" value="Minuman" <?php if (($row['Jp']) === "Minuman") {

echo "checked";
} ?>> Minuman
                        </div>
                        <div class="form-group mt-3">
                            <label for="Harga">Harga</label>

                            <textarea class="form-control" name="Harga" id="Harga" cols="5" rows="3" placeholder="Harga"><?= $row['Harga'] ?></textarea>
                        </div>

                        <div class="form-group mt-3">

                            <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>