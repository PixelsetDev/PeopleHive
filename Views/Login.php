<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login - <?= WEBSITE_NAME; ?></title>
        <link rel="stylesheet" href="/Assets/CSS/Font.css" type="text/css">
        <link rel="stylesheet" href="/Assets/CSS/Dist.css" type="text/css">
    </head>
    <body>
        <?php require_once __DIR__ . "/Include/Nav.php"; ?>

        <header>
            <h1>Login</h1>
        </header>

        <main>
            <?php
            if (isset($_GET['error'])) {
                $error = match ($_GET['error']) {
                    'incorrect' => 'Username or password is incorrect.',
                    default => 'An unexpected error occurred. Please try again.',
                }
                ?>
                <div class="error"><?= $error; ?></div><br>
            <?php } ?>
            <form action="/auth/login" method="POST" class="grid lg:grid-cols-2 gap-4">
                <div class="grid">
                    <label for="email">Email address <sup class="req">*</sup></label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="grid">
                    <label for="password">Password <sup class="req">*</sup></label>
                    <input type="password" name="password" id="password">
                </div>

                <input type="submit" value="Login" class="lg:col-span-2">
            </form>
        </main>

        <?php require_once __DIR__ . "/Include/Footer.php"; ?>
    </body>
</html>