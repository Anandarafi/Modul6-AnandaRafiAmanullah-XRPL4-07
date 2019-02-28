# Modul6-AnandaRafiAmanullah-XRPL4-07
halaman Administrator

![alttext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/halaman%20administrator.PNG)
jika tidak diisi username atau password akan memunculkan block merah

![alttext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/jika%20tidak%20diisi%20username%20atau%20password%20akan%20memunculkan%20block%20merah.PNG)
latihan1-MemeriksaDukunganCookie

![alttext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/latihan1-MemeriksaDukunganCookie.PNG)
latihan1-MenghapusCookie

![alttext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/latihan1-MenghapusCookie.PNG)
latihan1

![alttext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/latihan1.PNG)
latihan2-MenghapusSession

![alttext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/latihan2-MenghapusSession.PNG)
latihan2

![alttext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/latihan2.PNG)
logout

![alttext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/logour.PNG)
salah username/password

![alttext](https://github.com/Anandarafi/Modul6-AnandaRafiAmanullah-XRPL4-07/blob/master/salah.PNG)

# Soal
1. Jelaskan menggunakan bahasa sendiri perbedaan antara cookies dan session!
2. Bagaimana cara menghapus session dan cookies pada sebuah browser! 
3. Berikan contoh kode dari pembuatan dan menghapus cookies dan session!

Jawab:
1. Cookies:
Mekanisme Cookie untuk meletakkan sebuah data pada browser sehingga memudahkan untuk melakukan penelusuran di browser. Berupa informasi dalam bentuk teks. Pembuat cokkie adlah pihak servernya. Cookie merupakan bagian dari HTTP header, yang harus dipanggil sebelum ada output atau keluaran dari browser tersebut. Tidak semua browser dapat menerima adanya cookie.
Sedangkan Session :
Menyimpan informasi pada servernya bukan pada browser. Informasinya bersifat temporer(untuk sementara waktu), informasi dapat dihapus oleh server jika user website tersebut telah meninggalkan website nya. Klien tidak dapat mengakses untuk mendapatkan informasi session.
2. 
 - Cookie = untuk cookie hanya perlu dengan memberi nilai kosong pada nama cookie yang ingin kita hapus datanya
 - Session = Untuk menghapus session hanya dengan memberikan sebuah bahasa unset() atau fungsi session_destroy()
3.
  - Session 
    session_start(); ?>)/* Kode ini digunakan untuk pembuatan session
    session_destroy(); ?>) /* Kode ini digunakan untuk penghapusan session
  - Cookies
  setcookie('nama_cookie', 'nilai_cookie');  ?>)/*Kode ini digunakan untuk pembuatan cookie */
  if (isset($_COOKIE['nama_cookie'])) {
  echo 'cookie di-set <br />';
// Menghapus cookie, dengan masa berlaku 1 jam yang lalu setcookie('nama_cookie',
'', time() - 1 * 3600);
echo 'cookie dihapus';
} else {
echo 'unset';
}) /* Kode ini digunakan untuk penghapusan cookie, dengan masa berlaku 1 jam yang lalu.
