<?php
if(isset($_POST['submit'])) {
    $token = "6078568506:AAEQG3Q-sNTc6Y5s_PsMtkoEzMZfS3hH_Dc";
    $chat_id = "614520140";
    $message = "SILA PULANG BUKU DENGAN SEGERA";

    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=".urlencode($message);
    echo $url; exit; 

    file_get_contents($url);
}
?>


