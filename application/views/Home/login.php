<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1>Login</h1>
    <?php  echo  form_open_multipart('setting/loginAksi'); ?>
        Username : <input type="text" name="username"><br><br>
        Password : <input type="password" name="password"><br><br>
        <input type="submit" value="Login">

</body>
</html>