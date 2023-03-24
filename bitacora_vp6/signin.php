<?php
require 'config/constants.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog website</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign In</h2>
        <?php if($_SESSION['signup-success']) : ?>
            <div class="alert_message success">
                <p>
                    <?= $_SESSION['signup-success'];
                    unset($_SESSION['signup-success']);
                    ?>
                </p>
            </div>
            <?php endif ?>
        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username_email" placeholder="Username or Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit" class="btn">Sign In</button>
            <small>Don't have an account?<a href="signup.php">Sign Up</a></small>
        </form>
    </div>
</section>

</body>
</html>