<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
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
    $pesan = "Data Booking:\n";
    $pesan .= "Nama: $nama\n";
    $pesan .= "Alamat: $alamat\n";
    $pesan .= "No WhatsApp: $noWA\n";
    $pesan .= "Instagram: $instagram\n";
    $pesan .= "Gender: $gender\n";
    $pesan .= "Date and Time: $dateTime\n";
    $pesan .= "Item Yang Disewa: $pilihanItem\n";
    $pesan .= "No WhatsApp Ortu: $noWAOrtu\n";
    $pesan .= "Keterangan: $keterangan\n";

    // Email tujuan
    $emailTujuan = "destiaayunanda23@gmail.com"; // Ganti dengan alamat email yang sesuai

    // Judul email
    $judulEmail = "Formulir Booking";

    // Kirim email
    mail($emailTujuan, $judulEmail, $pesan);

    // Redirect kembali ke halaman sebelumnya atau halaman terima kasih
    header("Location: halaman-terima-kasih.html"); // Ganti dengan URL halaman terima kasih Anda
}
?>
