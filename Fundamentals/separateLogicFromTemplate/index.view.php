<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>View Separation</title>
  <style>
      body {
          font-family: sans-serif;
          background-color: black;
          color: deepskyblue;
      }
  </style>
</head>
<body>
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

