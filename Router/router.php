<?php

use PeopleHive\Router\Main;
use PeopleHive\Router\Authenticated;

$Main = new Main();
$Main->register();

$Authenticated = new Authenticated();
$Authenticated->register();
