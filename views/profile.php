<?php
require_once 'models/User.php';

$email = $_POST['email'];
$user = new User($email);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <p>Bienvenue sur votre page de profil</p>
    <ul>
         <li><?php echo $user->getEmail(); ?></li>
    </ul>

    <a href="<?php echo BASE_URL; ?> /logout">Se deconnecter</a>
</body>
</html>