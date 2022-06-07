<?php snippet('header'); ?>
<div class="main-wrapper">
  <main class="main-content">

    <div class="intro">
        <div><?= $page->text() ?></div>
    </div>
    <?php
    
    if ($page = page('projects')) {
        $projects = $page->children();
        foreach ($projects as $project) {
            snippet('project-card', ['project' => $project]);
        }
    }    
    ?>
  </main>
</div>
<?php snippet('footer'); ?>