<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Mahasiswa</title>
        <style type="text/css">
        body{
            background-color: gray;
        }
        h2, p {
            text-align:center;
            display:block;
        }
        .idmhs::after {
            content: ":";
            margin-left: 39px;
            margin-right: 5px;
        }
        .idprd::after {
            content: ":";
            margin-left: 76px;
            margin-right: 5px;
        }
        .nmmhs::after {
            content: ":";
            margin-left: 10px;
            margin-right: 5px;
        }
        .alamat::after {
            content: ":";
            margin-left: 81px;
            margin-right: 5px;
        }
        input {
            margin:4px;
            margin-right: 15px;
        }
        label {
            margin:15px;
        }
        form{
            background-color:white;
            width:fit-content;
            border-radius:5px;
            border: black solid 1px;
            padding:5px;
        }
        .form {
            text-align:center;
            display: flex;
            justify-content: center;
        }
        .button {
            border:1px solid pink;
            background-color: pink;
            border-radius: 5px;
            padding:5px;
        }
        .button:hover{
            border:1px solid white;
            background-color: yellow;
            color: white;
        }
        </style>
    </head>
    <body>
        <!-- Membuat Form -->
        <h2>FORM DATA MAHASISWA TEKNIK</h2>
        <p>Silahkan Isi Formulir Di Bawah dengan Benar !!</p>
        <div class="form">
            <form action="add1.php" method="post">
                <label class="idmhs">Id Mahasiswa</label><input type="text" name="id_mhs"><br>
                <label class="idprd">Id Prodi</label><input type="text" name="id_prodi"><br>
                <label class="nmmhs">Nama Mahasiswa </label><input type="text" name="nama_mhs"><br>
                <label class="alamat">Alamat</label><input type="text" name="alamat"><br>
                <input class="button" type="submit" name="add" value="simpan">
                <input class="button" type="reset" name="back" value="batal">
            </form>
        </div>
    </body>
</html>