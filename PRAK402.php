<?php

$mahasiswa = [
    [
        "nama" => "Andi",
        "nim" => "2101001",
        "uts" => 87,
        "uas" => 65
    ],
    [
        "nama" => "Budi",
        "nim" => "2101002",
        "uts" => 76,
        "uas" => 79
    ],
    [
        "nama" => "Tono",
        "nim" => "2101003",
        "uts" => 50,
        "uas" => 41
    ],
    [
        "nama" => "Jessica",
        "nim" => "2101004",
        "uts" => 60,
        "uas" => 75
    ]
];


function konversiHuruf($nilai)
{
    if ($nilai >= 80) return 'A';
    elseif ($nilai >= 70) return 'B';
    elseif ($nilai >= 60) return 'C';
    elseif ($nilai >= 50) return 'D';
    else return 'E';
}


foreach ($mahasiswa as $index => $data) {
    $nilai_akhir = 0.4 * $data["uts"] + 0.6 * $data["uas"];
    $mahasiswa[$index]["nilai_akhir"] = round($nilai_akhir, 1);
    $mahasiswa[$index]["huruf"] = konversiHuruf($nilai_akhir);
}


echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th style='background-color:lightgrey;'>Nama</th>
        <th style='background-color:lightgrey;'>NIM</th>
        <th style='background-color:lightgrey;'>Nilai UTS</th>
        <th style='background-color:lightgrey;'>Nilai UAS</th>
        <th style='background-color:lightgrey;'>Nilai Akhir</th>
        <th style='background-color:lightgrey;'>Huruf</th>
      </tr>";

foreach ($mahasiswa as $mhs) {
    echo "<tr>
            <td>{$mhs['nama']}</td>
            <td>{$mhs['nim']}</td>
            <td>{$mhs['uts']}</td>
            <td>{$mhs['uas']}</td>
            <td>{$mhs['nilai_akhir']}</td>
            <td>{$mhs['huruf']}</td>
          </tr>";
}

echo "</table>";
