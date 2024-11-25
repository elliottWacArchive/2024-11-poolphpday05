<?php

function get_authorized_users($permission, $users)
{
    foreach ($users as $user) {
        if (in_array($permission, $user['permissions'])) {
            echo $user['login'] . "\n";
        }
    }
}
// $users = [
//     [
//         "login" => "deslog_m",
//         "permissions" => ["launch_pangolinette", "troll_student"]
//     ],
//     [
//         "login" => "pellet_f",
//         "permissions" => ["launch_pangolinette", "troll_student"]
//     ],
//     [
//         "login" => "student_x",
//         "permissions" => ["offer_sweets_to_pangolin"]
//     ]
// ];

// get_authorized_users("launch_pangolinette", $users);
// echo "\n";
// get_authorized_users("offer_sweets_to_pangolin", $users);
