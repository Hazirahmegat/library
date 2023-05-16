<?php

$tajukBuku ="";
$tarikhPulang = "";


$apiToken = "6147033566:AAEsO2Y8W-OmnJQyLtXnbGfjRWLsk6I3ODM";
$data = [
    'chat_id' => '@libs_notibot1',
    'text' => 'Peringatan : Tarikh akhir pulang buku!' .$tajukBuku . 'pada' .$tarikhPulang . 'Sila hantar buku segera untuk elakkan bayaran denda'
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
// Do what you want with result
?>

