<?php
require_once ("conn.php");

    $tarikh = $_POST['tarikh_pinjam'];
    $masa = $_POST['masa_aduan'];
    $nama_pemohon = $_POST['user_id'];
    $jaw_pemohon = $_POST['id_jawatan'];
    $jabatan  = $_POST['id_jabatan'];
    $bahagian = $_POST['id_bahagian'];
    $kategori = $_POST['id_kategori'];
    $aduan = $_POST['desc_aduan'];

    // Telegram Bot
    $token = "6150409185:AAEhlaFbRnwOitWsI4jLSul4SADVHj0sGlY";

    $aten = "872952814";

    $message = urlencode("(Aduan ePanta u MPSPK)%0A%0A".$tarikh." - ".$masa."%0A%0ANama Pemohon :%0A".('user_name', $nama_pemohon, 'user_id', 'tb_users')."%0A%0AJabatan :%0A".getDataFromTable2('nama_jabatan', $jabatan, 'id_jabatan', 'lt_jabatan')."%0A%0AAduan :%0A".$aduan);
    
    //$chatIds = array($ikhwan); // AND SOME MORE
    $chatIds = array($aten); // AND SOME MORE
    foreach($chatIds as $chatId) {
        // Send Message To chat id
        $lurl=get_fcontent("https://api.telegram.org/bot$token/sendMessage?chat_id=$chatId&text=$message");
        //echo "https://api.telegram.org/bot$token/sendMessage?chat_id=$chatId&text=$message";
        //redirect("assets/telegrambot/echo.php");
        //echo "cid:".$lurl[0]."<BR>";
    }
?>