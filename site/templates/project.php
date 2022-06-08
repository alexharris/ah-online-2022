<?php snippet('header'); ?>
<div class="main-wrapper">

    <div class="project-content">
      <div class="project-content-top">
        <div class="project-text">
          <h1><?= $page->title() ?></h1>
          <p >
            <?= $page->text() ?>
          </p>
          <p class="plex">
          <a href="<?= $page->link() ?>"><?= $page->link() ?></a><br />  
          <?= $page->tech() ?><br />
          <?= $page->year() ?></p>

        </div>
        <div class="project-image">
          <?= $page->image()->crop(600,400) ?>  
        </div>
      </div>  
      <div class="project-images">
        <svg class="prev svg-icon"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M19 12H6M12 5l-7 7 7 7"/></svg>        
        <div class="slider">
          <?php foreach($page->images()->offset(1) as $image): ?>
            <figure>
              <?= $image ?>
            </figure>
          <?php endforeach ?>
        </div>
        <svg class="next svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M5 12h13M12 5l7 7-7 7"/></svg>        
        <div class="mobile-slider-nav">
          <svg class="prev svg-icon"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M19 12H6M12 5l-7 7 7 7"/></svg>    
          <svg class="next svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M5 12h13M12 5l7 7-7 7"/></svg>                      
        </div>
      </div> 
      <div class="project-pagination">

        <?php if($prev = $page->prev()): ?>
          <div class="paginate-link paginate-prev plex">
            <div>
              <span class="small-caps">Previous Project</span>
              <a class="" href="<?= $prev->url() ?>" class="prev-project">
              <svg class="svg-icon"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M19 12H6M12 5l-7 7 7 7"/></svg>        
              <?= $prev->title() ?>
              </a>
            </div>
          </div>
        <?php endif ?>        

        <?php if($next = $page->next()): ?>
          <div class="paginate-link paginate-next plex">
            <div>  
              <span class="small-caps ">Next Project</span>
              <a class="" href="<?= $next->url() ?>" class="next-project">
                <?= $next->title() ?>
                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M5 12h13M12 5l7 7-7 7"/></svg>        

              </a>
            </div>
          </div>
        <?php endif ?>

      
      </div>
    </div>

</div>

<?php snippet('footer'); ?>