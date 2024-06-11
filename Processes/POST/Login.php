<?php

use Starlight\Database\SQL;
use Starlight\Session\Session;

$Session = new Session();
$SQL = new SQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$Session->Login('');