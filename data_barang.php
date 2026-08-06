<?php
include 'cek_session.php';
include 'config/koneksi.php';

$sql = "SELECT * FROM tbl_barang ORDER BY nama_barang ASC";
$hasil = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang - Warung ABC</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>📦 Data Barang</h1>

    <p>
        <a href="dashboard.php" class="btn">🏠 Kembali ke Dashboard</a>
        <a href="tambah_barang.php" class="btn">➕ Tambah Barang</a>
    </p>

    <table>
        <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Harga Satuan</th>
            <th>Stok</th>
            <th>Kadaluarsa</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>
        <tr>
            <td><?php echo $row['kode_barang']; ?></td>
            <td><?php echo $row['nama_barang']; ?></td>
            <td><?php echo number_format($row['harga_satuan'],0,',','.'); ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td><?php echo $row['tanggal_kadaluarsa']; ?></td>
            <td>
                <a href="edit_barang.php?id=<?php echo $row['id_barang']; ?>" class="btn">✏ Edit</a>

                <a href="hapus_barang.php?id=<?php echo $row['id_barang']; ?>"
                   class="btn"
                   onclick="return confirm('Yakin hapus barang ini?');">
                    🗑 Hapus
                </a>
            </td>
        </tr>
        <?php } ?>

    </table>

</div>

</body>
</html>