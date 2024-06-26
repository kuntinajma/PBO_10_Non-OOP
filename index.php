<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db-perpus";
// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

$nim = "2022150182";
$nama = "Kunti Najma Jalia";
$prodi = "Teknik Informatika";
$sql = "INSERT INTO tb_mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
if ($koneksi->query($sql) == TRUE) {
    echo "Mahasiswa berhasil ditambahkan <br/>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$sql = "SELECT * FROM tb_mahasiswa";
$result = $koneksi->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "NIM = " . $row["nim"] . " - NAMA = " . $row["nama"] . " - PRODI = " . $row["prodi"] . "<br/>";
    }
    } else {
        echo "Tidak ada buku";
    }

$vcari = "001";
$sql = "SELECT * FROM tb_mahasiswa WHERE nim = '$vcari'";
$result = $koneksi->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "NIM = " . $row["nim"] . " - NAMA = " . $row["nama"] . " - PRODI = " . $row["prodi"] .
    "<br/>";
    }
    } else {
    echo "Tidak ada data mahasiswa dengan kriteria nim tersebut" . "<br/>";
    }

$vcari = "001";
$sql = "SELECT * FROM tb_mahasiswa WHERE nim LIKE '%$vcari%'";
$result = $koneksi->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "NIM = " . $row["nim"] . " - NAMA = " . $row["nama"] . " - PRODI = " . $row["prodi"] .
    "<br/>";
    }
    } else {
    echo "Tidak ada data mahasiswa dengan kriteria mendekati nim tersebut" . "<br/>";
    }


$vcari = "001";
$sql = "SELECT * FROM tb_mahasiswa WHERE nim LIKE '%$vcari%' OR nama LIKE
'%$vcari%' OR prodi LIKE '%$vcari%'";
$result = $koneksi->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "NIM = " . $row["nim"] . " - NAMA = " . $row["nama"] . " - PRODI = " . $row["prodi"] .
    "<br/>";
    }
    } else {
     echo "Tidak ada data mahasiswa dengan kriteria mendekati nim tersebut" . "<br/>";
    }


$vcari = "001";
$vnama = "Andi";
$vprodi = "TI";
$sql = "UPDATE tb_mahasiswa SET nama='$vnama', prodi='$vprodi' WHERE nim='$vcari'";
$result = $koneksi->query($sql);
if ($koneksi->query($sql) == TRUE) {
    echo "Data mahasiswa berhasil diperbarui." . "<br/>";
    } else {
    echo "Error: " . $koneksi->error;
    }

$vcari = "001";
$sql = "DELETE FROM tb_mahasiswa WHERE nim = '$vcari'";
if ($koneksi->query($sql) == TRUE) {
    echo "Data mahasiswa berhasil dihapus." . "<br/>";
    } else {
    echo "Error: " . $koneksi->error;
    }
    
?>