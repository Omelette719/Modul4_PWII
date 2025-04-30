<?php

$mahasiswa = [
    [
        "nama" => "Ridho",
        "matkul" => [
            ["nama" => "Pemrograman I", "sks" => 2],
            ["nama" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama" => "Arsitektur Komputer", "sks" => 3],
        ],
    ],
    [
        "nama" => "Ratna",
        "matkul" => [
            ["nama" => "Basis Data I", "sks" => 2],
            ["nama" => "Praktikum Basis Data I", "sks" => 1],
            ["nama" => "Kalkulus", "sks" => 3],
        ],
    ],
    [
        "nama" => "Tono",
        "matkul" => [
            ["nama" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama" => "Komputasi Awan", "sks" => 3],
            ["nama" => "Kecerdasan Bisnis", "sks" => 3],
        ],
    ],
];

foreach ($mahasiswa as $index => $data) {
    $totalSKS = 0;
    foreach ($data['matkul'] as $matkul) {
        $totalSKS += $matkul['sks'];
    }

    $mahasiswa[$index]['total_sks'] = $totalSKS;
    $mahasiswa[$index]['keterangan'] = $totalSKS < 7 ? "Revisi KRS" : "Tidak Revisi";
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th style='background-color:lightgrey;'>No</th>
        <th style='background-color:lightgrey;'>Nama</th>
        <th style='background-color:lightgrey;'>Mata Kuliah diambil</th>
        <th style='background-color:lightgrey;'>SKS</th>
        <th style='background-color:lightgrey;'>Total SKS</th>
        <th style='background-color:lightgrey;'>Keterangan</th>
      </tr>";

$no = 1;
foreach ($mahasiswa as $data) {
    foreach ($data['matkul'] as $i => $matkul) {
        echo "<tr>";
        if ($i == 0) {
            echo "<td>{$no}</td>";
            echo "<td>{$data['nama']}</td>";
        } else {
            echo "<td></td><td></td>";
        }

        echo "<td>{$matkul['nama']}</td>";
        echo "<td>{$matkul['sks']}</td>";

        if ($i == 0) {
            $bgColor = $data['keterangan'] == "Tidak Revisi" ? "green" : "red";
            echo "<td>{$data['total_sks']}</td>";
            echo "<td style='background-color:$bgColor; color:Black'>{$data['keterangan']}</td>";
        } else {
            echo "<td></td><td></td>";
        }

        echo "</tr>";
    }
    $no++;
}

echo "</table>";
