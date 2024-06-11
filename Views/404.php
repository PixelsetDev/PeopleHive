<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page not Found - <?= WEBSITE_NAME; ?></title>
        <link rel="stylesheet" href="/Assets/CSS/Font.css" type="text/css">
        <link rel="stylesheet" href="/Assets/CSS/Dist.css" type="text/css">
    </head>
    <body>
        <?php require_once __DIR__ . "/Include/Nav.php"; ?>

        <header class="bg-red-500 nobg">
            <h1>Page not Found</h1>
        </header>

        <main>
            <p class="text-center">
                The requested page or resource could not be found.
            </p>
        </main>

        <?php require_once __DIR__ . "/Include/Footer.php"; ?>
    </body>
</html>