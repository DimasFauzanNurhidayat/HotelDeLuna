<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include('koneksi.php');
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location: index.php');
    }
    ?>
    <form action="logout.php" method="post">
        <h1>Selamat Datang Admin, <?php echo $_SESSION['username']; ?></h1>
        <button type="submit">Keluar</button>
    </form>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Roles</th>
            <th>Action</th>
        </tr>
        <?php
        $query = "SELECT * FROM user";
        $result = mysqli_query($db, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['roles'] . "</td>";
            echo "<td>";
            echo "<form action='admin.php' method='post'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "<input type='submit' name='edit' value='Edit'>";
            echo "</form>";
            echo "<form action='admin.php' method='post'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "<input type='submit' name='delete' value='Delete'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <form action="admin.php" method="post">
        <button type="submit" name='tambah'>Tambah User</button>
    </form>
    <?php
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $query = "SELECT * FROM user WHERE id = '$id'";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        ?>
        <form action="admin.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $row['username']; ?>">
            <label>Password</label>
            <input type="text" name="password" value="<?php echo $row['password']; ?>">
            <label>Roles</label>
            <select name="roles">
                <option value="ADMIN" <?php if ($row['roles'] == 'ADMIN') echo 'selected'; ?>>ADMIN</option>
                <option value="USER" <?php if ($row['roles'] == 'USER') echo 'selected'; ?>>USER</option>
            </select>
            <button type="submit" name="update">Update</button>
        </form>
        <?php
    }
    if (isset($_POST['tambah'])) {
        ?>
        <form action="admin.php" method="post">
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="text" name="password">
            <label>Roles</label>
            <select name="roles">
                <option value="ADMIN">ADMIN</option>
                <option value="USER">USER</option>
            </select>
            <button type="submit" name="submit">Tambah</button>
        </form>
        <?php
    }
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo "Data tidak boleh kosong";
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $roles = $_POST['roles'];
            $query = "INSERT INTO user (username, password, roles) VALUES ('$username', '$password', '$roles')";
            $result = mysqli_query($db, $query);
            if ($result) {
                header('location: admin.php');
            } else {
                echo "Gagal menambahkan data";
            }
        }
    }
    if (isset($_POST['update'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo "Data tidak boleh kosong";
        } else {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $roles = $_POST['roles'];
            $query = "UPDATE user SET username = '$username', password = '$password', roles = '$roles' WHERE id = '$id'";
            $result = mysqli_query($db, $query);
            if ($result) {
                header('location: admin.php');
            } else {
                echo "Gagal mengubah data";
            }
        }
    }
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM user WHERE id = '$id'";
        $result = mysqli_query($db, $query);
        if ($result) {
            header('location: admin.php');
        } else {
            echo "Gagal";
        }
    }
    ?>
</body>
</html>