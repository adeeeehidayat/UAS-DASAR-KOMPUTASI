<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu - GadgetStore</title>
    <link rel="stylesheet" href="style-bukutamu.css">
    <!-- START JAVASCRIPT JAM DIGITAL -->
    <script>
    window.setTimeout("waktu()", 1000);
    
    function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = waktu.getHours();
        document.getElementById("menit").innerHTML = waktu.getMinutes();
        document.getElementById("detik").innerHTML = waktu.getSeconds();
    }
    </script>
<!-- END JAVASCRIPT JAM DIGITAL -->
</head>
<body>
    <!-- START HEADER -->
    <img src="images/gbheader.jpg" alt="gambar-header" width="100%">
    <!-- END HEADER -->

    <!-- START MENU -->
    <nav>
        <div class="menu">
            <a href="index.html">Home</a> |
            <a href="about.html">About</a> |
            <a href="product.html">Product</a> |
            <a href="#">Buku Tamu</a>
        </div>
    </nav>
    <!-- START OUTPUT JAM DIGITAL -->
    <div class="jam-digital">
        <div class="kotak">
            <p id="jam"></p>
        </div>
        <div class="kotak">
            <p id="menit"></p>
        </div>
        <div class="kotak">
            <p id="detik"></p>
        </div>
    </div>
    <!-- END OUTPUT JAM DIGITAL -->
    <!-- END MENU -->

    <!-- START KONTEN -->
    <h2>Form Buku Tamu</h2>
    <div class="formulir">
        <form action="#" method="POST">
            <div>
                <label for="nama_lengkap">Nama Lengkap</label><br>
                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Isi Nama Lengkap.." required>
            </div>
            <div>
                <label for="nama_panggilan">Nama Panggilan</label><br>
                <input type="text" name="nama_panggilan" id="nama_panggilan" placeholder="Isi Nama Panggilan.." required>
            </div>
            <div>
                <label for="umur">Umur</label><br>
                <input type="number" name="umur" id="umur" placeholder="Umur.." required>
            </div>
            <div>
                <label for="domisili">Domisili</label><br>
                <input type="text" name="domisili" id="domisili" placeholder="Domisili.." required>
            </div>
            <div>
                <label>Barang apa saja yang telah dibeli</label><br>
                <textarea cols="40" rows="5" name="barang_dibeli" id="barang_dibeli" placeholder="Barang apa saja yang telah anda beli di website ini.." required></textarea>
            </div>
            <div>
                <input type="submit" value="Kirim">
                <input type="reset" value="Reset">
            </div><br>
        </form>
        <div class="php-form">
            <?php
            if(isset($_POST['nama_lengkap'])){
                $nama_lengkap = $_POST['nama_lengkap'];
                $nama_panggilan = $_POST['nama_panggilan'];
                $umur = $_POST['umur'];
                $domisili = $_POST['domisili'];
                $barang_dibeli = $_POST['barang_dibeli'];
                echo"
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>: $nama_lengkap</td>
                    </tr>
                    <tr>
                        <td>Nama Panggilan</td>
                        <td>: $nama_panggilan</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>: $umur</td>
                    </tr>
                    <tr>
                        <td>Domisili</td>
                        <td>: $domisili</td>
                    </tr>
                    <tr>
                        <td>Barang yang dibeli</td>
                        <td>: $barang_dibeli</td>
                    </tr>
                </table>";
            }
            ?>
        </div>
    </div>
    <br>
    <!-- END KONTEN -->

    <!-- START FOOTER -->
    <div class="footer">
        <h3 style="color: white;">IKUTI KAMI DI</h3>
        <a href="https://www.instagram.com/adehidayat._/" target="_blank"><img src="images/icon-instagram.png" alt="icon-instagram">
        <a href="https://twitter.com/adeehidayat_" target="_blank"><img src="images/icon-twitter.png" alt="icon-instagram">
        <a href="https://www.youtube.com/channel/UCPztnXfnNW5MSkmyG6ppg9g" target="_blank"><img src="images/icon-youtube.png" alt="icon-instagram"><br>
        <a href="mailto:111202113294@mhs.dinus.ac.id" target="_blank" style="color: rgb(255, 196, 0);">E-mail : 111202113294@mhs.dinus.ac.id</a><br>
        <footer>
                <p style="color: white;">Copyright &copy; 2022 Septian Ade Hidayat.</p>
        </footer>
    </div>
    <!-- END FOOTER -->
</body>
</html>