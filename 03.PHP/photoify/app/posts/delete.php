<?php

declare(strict_types=1);

require __DIR__.'/../autoload.php';

if (!isset($_SESSION['logedin'])) {
    redirect('/');
    exit();
}

$dir = __DIR__.'/../../assets/images/posts/';

$_SESSION['banner']['class'] = 'alert-danger';

if (isset($_GET['action']) && $_GET['action'] === 'delete-post-link') {

    $user_id = $_SESSION['logedin']['user_id'];

    $post_id = $_GET['post_id'];

    if(isOwnerofPost($pdo, $post_id, $user_id) === false){
        redirect('/');
        exit();
    }

    $statement = $pdo->query("SELECT * FROM posts WHERE post_id = '$post_id' AND user_id = '$user_id';");

    if (!$statement) {
        die(var_dump($pdo->errorInfo()));
    }

    $array = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$array) {
        $_SESSION['banner']['message'] = 'Post from that user does not exist';
        redirect('/account.php');
        exit();
    }

    $statement = $pdo->query("DELETE FROM posts WHERE post_id = '$post_id' AND user_id = '$user_id';");

    if (!$statement) {
        die(var_dump($pdo->errorInfo()));
    }

    $statement = $pdo->query("DELETE FROM likes WHERE post_id = '$post_id';");

    if (!$statement) {
        die(var_dump($pdo->errorInfo()));
    }

    unlink($dir.$array['content']);

    $_SESSION['banner']['message'] = 'Successfully deleted post';
    $_SESSION['banner']['class'] = 'alert-success';
    redirect('/account.php');
    exit();

} else {

    redirect('/account.php');
}
