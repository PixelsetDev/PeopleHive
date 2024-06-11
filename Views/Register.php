<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register - <?= WEBSITE_NAME; ?></title>
        <link rel="stylesheet" href="/Assets/CSS/Font.css" type="text/css">
        <link rel="stylesheet" href="/Assets/CSS/Dist.css" type="text/css">
    </head>
    <body>
        <?php require_once __DIR__ . "/Include/Nav.php"; ?>

        <header>
            <h1>Register</h1>
        </header>

        <main>
            <form action="/auth/register" method="POST" class="grid gap-4">
                <h3>Your information</h3>
                <p class="text-xs italic">
                    Please enter information as seen on legal documents such as your passport.
                </p>

                <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-4">
                    <div class="grid">
                        <label for="firstname">First name <sup class="req">*</sup></label>
                        <input type="text" name="firstname" id="firstname" maxlength="63" required>
                    </div>
                    <div class="grid">
                        <label for="middlename">Middle name</label>
                        <input type="text" name="middlename" id="middlename" maxlength="63">
                    </div>
                    <div class="grid">
                        <label for="surname">Surname <sup class="req">*</sup></label>
                        <input type="text" name="surname" id="surname" maxlength="63" required>
                    </div>
                    <div class="grid">
                        <label for="phone">Phone Number <sup class="req">*</sup></label>
                        <input type="tel" name="phone" id="phone" required>
                    </div>
                    <div class="grid">
                        <label for="phone">Date of Birth <sup class="req">*</sup></label>
                        <input type="date" name="phone" id="phone" required>
                    </div>
                    <?php if (COLLECT_GENDER) { ?>
                    <div class="grid">
                        <label for="gender">Gender <sup class="req">*</sup></label>
                        <select name="gender" id="gender" required>
                            <option value="Not set" disabled selected>None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                            <option value="Prefer not to say">Prefer not to say</option>
                        </select>
                    </div>
                    <?php } ?>
                </div>

                <br><hr><br>

                <h3>Your Account</h3>

                <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-4">
                    <div class="grid xl:col-span-1 md:col-span-2 col-span-1">
                        <label for="email">Email address <sup class="req">*</sup></label>
                        <input type="email" name="email" id="email" maxlength="127" required>
                    </div>
                    <div class="grid">
                        <label for="password">Password <sup class="req">*</sup></label>
                        <input type="password" name="password" id="password" maxlength="<?= MAX_PASSWORD_LENGTH; ?>" required>
                    </div>
                    <div class="grid">
                        <label for="confirmpassword">Confirm Password <sup class="req">*</sup></label>
                        <input type="password" name="confirmpassword" id="confirmpassword" maxlength="<?= MAX_PASSWORD_LENGTH; ?>" required>
                    </div>
                </div>

                <br><hr><br>

                <?php if (COLLECT_PREFERRED_DETAILS) { ?>

                <h3>Preferred Details</h3>
                <p class="text-xs italic">
                    If your preferred name and pronouns are different from your legal name and gender, please enter them below. If not, you can leave this blank.
                </p>

                <div class="grid <?php if (COLLECT_GENDER) { ?>lg:grid-cols-2 <?php } ?>gap-4">
                    <div class="grid">
                        <label for="preferred_name">Preferred Name</label>
                        <input type="text" name="preferred_name" id="preferred_name" maxlength="63">
                    </div>
                    <?php if (COLLECT_GENDER) { ?>
                    <div class="grid">
                        <label for="pronouns">Preferred Pronouns</label>
                        <select name="pronouns" id="pronouns">
                            <option value="Not set" selected>None</option>
                            <option value="He/Him">He/Him</option>
                            <option value="She/Her">She/Her</option>
                            <option value="They/Them">They/Them</option>
                        </select>
                    </div>
                    <?php } ?>
                </div>

                <br><hr><br>

                <?php } ?>

                <input type="submit" value="Login">
            </form>
        </main>

        <?php require_once __DIR__ . "/Include/Footer.php"; ?>
    </body>
</html>