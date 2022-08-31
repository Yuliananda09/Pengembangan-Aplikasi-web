<?php
    $bilangan1=$_GET["bilangan1"];
    $bilangan2=$_GET["bilangan2"];
    $hasil = null;

    if (isset($_GET["tambah"])) {
        $hasil=Tambah ($bilangan1,$bilangan2);
    }
    if (isset($_GET["kurang"])) {
        $hasil=kurang ($bilangan1,$bilangan2);
    }
    if (isset($_GET["kali"])) {
        $hasil=kali ($bilangan1,$bilangan2);
    }
    if (isset($_GET["bagi"])) {
        $hasil=bagi ($bilangan1,$bilangan2);
    }

    function Tambah ($bilangan1,$bilangan2) {
        return $bilangan1+$bilangan2;
    }
    function kurang ($bilangan1,$bilangan2) {
        return $bilangan1-$bilangan2;
    }
    function kali ($bilangan1,$bilangan2) {
        return $bilangan1*$bilangan2;
    }
    function bagi ($bilangan1,$bilangan2) {
        return $bilangan1/$bilangan2;
    }
?>

<!DOCTYPE html>
<html>
<body style="background-color:grey">
    <Marquee>
        <h1 style="color:pink">Selamat Datang di Website Yulia Nanda Ivne Fara</h1>
    </Marquee>

    <br>

    <div class="kalkulator">
        <form action=""method="GET">
            <center>
                <h2 style="color:lightblue" class="judul">Kalkulator Sederhana</h2>
            </center>
            
            <br>

            <input type="text" name="bilangan1" autocomplete="off" placeholder="masukan angka">
            <p>
                <input type="text" name="bilangan2" autocomplete="off" placeholder="masukan angka">
            </p>
            <p>
                <input type="submit" name="tambah" value="+">
                <input type="submit" name="kurang" value="-">
                <input type="submit" name="kali" value="*">
                <input type="submit" name="bagi" value="/">
            </p>
        </form> 
    </div>
    <input type="text" value="<?php echo $hasil; ?>" >
</body> 
</html>


