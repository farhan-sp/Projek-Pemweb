<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">        
        <title>Forum Login</title>
    </head>
    <body>
        <form class="container" method="post" action="tambah-admin">
            <h1>Tambah Admin</h1>
            <label>Nama : </label>
            <input type="text" name="nama">
            <label>Email : </label>
            <input type="text" name="email">
            <label>Role</label>
            <select name="role">
                <option value="admin">Admin</option>
            </select>
            <label>Password : </label>
            <input type="text" name="password">

            <button type="submit">Kirim</button>
        </form>
    </body>
</html>