<?php

namespace PeopleHive\Router;

use Starlight\HTTP\Router;

class Main extends Router {
    public function register(): void
    {
        $this->GET('/','/Views/Homepage.php');

        $this->GET('/login','/Views/Login.php');
        $this->GET('/register','/Views/Register.php');

        $this->POST('/auth/login','/Processes/POST/Login.php');
        $this->POST('/auth/register','/Processes/POST/Register.php');
    }
}