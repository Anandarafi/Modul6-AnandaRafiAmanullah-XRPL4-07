# Modul6-AnandaRafiAmanullah-XRPL4-07
halaman Administrator

![altext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/halaman%20administrator.PNG)
jika tidak diisi username atau password akan memunculkan block merah

![altext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/jika%20tidak%20diisi%20username%20atau%20password%20akan%20memunculkan%20block%20merah.PNG)
latihan1-MemeriksaDukunganCookie

![altext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/latihan1-MemeriksaDukunganCookie.PNG)
latihan1-MenghapusCookie

![altext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/latihan1-MenghapusCookie.PNG)
latihan1

![altext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/latihan1.PNG)
latihan2-MenghapusSession

![altext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/latihan2-MenghapusSession.PNG)
latihan2

![altext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/latihan2.PNG)
logout

![altext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/logour.PNG)
salah username/password

![altext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/salah.PNG)

# Soal


1. Jelaskan menggunakan bahasa sendiri perbedaan antara cookies dan session!
<br>
  Cookies:
  a. Cookies disimpan di browser klien
  b. Cookies tidak aman bagi klien karena cookies dapat disisipi program yang tidak diketahui klien.
  c. Data yang disimpan ke dalam metode cookies dapat bertahan lebih lama dan dapat diatur waktu kadaluarsa-nya.
  <br>
  Session
  a. Disimpan disisi server
  b. Lebih aman karena tidak ada file yang dimasukan ke browser klien
  c. Setelah web browser klien dimatikan maka data yang disimpan metode session akan hilang 
  dan waktu kadaluarsa juga tidak dapat diatur
  <br>
2. Bagaimana cara menghapus session dan cookies pada sebuah browser! 
<br>
  Cookie
  untuk cookie hanya perlu dengan memberi nilai kosong pada nama cookie yang ingin kita hapus datanya
  Session
  Untuk menghapus session hanya dengan memberikan fungsi (unset)
3. Berikan contoh kode dari pembuatan dan menghapus cookies dan session!
<br>
  Session
  <?php
    session_start();/*untuk membuat session*/
  ?>
 
  <?php
    session_destroy();/*untuk menghapus session*/
  ?>
  
  Cookies
  
  <?php
  setcookie('nama_cookie', 'nilai_cookie');/*membuat cookie*/
  ?>
  
  <?php
  if (isset($_COOKIE['nama_cookie'])) {
echo 'cookie di-set <br />';
// Menghapus cookie, dengan masa berlaku 1 jam yang lalu setcookie('nama_cookie',
'', time() - 1 * 3600);
echo 'cookie dihapus';
} else {
echo 'unset';
} ?>
  
