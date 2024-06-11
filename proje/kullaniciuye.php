<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  display: flex;
  justify-content: space-between; 
  align-items: center;
  height: 100vh;
  margin: 0;
}

.background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("../proje/img/uyekayit.jpg");
  background-size: cover;
  background-position: center;
  z-index: -1; /* Arkaplan resmi diğer içeriğin önünde olacak */
}

.container {
  padding: 16px;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  width: 100%;
  margin: 20px; 
}

input[type=text], input[type=password] {
  width: calc(100% - 30px); 
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: rgb(184,30,255);
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  position: absolute; 
  top: 20px; 
  right: 20px; 
  padding: 10px;
}
</style>
</head>
<body>

<div class="background"></div>

<div class="container">
  <h1>Üye Kayıt Formu</h1>
  <form action="kullaniciuye.php" method="post">
    <p>Hesap oluşturmak için lütfen bu formu doldurunuz.</p>
    <hr>
    <label for="name"><b>İsim</b></label>
    <input type="text" placeholder="İsim" name="name" id="name" required>
    
    <label for="surname"><b>Soyisim</b></label>
    <input type="text" placeholder="Soyisim" name="surname" id="surname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email giriş" name="email" id="email" required>

    <label for="psw"><b>Şifre</b></label>
    <input type="password" placeholder="Şifre giriş" name="psw" id="psw" required>
    
    <hr>
    <p>Sözleşme ve üyelik şartlarını kabul ediyorum. <a href="#">Şartlar & Gizlilik</a>.</p>

    <button type="submit" class="registerbtn">Kayıt ol</button>
  </form>
</div>

<div class="signin">
  <p>Zaten bir hesabınız var mı? <a href="kullaniciasci.php">Giriş Yap</a>.</p>
</div>

</body>
</html>


<?php
include("index.php");

if(isset($_POST["name"],$_POST["surname"],$_POST["email"],$_POST["psw"]))
{
  $name=$_POST["name"];
  $surname=$_POST["surname"];
  $email=$_POST["email"];
  $psw=$_POST["psw"];
  $hashli_sifre = hash('sha256', $psw);

  $ekle="INSERT INTO uyepanel (ad,soyad,email,sifre)VALUES
  ('".$name."','".$surname."','".$email."','".$hashli_sifre."')";

  if($baglan-> query($ekle)===TRUE)
  {
    echo"<script>alert('Bilgileriniz kaydedilmiştir')</script>";
    header("Location: website.php"); // Anasayfaya yönlendir
    exit;
  }

  else{
    echo"<script>alert('Bilgileriniz kaydedilmiştir')</script>";
  }

}



?>


    