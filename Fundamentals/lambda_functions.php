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
    ]
];

$filterByAuthor = function ($books, $author): array {
    $filteredItems = [];

    foreach ($books as $book) {
        if ($book['author'] === $author) {
            $filteredItems[] = $book;
        }
    }

    return $filteredItems;
};

function filter($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
}

$filteredBooks = array_filter($books, function ($book) {
  return $book['author'] === 'Robbert Martin Jr';
});

?>

<ul>

    <?php foreach ($filteredBooks as $book) : ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
