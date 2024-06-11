<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login - <?= WEBSITE_NAME; ?></title>
        <link rel="stylesheet" href="/Assets/CSS/Font.css" type="text/css">
        <link rel="stylesheet" href="/Assets/CSS/Dist.css" type="text/css">
    </head>
    <body>
        <header>
            <h1>Login</h1>
        </header>
        <main>
            <form action="/auth/login" method="POST" class="grid gap-4">
                <div class="grid">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>

                <div class="grid">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>

                <input type="submit" value="Login">
            </form>
        </main>
    </body>
</html>