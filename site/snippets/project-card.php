<div class="project-card">
<figure>
    <a href="<?= $project->url() ?>">
        <?= $project->image()->resize(600) ?>
    </a>
</figure>
<div class="project-text">
    <h2><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h2>
    <div><?= $project->tech() ?>, <?= $project->year() ?></div>
</div>
</div>