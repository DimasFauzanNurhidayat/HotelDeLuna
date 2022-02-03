<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form {
            margin: 0 auto;
            width: 300px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location: index.php');
    }
    ?>
    <h1>Selamat Datang <?php echo $_SESSION['username']; ?></h1>
    <form action="logout.php" method="post">
        <button type="submit">Keluar</button>
    </form>
</body>
</html>
