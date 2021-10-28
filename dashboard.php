<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Test connected</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hi, <?php echo $_SESSION['username']; ?>!</p>
        <p>Vous etes connecté !</p>
        <p><a href="logout.php">Deconnecter</a></p>
    </div>
</body>
</html>
