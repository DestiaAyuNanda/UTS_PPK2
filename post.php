<?php
// Get the form data
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$noWA = $_POST['NoWA'];
$ig = $_POST['IG'];
$gender = $_POST['fav_language'];
$date = $_POST['date'];
$pilihanItem = $_POST['Pilihan Item'];
$noWAOrtu = $_POST['NoWA_ortu'];
$message = $_POST['Message'];

// Your Twilio account SID and auth token
$accountSid = 'your-account-sid';
$authToken = 'your-auth-token';

// Create a new Twilio client
$client = new Twilio\Rest\Client($accountSid, $authToken);

// Send the WhatsApp message
$message = $client->messages->create(
    'whatsapp:+6282229257929', // Your WhatsApp number
    array(
        'from' => 'whatsapp:+14155238886', // Your Twilio WhatsApp number
        'body' => "Nama: $nama\nAlamat: $alamat\nNo WhatsApp: $noWA\nInstagram: $ig\nGender: $gender\nDate and time: $date\nPilihan Item: $pilihanItem\nNo.WA ortu: $noWAOrtu\nMessage: $message"
    )
);

// Return a success message
echo 'Message sent successfully';
?>
