<?php

//usuarios
//password_hash faz a minha encriptação do texto e como segundo parametro e o tipo de encondificador nesse caso é default = bcrypt

return [
    [
        'usuario' => 'usuario1@gmail.com',
        'senha' => password_hash('senha001', PASSWORD_DEFAULT)
    ],

    [
        'usuario' => 'usuario2@gmail.com',
        'senha' => password_hash('senha002', PASSWORD_DEFAULT)
    ],

    [
        'usuario' => 'usuario3@gmail.com',
        'senha' => password_hash('senha003', PASSWORD_DEFAULT)
    ],
];