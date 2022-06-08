<div class="project-card">
    <figure>
        <a href="<?= $project->url() ?>">
            <?= $project->image()->resize(600) ?>
        </a>
    </figure>
    <div class="project-text">
        <h2><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h2>
        <div class="plex">
        <a href="<?= $project->link() ?>"><?= $project->link() ?></a><br /><br /><?= $project->tech() ?><br /><br /><?= $project->year() ?>
        </div>
    </div>
</div>