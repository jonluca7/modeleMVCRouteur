<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

   <form action="<?php echo BASE_URL.'/profile'; ?>"  method="post">
    <label for="email">Email:</label>
   <input type="email" id="email" name="email" required><br><br>

   <label for="password">Password:</label>
   <input type="password" id="password" name="password" required><br><br>
   
   <input type="submit" value="Login">
</form>
</body>
</html>