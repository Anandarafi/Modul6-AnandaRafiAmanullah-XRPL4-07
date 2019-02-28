<html>
<head>
<title>Set Session</title>
</heaD>
<body>
<?php
//Inisialisasi data session
session_start();
//set session jika belum ada
if(!isset($_SESSION['test'])){
    $_SESSION['test'] = 'value';
}
else{
    echo 'Session di-set <br/>';
    //Mencetak nilai session test
    echo 'NIlai: ' . $_SESSION['test'] . '<br/>';

    //Mencetak semua elemen session
    print_r($_SESSION);
}
?>
<p>
Tekan Refresh (F5);
</body>
</html>