<?php
$username = $_SESSION['username'];
include "conn.php";
if (isset($_POST['but_upload'])) {
    $pict_name = $_FILES['file']['pict_name'];
    $target_dir = "upload/";
}
?>

<body>
    <h1>Selamat datang, <?php echo $username ?></h1>

</body>