<?php
// fungsi untuk menghitung angka 1 dan 2
function kalkulator($angka1, $angka2, $operator)
{
    if ($operator == "+") {
        return $angka1 + $angka2;
    } else if ($operator == "-") {
        return $angka1 - $angka2;
    } else if ($operator == "*") {
        return $angka1 * $angka2;
    } else if ($operator == "/") {
        return $angka1 / $angka2;
    }
}

// memanggil fungsi kalkulator
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

// hasil perhitungan
$hasil = kalkulator($angka1, $angka2, $operator);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>

<body>

    <h2>Kalkulator</h2>

    <!-- form input angka dan operator -->
    <form action="" method="POST">
        <label for="angka1">Angka 1:</label>
        <input type="number" id="angka1" name="angka1">
        <br><br>
        <label for="angka2">Angka 2:</label>
        <input type="number" id="angka2" name="angka2">
        <br><br>
        <label for="operator">Operator:</label>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit">Hitung</button>
    </form>

    <!-- menampilkan hasil perhitungan -->
    <?php if (isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operator'])): ?>
        <h3>Hasil:</h3>
        <p>
            <strong>Hasil:</strong>
            <?= htmlspecialchars($hasil) ?>
        </p>
    <?php endif; ?>

</body>

</html>