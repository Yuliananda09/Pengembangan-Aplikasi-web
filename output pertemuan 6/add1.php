<?php
    //menghubungkan dengan database
    $koneksi = mysqli_connect("localhost", "root", "", "outputke5");

    //memanggil data
    $id = $_POST['id_mahasiswa'];
    $prodi = $_POST['id_prodi'];    
    $nama = $_POST['nama_mahasiswa'];
    $alamat = $_POST['alamat_mahasiswa'];

    //melakukan query tambah data
    $sql = "INSERT INTO tabel_mahasiswa VALUES('$id', '$prodi', '$nama', '$alamat')";
    $add = mysqli_query($koneksi,$sql);

    //Menampilkan notifikasi apakah data berhasil ditambah atau tidak
    if (!$add) {
        echo "<script> alert ('Gagal Menyimpan Data')</script>";
    }
    else{
        echo "Berhasil Menambahkan Data. ";
        echo "<a href='data1.php'>Tampilkan Data</a>";
    }
?>