<?php

 $books = [
    [
        'name' => 'Game of Thrones',
        'author' => 'Robbert Martin Jr',
        'purchaseUrl' => 'https://www.google.com.br',
        'releaseYear' => 2012
    ],
    [
        'name' => 'Art of War',
        'author' => 'Jackie Chan',
        'purchaseUrl' => 'https://www.google.com.br',
        'releaseYear' => 2018
    ],
    [
        'name' => 'Biography',
        'author' => 'Igor Castilhos',
        'purchaseUrl' => 'https://www.google.com.br',
        'releaseYear' => 2024
    ]
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Robbert Martin Jr';
});

require "index.view.php";