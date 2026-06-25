<?php
// tabella 
// Abbiamo il metodo GET che resttituisce l'elenco degli utenti
// secelct * from utenti    ->SQL


function getUtenti(): array
{
    return [
        [
            "email" => "admin@gmail.com",
            "password" => "Password123",
            "ruolo" => "admin"
        ],
        [
            "email" => "docente@gmail.com",
            "password" => "Docente123",
            "ruolo" => "docente"
        ],
        [
            "email" => "studente@gmail.com",
            "password" => "Studente123",
            "ruolo" => "studente"
        ],
    ];
};
