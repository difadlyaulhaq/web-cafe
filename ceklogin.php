<?php
session_start();
include 'conn.php';
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM akun WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $row['username'];
    echo "<script>document.location.href='dashboard'</script>";
} else {
    $failed = 1;
    echo "<script>document.location.href='signin?failed=$failed'</script>";
}

$conn->close();
?>