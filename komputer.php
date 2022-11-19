<?php
include("koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="desktop-outline"></ion-icon></span>
                        <span class="title">Pendataan PC</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home"></ion-icon></span>
                        <span class="title">Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <span class="title">Profil</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubbles"></ion-icon></span>
                        <span class="title">Komentar</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle"></ion-icon></span>
                        <span class="title">Bantuan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings"></ion-icon></span>
                        <span class="title">Pengaturan</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- search -->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- userimg -->
                <div class="user">
                    <img src="S.jpeg">
                </div>
            </div>

            <!-- cards -->
            <div class="cardbox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504rb</div>
                        <div class="cardname">Penonton</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">80%</div>
                        <div class="cardname">Penjualan</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">Rp.284</div>
                        <div class="cardname">Pengeluaran</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="sad-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">Rp.900</div>
                        <div class="cardname">Keuntungan</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- order details list -->
            <div class="details">
                <div class="recentorders">
                    <div class="cardheader">
                    <h2> selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h2>
                        <a href="tambah.php" class="btn">Tambah</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>No seri</td>
                                <td>Merek</td>
                                <td>Jumlah</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
   include("koneksi.php");
   $sql='SELECT * FROM tb_komputer';
   $query= mysqli_query($db, $sql);

   while($komputer=mysqli_fetch_array($query)){
    echo "<tr>";
               echo "<td>".$komputer['id']."</td>";
               echo "<td>".$komputer['no_seri']."</td>";
               echo "<td>".$komputer['merek']."</td>";
               echo "<td>".$komputer['jumlah']."</td>";
               echo "<td>";
               echo "<a href='edit.php?id=".$komputer['id']."'>Edit</a> |";
               echo "<a href='hapus.php?id=".$komputer['id']."'>hapus</a>";
               echo "</td>";
    echo "</tr>";
   }
?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <script>
        // menutoggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        // add hovered class in selected list item
        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover,activeLink'));
    </script>
    
</body>
</html>