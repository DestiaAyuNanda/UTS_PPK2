<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["Nama"];
    $alamat = $_POST["Alamat"];
    $noWA = $_POST["NoWA"];
    $instagram = $_POST["IG"];
    $gender = $_POST["fav_language"];
    $dateTime = $_POST["date"];
    $pilihanItem = $_POST["Pilihan Item"];
    $noWAOrtu = $_POST["NoWA_ortu"];
    $keterangan = $_POST["keterangan"];

    // Buat pesan email
    $to = "destiaayunanda23@gmail.com"; // Alamat email tujuan
    $subject = "Formulir Booking"; // Subjek email

    $message = "
    Data Booking:
    Nama: $nama
    Alamat: $alamat
    No WhatsApp: $noWA
    Instagram: $instagram
    Gender: $gender
    Date and Time: $dateTime
    Item Yang Disewa: $pilihanItem
    No WhatsApp Ortu: $noWAOrtu
    Keterangan: $keterangan
    ";

    // Header email
    $headers = "From: your_email@example.com"; // Gantilah dengan alamat email pengirim
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Data formulir berhasil dikirim. Terima kasih!";
    } else {
        echo "Maaf, terjadi kesalahan saat mengirim data formulir.";
    }
}
?>
