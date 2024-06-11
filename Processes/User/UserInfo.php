<?php

namespace PeopleHive\Processes\User;

use Starlight\Database\SQL;

class UserInfo {
    private SQL $sql;

    public function __construct() {
        $this->sql = new SQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function getRole(): int|bool
    {
        $Auth = new IsAuthenticated();

        if ($Auth->Check()) {
            $query = $this->sql->Query("SELECT `role` FROM `users` WHERE `uuid` = '" . $this->sql->Escape($_SESSION['uuid']) . "'");
            if ($query->num_rows != 0) {
                return $query->fetch_assoc()['role'];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}