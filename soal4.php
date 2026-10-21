<?php
$namaFile = 'todolist.txt';

if (isset($_POST['tambah']) && !empty($_POST['tugas'])) {
  $tugasBaru = $_POST['tugas'];
  $file = fopen($namaFile, "a");
  fwrite($file, $tugasBaru . "\n");
  fclose($file);
}

if (isset($_POST['reset'])) {
  $file = fopen($namaFile, "w");
  fclose($file);
}

$daftarTugas = [];

if (file_exists($namaFile)) {
  $file = fopen($namaFile, "r");

  while ($line = fgets($file)) {
    $item = $line;

    if ($item !== "") {
      $daftarTugas[] = $item;
    }
  }

  fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do List</title>
</head>

<body>
  <h2>To-Do list</h2>

  <form action="" method="post">
    <label for="tugas">Kegiatan Baru:</label>
    <input type="text" name="tugas" id="tugas" placeholder="Masukan kegiatan..." required>
    <br><br>

    <button type="submit" name="tambah">Tambah</button>
  </form>

  <h3>Daftar Kegiatan:</h3>
  <?php if (!empty($daftarTugas)): ?>
    <ol>
      <?php foreach ($daftarTugas as $item): ?>
        <li><?= $item ?></li>
      <?php endforeach; ?>
    </ol>
  <?php else: ?>
    <p>Belum ada kegiatan</p>
  <?php endif ?>

  <form action="" method="post">
    <button type="submit" name="reset" onclick="return confirm('Yakin ingin menghapus semua data?')">Hapus semua</button>
  </form>
</body>

</html>