<html>
<heaD>
<title>Halaman Login</title>
<style type="text/css">
.inner{
    margin: 150px auto;
    padding : 40px;
    width: 300px;
    border : 5px solid lightblue;
    
}
</style>
</head>
<body>
<?php 
ini_set('display_errors', 1);
define('_VALID', 1);
//include file eksternal
require_once('./wikwik.php');
login();
validate();


?>
<h3>Simulasi Halaman Website Admin yang sudah anda login</h3>
<p>
<a href="?m=logout">LogOut</a>
<p>
Hallo Kawanku, Anda sudah masuk Website ini dengan username dan password yang sesuai. 
<p>
Tekan Refresh (F5);
</body>
</html>