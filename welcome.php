<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: homepage.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body style="background-color:#33FFA2;">
    
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
    <br>
    <br>
     <p>Sharmila.S -
    <p>Resume</p>
    
    <a href="sar.pdf">View.</a>
</body>
</html>
