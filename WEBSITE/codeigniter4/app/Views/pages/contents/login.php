<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">        
        <title>Forum Login</title>
    </head>
    <body>
        <form class="container" method="post" action="cek-login">
            <h1>Login</h1>
            <label>Email : </label>
            <input type="text" name="email" required>
            <label>Password : </label>
            <input type="password" name="password" required>

            <button type="submit">Kirim</button>
        </form>
    </body>
</html>