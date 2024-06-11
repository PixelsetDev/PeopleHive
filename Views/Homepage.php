<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= WEBSITE_NAME; ?></title>
        <link rel="stylesheet" href="/Assets/CSS/Font.css" type="text/css">
        <link rel="stylesheet" href="/Assets/CSS/Dist.css" type="text/css">
    </head>
    <body>
        <?php require_once __DIR__ . "/Include/Nav.php"; ?>

        <header>
            <h1><?= WEBSITE_NAME; ?></h1>
        </header>

        <main>
            <p class="text-center">
                Welcome to <?= WEBSITE_NAME; ?>'s HR Portal. Please select an option below to get started.
            </p>

            <br><br>

            <div class="cards">
                <a class="card-yellow" href="/jobs">Open Positions</a>
                <a class="card-yellow" href="/login">Login</a>
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