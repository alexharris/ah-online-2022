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

  <?= css(['assets/css/main.css', '@auto']);?>
</head>
<body class="<?php if (isset($headerClass)) { echo $headerClass; } ?>">
<header>
  <a href="<?= $site->url() ?>">
  Alex Harris <br />
  Web Development
  </a>
  <div class="menu">
    <a href="#">Contact</a>
  </div>
</header>