<?php

use Ramsey\Uuid\Uuid;
use Starlight\Database\SQL;
use Starlight\Session\Session;

$Session = new Session();
$SQL = new SQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$firstname = trim($_POST['firstname']);
$middlename = trim($_POST['middlename']);
$surname = trim($_POST['surname']);
$phone = trim($_POST['phone']);
$dob = trim($_POST['dob']);

if (COLLECT_GENDER) {
    $gender = trim($_POST['gender']);
} else {
    $gender = null;
}

if (COLLECT_PREFERRED_DETAILS) {
    $preferredName = trim($_POST['preferred_name']);
    $pronouns = trim($_POST['pronouns']);
} else {
    $preferredName = null;
    $pronouns = null;
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirmPassword = trim($_POST['confirm_password']);

if ($password !== $confirmPassword) {
    header('Location: /register?error=password');
    exit;
}

$password = password_hash($password, PASSWORD_BCRYPT);

$uuid = Uuid::uuid4()->toString();

if (!$SQL->Query("INSERT INTO `users`
    (`id`, `uuid`, `role`, `email`, `password`, `code`)
    VALUES
    (
        NULL,
        '{$SQL->Escape($uuid)}',
        0,
        '{$SQL->Escape($email)}',
        '{$SQL->Escape($password)}',
        NULL
    )
")) {
    header('Location: /register?error=db');
    exit;
}

if (!$SQL->Query("INSERT INTO `user_details`
    (`id`, `uuid`, `firstname`, `middlename`, `surname`, `phone`, `birthdate`, `gender`, `preferred_name`, `pronouns`)
    VALUES
    (
        NULL,
        '{$SQL->Escape($uuid)}',
        '{$SQL->Escape($firstname)}',
        '{$SQL->Escape($middlename)}',
        '{$SQL->Escape($surname)}',
        '{$SQL->Escape($phone)}',
        '{$SQL->Escape($dob)}',
        '{$SQL->Escape($gender)}',
        '{$SQL->Escape($preferredName)}',
        '{$SQL->Escape($pronouns)}'
    )
")) {
    header('Location: /register?error=db');
    exit;
}

header('Location: /dashboard');
exit;