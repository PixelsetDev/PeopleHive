<?php

namespace PeopleHive\Router;

use PeopleHive\Processes\User\IsAuthenticated;
use Starlight\HTTP\Router;

class Authenticated extends Router {
    public function register() {
        $isAuth = new IsAuthenticated();
        if ($isAuth->check()) {
            $this->GET('/dashboard','/Views/Dashboard.php');
        } else {
            $this->GET('/dashboard','/Views/403.php');
        }
    }
}