<?php snippet('header'); ?>
<div class="main-wrapper">
  <main class="main-content">
    <div class="project-content">
      <div class="project-content-top">
        <div class="project-text">
          <h1><?= $page->title() ?></h1>
          <p>
            <?= $page->text() ?>
          </p>
        </div>
        <div class="project-image">
          <?= $page->image()->crop(600,600) ?>  
        </div>
      </div>  
      <div class="project-images">
        <svg class="prev svg-icon"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M19 12H6M12 5l-7 7 7 7"/></svg>        
        <div class="slider">
          <?php foreach($page->images() as $image): ?>
            <figure>
              <img src="<?= $image->url() ?>" alt="">
            </figure>
          <?php endforeach ?>
        </div>
        <svg class="next svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M5 12h13M12 5l7 7-7 7"/></svg>        
      </div>        
    </div>
  </main>
</div>
<?php snippet('footer'); ?>