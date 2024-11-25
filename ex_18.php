<?php

function check_user_acl($user, $permission)
{
    $perms = $user["permissions"];
    if (!in_array($permission, $perms)) {
        return false;
    }
    return true;
}
