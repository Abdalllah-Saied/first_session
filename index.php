<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
</head>
<body>
<h2>Registration Form</h2>
<?php
print_r($_GET);
?>
<form action="register.php" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*" required><br>

    <input type="submit" value="Register">
</form>
</body>
</html>