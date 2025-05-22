<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <a href="<?= base_url('/home')?>"><button>Kembali Ke Home</button></a>
    <div class="table-container">
        <h1>Edit Data</h1>
        <table id="table-data" border="1">
            <thead>
                <tr>
                    <?php foreach($kolom as $k): ?>
                        <th><?= $k ?></th>
                    <?php endforeach; ?>
                    <th colspan="2">Modifikasi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($berita as $b): ?>
                    <tr id="data-row">
                        <td><?= $b['id'] ?></td>
                        <td><img src="<?= base_url('img/' . $b['gambar']) ?>"></td>
                        <td><?= $b['nama'] ?></td>
                        <td><?= $b['keterangan'] ?></td>
                        <td><?= $b['tanggal'] ?></td>
                        <td><?= $b['kata_kunci'] ?></td>
                        <td id="update-btn-<?= $b['id']?>">
                            <button class='button-update' onclick="toggleUpdate(<?= $b['id']?>)">Update</button>
                        </td>
                        <td id="delete-btn-<?= $b['id']?>">
                            <form action="<?= base_url('/edit/delete/') . $b['id'] ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                <button class='button-delete' type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr id="toggleUpdate-<?= $b['id']?>" class="hidden">
                        <td colspan="<?= count($kolom) + 2 ?>">
                            <form action="<?= base_url('/edit/update/') . $b['id'] ?>"  method="post">
                                <label>Nama File Gambar</label><br>
                                <input type="text" name="kolom1" maxlength="30" required>
                                <label>Nama Berita</label><br>
                                <input type="text" name="kolom2" maxlength="30" required>
                                <label>Keterangan</label><br>
                                <textarea name="kolom3" required></textarea>
                                <label>Tanggal</label><br>
                                <input type="date" name="kolom4" required>
                                <label>Kata Kunci</label><br>
                                <input type="text" name="kolom5" maxlength="100" required>
                                <input id="update-btn" value="Kirim" type="submit" onclick="toggleUpdate(<?= $b['id']?>)">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>                    
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="<?= count($kolom) + 2 ?>">
                        <button onclick="toggleForm()" id="add-btn">Tambah Data</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <div id="form" class="hidden">
        <h2>Tambah Data</h2>
        <hr>
        <form action="<?= base_url('edit/tambah') ?>" method="post">
            <br><label>Nama File Gambar</label><br>
            <input type="text" name="kolom1" maxlength="30" required>
            <br><label>Nama Berita</label><br>
            <input type="text" name="kolom2" maxlength="30" required>
            <br><label>Keterangan</label><br>
            <textarea name="kolom3" required></textarea>
            <br><label>Tanggal</label><br>
            <input type="date" name="kolom4" required>
            <br><label>Kata Kunci</label><br>
            <input type="text" name="kolom5" maxlength="100" required>
            <input id="add-btn" type="submit" onclick="toggleForm()">
        </form>
        <button id="delete-btn" onclick="toggleForm()">Batal</button>
    </div>

    <script src="<?= base_url('/js/edit.js') ?>"></script>
</body>
</html>