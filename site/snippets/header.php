<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <!-- <link rel="icon" href="/assets/favicon.png"> -->

  <?php

    $title = $page->title();

  ?>
  <?php if ($title == "Home"): ?>
    <title><?= $site->title() ?></title>
  <?php else: ?>
    <title><?= $title ?> | <?= $site->title() ?></title>
  <?php endif; ?>

  <?= css(['/assets/css/main.css', '@auto']);?>
</head>
<body class="<?php if (isset($headerClass)) { echo $headerClass; } ?>">
<header>
  <a href="<?= $site->url() ?>">
  Alex Harris <br />
  Web Development
  </a>
  <?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>
<nav class="menu">

    <?php foreach($items as $item): ?>
<a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    <?php endforeach ?>
      <span id="theme-toggle">
      <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none"  stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>      </span>
</nav>
<?php endif ?>
</header>