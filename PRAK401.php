<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 10px;
        }

        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>

    <form method="post">
        Panjang : <input type="number" name="panjang" value="<?php if (isset($_POST['panjang'])) echo $_POST['panjang']; ?>"><br>
        Lebar : <input type="number" name="lebar" value="<?php if (isset($_POST['lebar'])) echo $_POST['lebar']; ?>"><br>
        Nilai : <input type="text" name="nilai" value="<?php if (isset($_POST['nilai'])) echo $_POST['nilai']; ?>"><br>
        <button type="submit">Cetak</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = intval($_POST["panjang"]);
        $lebar = intval($_POST["lebar"]);
        $nilai_input = trim($_POST["nilai"]);
        $nilai_array = preg_split("/\s+/", $nilai_input);

        if (count($nilai_array) != $panjang * $lebar) {
            echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
        } else {
            echo "<table>";
            $index = 0;
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . htmlspecialchars($nilai_array[$index]) . "</td>";
                    $index++;
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>

</body>

</html>