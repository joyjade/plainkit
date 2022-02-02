<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="icon" href="/assets/icons/fav.svg" />
  <?= css(['assets/css/global.css', '@auto', 'assets/css/mobile.css']) ?>

</head>
<body>
  <nav>
    <ul>
      <?php foreach ($site->children()->listed() as $item): ?>
        <li>
          <a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </nav>
  