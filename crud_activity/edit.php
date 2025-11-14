<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
    <h2>Edit User</h2>

    <form method="POST">
        <input type="text" name="name" value="<?= $row['name']; ?>" required><br>
        <input type="email" name="email" value="<?= $row['email']; ?>" required><br>
        <input type="text" name="phone" value="<?= $row['phone']; ?>" required><br>
        <input type="submit" name="update" value="Update">
    </form>

    <br>
    <a href="index.php" class="button">← Back</a>
</div>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
