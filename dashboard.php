<?php
session_start();

$admin_username = "admin";
$admin_password = "12345";


if ($_POST['username'] === $admin_username && $_POST['password'] === $admin_password) {
    $_SESSION['admin_logged_in'] = true;
} elseif (!isset($_SESSION['admin_logged_in'])) {
    die("Unauthorized access. Please <a href='login.php'>login</a> first.");
}


$conn = new mysqli('localhost', 'root', '', 'portfolio');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}


$sql = "SELECT * FROM registration ORDER BY id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .login-container {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.admin-dashboard table {
    width: 100%;
    border-collapse: collapse;
}

.admin-dashboard th, .admin-dashboard td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

</style>
<body>
    <div class="admin-dashboard">
        <h1>Admin Dashboard</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Message']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
<?php $conn->close(); ?>
