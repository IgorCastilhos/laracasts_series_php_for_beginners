<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays Associativos</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: black;
            color: deepskyblue;
        }
    </style>
</head>
<body>

<?php
$movies = [
    [
        'name' => 'John Wick',
        'author' => 'Chad Stahelski',
        'purchaseUrl' => 'https://www.google.com.br',
        'releaseYear' => 2014
    ],
    [
        'name' => 'John Wick 2',
        'author' => 'Chad Stahelski',
        'purchaseUrl' => 'https://www.google.com.br',
        'releaseYear' => 2017
    ],
    [
        'name' => 'John Wick 3',
        'author' => 'Chad Stahelski',
        'purchaseUrl' => 'https://www.google.com.br',
        'releaseYear' => 2019
    ],
    [
        'name' => 'John Wick 4',
        'author' => 'Chad Stahelski',
        'purchaseUrl' => 'https://www.google.com.br',
        'releaseYear' => 2023
    ]
];

function filterByReleaseDate($movies, $releaseDate)
{
    $filteredMovies = [];

    foreach ($movies as $movie) {
        if ($movie['releaseYear'] > 2000) {
            $filteredMovies[] = $movie;
        }
    }
    return $filteredMovies;
}
?>

<ul>
    <?php foreach (filterByReleaseDate($movies, '2018') as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) - By <?= $book['author']?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
