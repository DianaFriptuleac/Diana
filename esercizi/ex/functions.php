<?php
function createKey(string $email, string $password): string
{
    return $email . " " . $password;
}


function searchUser(string $loginkey, array $users): ?array
{
    foreach ($users as $user) {
        $key = createKey($user["email"], $user["password"]);
        if ($loginkey === $key) {
            return $user;
        }
    }
    return null;
}


function showRole(string $typeOfUser): void
{
    switch ($typeOfUser) {
        case "admin":
            echo "Admin login";
            break;
        case "user":
            echo "User login";
            break;
        default:
            echo "No role found.";
    }
}
