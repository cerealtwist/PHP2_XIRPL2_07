<?php
    session_start();
    if(isset($_POST["judul_buku"])){
        include 'koneksi.php';
        //do add product itu simpan
        $judul_buku = $_POST["judul_buku"];
        $penulis = $_POST["penulis"];
        $jenis_buku = $_POST["jenis_buku"];
        $gambar_buku = $_FILES["gambar_buku"];

        $message        =="";

        if($judul_buku==""){
            $message = "Judul buku harus di isi!";
        }else if($penulis==""){
            $message = "Nama penulis harus di isi!";
        }else if($jenis_buku==""){
            $message = "Jenis harus di isi!";
        }else if(!isset($gambar_buku["tmp_name"]) || $gambar_buku["tmp_name"]==""){
            $message = "Gambar belum di isi!";
        }else{
            
            $filePath = "crud_buku/".basename($gambar_buku["name"]);
            move_uploaded_file($gambar_buku["tmp_name"], $filePath);
            
            $conn->query("INSERT INTO tabel_buku VALUES (null,'".$judul_buku."','".$penulis."','".$jenis_buku."','".$filePath."')");

            $message = "Produk berhasil ditambahkan!";

        }

        $_SESSION["message"] = $message;
    }
    header("location:form.php");
    exit();
?>