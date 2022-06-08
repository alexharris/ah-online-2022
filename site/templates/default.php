<?php snippet('header'); ?>
<div class="main-wrapper">
  <main class="main-content">
        <h1><?= $page->title() ?></h1>
        <?= $page->text()->toBlocks() ?>
  </main>
</div>
<?php snippet('footer'); ?>