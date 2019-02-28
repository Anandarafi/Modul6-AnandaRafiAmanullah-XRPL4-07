<?php
defined('_VALID') or die('not allowed');
function login(){
    //Simulasi data account anma dan password
    $nama = 'anndrf';
    $pass = 'wolffire';
    if(isset($_POST['nama']) && isset($_POST['pass'])){
        $n = trim($_POST['nama']);
        $p = trim($_POST['pass']);
        if( ($n === $nama) && ($p === $pass)){
            //Jika sama, set cookie
            $_SESSION['nlogin']='value';
            $_SESSION['time'] = 'time()';
            //Redireksi
            ?>
            <script type="text/javascript">
            document.location.href="./";
            </script>
            <?php
        }else{

            echo 'Username atau Password yang Anda Ketikkan Tidak Sesuai, mohon Memasukkan username dan password sesuai yang anda isi di SIGN UP';
            return false;
        }
    }
}
function validate(){
    if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){?>
    <div class="inner">
    <form action="" method="post">
    <table border=0 cellpadding=5>
    <tr>
    <td>Username</td>
    <td><input type="text" name="nama" placeholder="Username" required /></td>
    </tr><tr>
    <td>Password</td>
    <td><input type="password" name="pass" placeholder="Password" required /></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" value="LOGIN" /></td>
    </tr>
    </table>
    </form>
    </div>
    <?php
    exit;
    }
    if(isset($_GET['m']) && $_GET['m'] == 'logout'){
        //Hapus session
        if(isset($_SESSION['nlogin'])){
            unset($_SESSION['nlogin']);
        }
        if(isset($_SESSION['time'])){
            unset($_SESSION['time']);
        }
        //redireksi halaman
        ?>
        <script type="text/javascript">
        document.location.href="./";
        </script>
        <?php
    }
}
?>