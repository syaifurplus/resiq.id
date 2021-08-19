<?php
session_start();
 
// variabel kosong untuk menyimpan pesan error
$form_error = '';
 
// cek apakah tombol sumit sudah di klik atau belum
if(isset($_POST['submit'])){

    // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // validasi login benar atau salah
    if($email == 'admin' AND $password == 'admin'){
 
        // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman profil
        $_SESSION['email'] = $email;
        header('Location: index.php');
    }
    else{
 
        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}
 
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>
        <?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password salah</h2>";
        }
        ?>
        <div class="container">
          <h1>Login</h1>
            <form method="post" class="form" action="index.php">
                <label>Username</label><br>
                <input id="user-email" class="form-content" type="text" placeholder=" " name="email" autocomplete="on" required /><br>
                <label>Password</label><br>
                <input id="user-password" class="form-content" placeholder=" " type="password" name="password" required /><br>
                <button><input id="submit-btn" type="submit" name="submit" value="LOGIN" class="login" /></button>
            </form>
        </div>
    </body>
</html>