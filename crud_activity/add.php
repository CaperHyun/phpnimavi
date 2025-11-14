<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
    <h2>Add New User</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="phone" placeholder="Phone" required><br>
        <input type="submit" name="save" value="Save">
    </form>

    <br>
    <a href="index.php" class="button">← Back</a>
</div>
</body>
</html>

<?php
if (isset($_POST['save'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
