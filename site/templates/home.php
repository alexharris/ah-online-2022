<?php snippet('header'); ?>
<div class="main-wrapper">


    <div class="intro">
        <div><?= $page->text() ?></div>
    </div>
    <?php
    
    if ($page = page('projects')) {
      print '<div class="project-list">';
        $projects = $page->children();
        foreach ($projects as $project) {
            snippet('project-card', ['project' => $project]);
        }
      print '</div>';
    }    
    ?>

</div>
<?php snippet('footer'); ?>