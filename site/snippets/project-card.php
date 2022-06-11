<div class="project-card">
    <figure>
        <a href="<?= $project->url() ?>" class="img-wrapper">
    <img
        alt="<?= $project->image()->alt() ?>"
        src="<?= $project->image()->resize(400)->url() ?>"
        srcset="<?= $project->image()->srcset([300, 600, 900, 1200, 1800]) ?>"
        width="<?= $project->image()->resize(1800)->width() ?>"
        height="<?= $project->image()->resize(1800)->height() ?>"
    >        </a>
    </figure>
    <div class="project-text">
        
        <div>
            <h2><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h2>
            <div class="project-text-details plex"><?= $project->tech() ?>, <?= $project->year() ?></div>
        </div>
        <a class="plex" href="<?= $project->link() ?>"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg></a>
    </div>
</div>