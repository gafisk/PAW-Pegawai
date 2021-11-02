<!DOCTYPE html>
<html>
<head>
    <title> Login Aplikasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/css/formlogin.css">
</head>

<body>
    <div class="container">
        <section class="login-box">
            <h2> Login Aplikasi</h2>
            <form method="post" action="asset/php/ceklogin.php">
                <input type="text" placeholder="Username" name="username" id="username">
                <input type="password" placeholder="Password" name="password" id="password">
                <input type="submit" name="login" value="login">
            </form>
        </section>
    </div>
</body>
</html>