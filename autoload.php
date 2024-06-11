<?php

require_once __DIR__ . '/Settings.php';

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/starlight/Authentication/Session.php';
require_once __DIR__ . '/starlight/Database/SQL.php';
require_once __DIR__ . '/starlight/HTTP/HTTPS.php';
require_once __DIR__ . '/starlight/HTTP/Response.php';
require_once __DIR__ . '/starlight/HTTP/Router.php';
require_once __DIR__ . '/starlight/Security/CSRF.php';
require_once __DIR__ . '/starlight/Security/XSS.php';

require_once __DIR__ . '/Router/Main.php';
require_once __DIR__ . '/Router/Authenticated.php';
require_once __DIR__ . '/Router/router.php';

require_once __DIR__ . '/Views/404.php';