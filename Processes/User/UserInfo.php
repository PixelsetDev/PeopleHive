<?php

namespace PeopleHive\Processes\User;

use AllowDynamicProperties;
use Starlight\Database\SQL;

class UserInfo {
    private SQL $sql;
    private IsAuthenticated $auth;

    public function __construct() {
        $this->sql = new SQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->auth = new IsAuthenticated();
    }

    public function getRole(): int|bool
    {
        if ($this->auth->Check()) {
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

    public function hasPermission($permission): bool
    {
        if ($this->auth->Check()) {
            $query = $this->sql->Query("SELECT `".$this->sql->Escape($permission)."` FROM `user_permissions` WHERE `uuid` = '" . $this->sql->Escape($_SESSION['uuid']) . "'");
            if ($query->num_rows != 0) {
                return $query->fetch_assoc()[$this->sql->Escape($permission)];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}