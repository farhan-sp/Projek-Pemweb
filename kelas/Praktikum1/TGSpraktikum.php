<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 1</title>
    <h1>Formulir Input Data </h1>
</head>
<body>
    <form action="" method="post">
        <h4>
            Nama:  <input type="text" name="nama" placeholder="Masukan Nama Anda">
        </h4>
        <h4>
            Usia: <input type="number" name="Usia" placeholder="Masukan Usia Anda">
        </h4>
        <h4>
            Jenis Kelamin:
            <select name="jenis_kelamin" id="Jenis Kelamin"> 
                <option value="Laki-laki">Laki-laki</option>
                <option value="perempuan">perempuan</option>
            </select>
        </h4>
        <h4>
            Tanggal: <input type="date" name="Tanggal" placeholder="Masukan Tanggal Lahir ">
        </h4> 
        <input type="submit" name="submit" value="Tambahkan data">   
    </form>

    <h1>Data Tersimpan</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal</th>      
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $usia = $_POST['Usia'];
                    $jenis_kelamin = $_POST['jenis_kelamin'];
                    $tanggal = $_POST['Tanggal'];
                    
                    echo "<td>1</td>";
                    echo "<td>". $nama."</td>";
                    echo "<td>". $usia."</td>";
                    echo "<td>". $jenis_kelamin."</td>";
                    echo "<td>". $tanggal."</td>";
                } else {
                    echo "<td colspan> Data belum ada </td>";
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>