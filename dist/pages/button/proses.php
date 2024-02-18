<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data_form1 = $_POST['namaLengkap'];
    $data_form2 = $_POST['jenisKelamin'];

    include "../../../service/database.php";
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Siapkan query untuk menyisipkan data ke tabel data_diri
    $sql = "INSERT INTO data_diri (namaLengkap, jenisKelamin) VALUES ('$input_form1', '$input_form2')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi ke database
    $conn->close();
} else {
    echo "Metode permintaan tidak valid.";
}
