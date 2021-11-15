<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
</head>
<body>
    <h1>Tampilan</h1>
    <?php
        include 'koneksi.php';
        $getBuku = $conn->query("SELECT * FROM tabel_buku");
        while($fetchBuku = $getBuku->fetch_assoc()){
    ?>

    <table style="display:inline-table;">
        <tr>
            <td><img style="width:100%" src="<?=$fetchBuku["gambar_buku"]?>"></td>
        </tr>
        <tr>
            <td>
                <strong><?=$fetchBuku["judul_buku"]?></strong><br />
                <?=$fetchBuku["penulis"]?><br />
                <?=$fetchBuku["jenis_buku"]?>
            </td>
        </tr>
        <tr>
            <td>
                <a href="update.php?id=<?=$fetchBuku["id_buku"]?>"><button>Update</button></a>
                <a href="delete.php?id=<?=$fetchBuku["id_buku"]?>"><button>Delete</button>
            </td>
        </tr>
    </table>    

    <?php
        }
    ?>
</body>
</html>