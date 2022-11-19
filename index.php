<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <style>
body
{
    margin: 0;
    padding: 0;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('R.jpg');
    font-family: consolas;
}
.container
{
    position: relative;
    width: 500px;
    min-height: 270px;
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 5px 15px rgba(0,0,0,1);
}
.container:before
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    pointer-events: none;
}
.container::after
{
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    background: linear-gradient(45deg,#ff0047,#6eff00);
    pointer-events: none;
    animation: animate 10s linear infinite;
}
@keyframes animate
{
    0%
    {
        filter:blur(60px) hue-rotate(0deg);
    }
    100%
    {
        filter:blur(60px) hue-rotate(360deg);
    }
}
.form
{
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 40px;
    box-sizing: border-box;
    z-index: 1;
}
.form h2
{
    margin: 0;
    padding: 0;
    color: #fff;
    font-size: 24px;
}
.form .inputBox
{
    width: 100%;
    margin-top: 20px;
}
.form .inputBox input
{
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 2px solid #fff;
    outline: none;
    font-size: 18px;
    color: #fff;
    padding: 5px 0;
    font-family: consolas;
}
::placeholder
{
    color: #eee;
}
.form .inputBox input[type="submit"]
{
    background: #fff;
    color: #000;
    border: none;
    font-weight: 900;
    max-width: 100px;
    cursor: pointer;
}
.form p
{
    color: #eee;
}
.form p a
{
    color: #fff;
}
.action-btn {
  display: inline-block;
  text-decoration: none;
  color: white;
  font-weight: 700;
  background: linear-gradient(90deg,#a701c8,#55e7fc);
  padding: 0.5em 2em;
  border-radius: 60px;
  margin: 1em 0;
  transition: 0.3s;
}
    </style>
    </head>
<body>
    <center>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo"anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo"anda harus login untuk mengakses halaman komputer";
    }
}
?>
<img src="foto.jpeg">
    <form method="POST" action="cek_login.php">
    <div class="container">
        <div class="form">
        <h2 class="text-center">FORM LOGIN </h2></br>
	<table>
    <a class="action-btn" href="daftar.php">Daftar</a>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" placeholder="masukkan username"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="masukkan password"></td>
      </tr>
      <tr>
      <td></td>
        <td></td>
        <td><input class="action-btn" type="submit" value="LOGIN"></td>
      </tr>
    </table>
    </div>
    </div>
    </form>
</center>
</body>
</html>