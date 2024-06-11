<?php

namespace PeopleHive\Router;

use Starlight\HTTP\Router;

class Main extends Router {
    public function register() {
        $this->GET('/','/Views/Homepage.php');

        $this->GET('/login','/Views/Login.php');
        $this->GET('/register','/Views/Register.php');

        $this->GET('/auth/login','/Processes/POST/Login.php');
        $this->GET('/auth/register','/Processes/POST/Register.php');
    }
}