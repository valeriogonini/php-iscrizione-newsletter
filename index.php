<?php
$user_email = $_POST['email'];

function checkEmail($email)
{
    var_dump($email);
    if (str_contains($email, '@') && str_contains($email, '.')) {
        var_dump("l'email $email è valida");
        return true;
    } else {
        var_dump("l'email $email non è valida");
        return false;
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="inserisci email">
        <button>Invia</button>

    </form>
    <div>
        <?php if (checkEmail($user_email) === true) { ?>
            <div>l'email <?php echo $user_email; ?> è valida</div>
        <?php } else { ?>
            <div>l'email <?php echo $user_email; ?> non è valida</div>
        <?php } ?>
    </div>
</body>

</html>