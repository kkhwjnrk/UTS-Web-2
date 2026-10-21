<?php
$daftarBarang = ["Kecap" => 3000, "Saos" => 2000, "Air Mineral" => 6000, "Indomie" => 4000, "Shampo" => 1500,];

$barangPilihan = "";
$jumlah = 0;
$hargaSatuan = 0;
$total = 0;

if (isset($_POST['barang']) && isset($_POST['jumlah'])) {
  $barangPilihan = $_POST['barang'];
  $jumlah = $_POST['jumlah'];

  foreach ($daftarBarang as $nama => $harga) {
    if ($nama == $barangPilihan) {
      $hargaSatuan = $harga;
      $total = $harga * $jumlah;
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitung Total Belanja</title>
</head>

<body>
  <h2>Hitung Total Belanja</h2>

  <form action="" method="post">
    <label for="barang">Pilih Barang:</label>
    <select name="barang" id="barang">
      <?php foreach ($daftarBarang as $nama => $harga): ?>
        <option value="<?= $nama ?>"><?= $nama ?> - Rp. <?= $harga ?></option>
      <?php endforeach; ?>
    </select>
    <br><br>

    <label for="jumlah">Jumlah:</label>
    <input type="number" name="jumlah" id="jumlah" required min="1">
    <br><br>

    <button type="submit">Hitung total</button>
  </form>

  <h3>Hasil</h3>
  <?php if (isset($_POST['barang']) && isset($_POST['jumlah'])): ?>
    <p>Nama Barang: <?= $barangPilihan ?></p>
    <p>Harga Satuan: <?= $hargaSatuan ?></p>
    <p>Jumlah: <?= $jumlah ?></p>
    <p>Total Belanja: <?= $total ?></p>
  <?php endif; ?>
</body>

</html>