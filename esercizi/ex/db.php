<?php
function getUsers(): array
{
    return [
        [
            "email" => "admin@gmail.com",
            "password" => "Admin1234",
            "ruolo" => "admin"
        ],
        [
            "email" => "user@gmail.com",
            "password" => "User1234",
            "ruolo" => "user"
        ]
    ];
}
