<?php

namespace PeopleHive\Router;

use Starlight\HTTP\Router;
use Starlight\Session\Session;

class Authenticated extends Router {
    public function register() {
        $Auth = new Session();
        if ($Auth->Verify($_SESSION['uuid'].'$'.date('Y-m-d'))) {
            $this->GET('/dashboard','/Views/Dashboard.php');
        } else {
            $this->GET('/dashboard','/Views/403.php');
        }
    }
}