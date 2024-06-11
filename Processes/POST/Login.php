<?php

use Starlight\Database\SQL;
use Starlight\Session\Session;

$Session = new Session();
$SQL = new SQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (isset($_POST['email']) && isset($_POST['password'])) {
    $query = $SQL->Query("SELECT * FROM `users` WHERE `email` = '".$SQL->Escape($_POST['email'])."'");

    if ($query->num_rows == 0) {
        header('Location: /login?error=incorrect');
        exit;
    }

    $info = $query->fetch_assoc();

    if (!password_verify($_POST['password'], $info['password'])) {
        header('Location: /login?error=incorrect');
        exit;
    }

    $Auth = new Session();
    $Auth->Login($info['uuid']);

    header('Location: /dashboard');
    exit;
}