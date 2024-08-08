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
          display: grid;
          place-items: center;
          height: 100vh;
          margin: 0;
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

function filterByAuthor($books, $author)
{
    $filteredBooks = [];

    foreach ($books as $book) {
        if ($book['author'] === $author) {
            $filteredBooks[] = $book;
        }
    }

    return $filteredBooks;
}

?>

<ul>
    <?php foreach (filterByReleaseDate($books, 'Jackie Chan') as $book) : ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) - By <?= $book['author']?>
        </a>
      </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
