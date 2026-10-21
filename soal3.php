<?php
function kategoriUsia($usia)
{
  $kategori = "";

  switch (true) {
    case ($usia <= 12):
      $kategori = "Anak-anak";
      break;
    case ($usia <= 17):
      $kategori = "Remaja";
      break;
    case ($usia <= 59):
      $kategori = "Dewasa";
      break;
    default:
      $kategori = "Lansia";
      break;
  }

  return $kategori;
}

$usia = "";
$kategori = "";

if (isset($_POST['usia']) && $_POST['usia'] !== "") {
  $usia = $_POST['usia'];
  $kategori = kategoriUsia($usia);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kategori Usia</title>
</head>

<body>
  <h2>Kategori Usia</h2>

  <form action="" method="post">
    <label for="usia">Usia:</label>
    <input type="number" name="usia" id="usia" required min="1" value="<?= $usia ?>">
    <br><br>

    <button type="submit">Lihat kategori</button>
  </form>

  <?php if ($kategori !== ""): ?>
    <h3>Hasil:</h3>
    <p>Usia: <?= $usia ?> Tahun</p>
    <p>Kategori: <?= $kategori ?></p>
  <?php endif; ?>
</body>

</html>