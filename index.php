<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


    <?php session_start(); ?>


    <form action="handleForm.php" method="POST">
        <p><input type="text" placeholder="Username" name="firstName"></p>
        <p><input type="password" placeholder="Password" name="password"></p>
        <p><input type="submit" value="Submit" name="submitBtn"></p>
    </form>

    <h2>
        User logged in:
        <?php
        if (isset($_SESSION['firstName'])) {
            echo $_SESSION['firstName'];
        }
        ?>
    </h2>

    <h2>
        User password:
        <?php
        if (isset($_SESSION['password'])) {
            echo $_SESSION['password'];
        }
        ?>
    </h2>

    <a href="unset.php">Logout</a>

    <?php
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red;'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']); 
    }
?>
</body>
</html>   