<?php

declare(strict_types=1);

require __DIR__.'/../autoload.php';

if (isset($_POST['signup-btn'])) {

    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $fullname = trim(filter_var($_POST['fullname'], FILTER_SANITIZE_STRING));
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $timezone = trim(filter_var($_POST['timezone'], FILTER_SANITIZE_STRING));
    $npassword = $_POST['npassword'];
    $rpassword = $_POST['rpassword'];

    $_SESSION['banner']['class'] = 'alert-danger';

    if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) != true) {
        $_SESSION['errors']['email'] = 'Please provide a valid email';
    } else {
        $_SESSION['values']['email'] = $email;
    }
    if (empty($username)) {
        $_SESSION['errors']['username'] = 'Please provide a username';
    } else {
        $_SESSION['values']['username'] = $username;
    }
    if (empty($fullname)) {
        $fullname = 'Unknown User';
    } else {
        $_SESSION['values']['fullname'] = $fullname;
    }
    if (empty($npassword)) {
        $_SESSION['errors']['npassword'] = 'You need to set a password';
    }
    if (empty($rpassword)) {
        $_SESSION['errors']['rpassword'] = 'Repeat your password';
    }

    if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
        $_SESSION['banner']['message'] = 'Check fields for errors';
        redirect('/signup.php');
        exit();
    }

    if ($npassword != $rpassword) {
        $_SESSION['errors']['npassword'] = 'Password does not match';
        $_SESSION['errors']['rpassword'] = 'Password does not match';
        $_SESSION['banner']['message'] = 'Check fields for errors';
        redirect('/signup.php');
        exit();
    }

    $statement = $pdo->prepare('SELECT email, username FROM users WHERE username = :username OR email = :email;');

    if (!$statement) {
        die(var_dump($pdo->errorInfo()));
    }

    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->execute();

    $credentials = $statement->fetch(PDO::FETCH_ASSOC);

    if ($credentials['username'] === $username || $credentials['email'] === $email) {
        unset($_SESSION['errors']);
        unset($_SESSION['values']);
        $_SESSION['banner']['message'] = 'Email or Username already registred';
        redirect('/signup.php');
    }

    $password = password_hash($npassword, PASSWORD_DEFAULT);

    $statement = $pdo->prepare('INSERT INTO users (email,fullname,username,timezone,password) VALUES (:email,:fullname,:username,:timezone,:password);');

    if (!$statement) {
        die(var_dump($pdo->errorInfo()));
    }

    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':fullname', $fullname, PDO::PARAM_STR);
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':timezone', $timezone, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->execute();

    $_SESSION['banner']['message'] = 'You are now registred';
    $_SESSION['banner']['class'] = 'alert-success';
    unset($_SESSION['values']);
    redirect('/');
    exit();

} else {

    redirect('/signup.php');

}
