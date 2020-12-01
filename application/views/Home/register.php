<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
<?php   echo  form_open_multipart('home/registerProcess'); ?>

    <h1>Register</h1>
    <form action="" method="post">
        Username : <input type="text" name="email"><br><br>
        Email : <input type="text" name="email"><br><br>
        Password : <input type="text" name="password"><br><br>
        <select name="role">
            <option value="1111">Admin</option>
            <option  value="2222">User</option>
    <input type="submit" value="Register">
    </form>
</body>
</html>