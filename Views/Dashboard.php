<?php

use PeopleHive\Processes\User\UserInfo;

$UserInfo = new UserInfo();
$role = $UserInfo->getRole();

?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= WEBSITE_NAME; ?></title>
        <link rel="stylesheet" href="/Assets/CSS/Font.css" type="text/css">
        <link rel="stylesheet" href="/Assets/CSS/Dist.css" type="text/css">
    </head>
    <body>
        <?php require_once __DIR__ . "/Include/Nav.php"; ?>

        <header>
            <h1>Dashboard</h1>
        </header>

        <main>
            <p class="text-center">
                Welcome to <?= WEBSITE_NAME; ?>'s HR Portal. Please select an option below to get started.
            </p>

            <br><br>

            <div class="cards">
                <a class="card-yellow" href="/profile">My Account</a>
                <?php if ($role == ROLE_ONBOARDING) { ?>
                <a class="card-yellow" href="/dashboard/onboarding">Onboarding</a>
                <a class="card-yellow" href="/dashboard/documents">My Documents</a>
                <?php } ?>
                <?php if ($role >= ROLE_EMPLOYEE) { ?>
                <a class="card-yellow" href="/dashboard/workplace">My Job</a>
                <a class="card-yellow" href="/dashboard/documents">My Documents</a>
                <a class="card-yellow" href="/dashboard/holidays">Holidays</a>
                <?php } ?>
                <a class="card-yellow" href="/jobs">Vacancies</a>
                <?php if ($role >= ROLE_EMPLOYEE) { ?>
                <?php if ($UserInfo->hasPermission('manage-vacancies')) { ?>
                <a class="card-yellow" href="/dashboard/jobs">Manage Vacancies</a>
                <?php } if ($role >= ROLE_MANAGER) { ?>
                <a class="card-yellow" href="/dashboard/team">Team Overview</a>
                <a class="card-yellow" href="/dashboard/company">Company Overview</a>
                <?php } if ($UserInfo->hasPermission('manage-teams')) { ?>
                <a class="card-yellow" href="/dashboard/teams">Manage Teams</a>
                <?php } if ($UserInfo->hasPermission('manage-system-settings')) { ?>
                <a class="card-yellow" href="/dashboard/settings">System Settings</a>
                <a class="card-yellow" href="/dashboard/logs">System Logs</a>
                <?php } ?>
                <?php } ?>
            </div>

            <br><br><hr><br><br>

            <h2 class="text-center">About <?= WEBSITE_NAME; ?></h2>
            <br>
            <p>
                <?= file_get_contents(__DIR__ . '/../Content/Text/ABOUT.txt'); ?>
            </p>
        </main>

        <?php require_once __DIR__ . "/Include/Footer.php"; ?>
    </body>
</html>