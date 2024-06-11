<?php

namespace PeopleHive\Processes\User;

use Starlight\Session\Session;

class IsAuthenticated {
    public function check(): bool
    {
        if (!isset($_SESSION['uuid']) || !isset($_SESSION['starlight_token'])) {
            return false;
        }

        $session = new Session();
        return $session->Verify($_SESSION['uuid'].'$'.date('Y-m-d'));
    }
}