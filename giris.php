<?php
// Kullanıcı adı ve şifreyi kontrol et
$correct_username = "777kenan";
$correct_password = "777kenan";

// Formdan gelen veriler
$username = $_POST['username'];
$password = $_POST['password'];

// Kontrol et
if ($username === $correct_username && $password === $correct_password) {
    echo "<script>alert('Başarıyla giriş yaptınız!');</script>";
} else {
    echo "<script>alert('Yanlış kullanıcı adı veya şifre!');</script>";
}
?>
