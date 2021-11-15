<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert</title>
</head>
<body> 
<h1>Tambah Buku</h1>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type="text" name="judul_buku"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="penulis"></td>
        </tr>
        <tr>
            <td>Jenis Buku</td>
            <td>:</td>
            <td><input type="text" name="jenis_buku"></td>
        </tr>
        <tr>
            <label for="formFile">Gambar Buku : </label>
            <input type="file" name="gambar_buku">
        </tr>
    </table>
        <input type="submit" name="simpan" value="SIMPAN">
    </form>
    <?php
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?>
</body>
</html>