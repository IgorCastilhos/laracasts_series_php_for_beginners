<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Demo</title>
  <style>
      body {
          display: grid;
          place-items: center;
          height: 100vh;
          margin: 0;
          font-family: sans-serif;
          background-color: black;
          color: red;
      }
  </style>
</head>
<body>

<h1>Livros recomendados</h1>

<?php
$books = [
    "Game of Thrones",
    "12 Rules for Life",
    "The Art of War",
    "The Art of War 2"
];
?>

<ul>
    <?php foreach ($books as $book) : ?>
      <li><?= $book ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
