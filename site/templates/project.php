<?php snippet('header'); ?>
<div class="main-wrapper">

    <div class="project-content">
      <div class="project-content-top">
        <div class="project-text">
          <h1><?= $page->title() ?></h1>
          <p >
            <?= $page->text() ?>
          </p>
          <div class="project-details">
            <span class="label">URL</span><a href="<?= $page->link() ?>"><?= $page->link() ?></a><br />  
            <span class="label">Using</span><?= $page->tech() ?><br />
            <span class="label">Date</span><?= $page->year() ?><br/>    
            <?php if($page->with() != ''): ?>
              <span class="line-list"><span class="label">With</span><?= $page->with() ?></span>
            <?php endif ?>
          </div>

        </div>
        <div class="project-image">
          <img
                alt="<?= $page->image()->alt() ?>"
                src="<?= $page->image()->resize(400)->url() ?>"
                srcset="<?= $page->image()->srcset([300, 600, 900, 1200, 1800]) ?>"
                width="<?= $page->image()->resize(1800)->width() ?>"
                height="<?= $page->image()->resize(1800)->height() ?>"
            >     
        </div>
      </div>  
      <div class="project-images">
        <svg class="prev svg-icon"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="arcs"><path d="M19 12H6M12 5l-7 7 7 7"/></svg>        
        <div class="slider">
          <?php foreach($page->images()->offset(1) as $image): ?>
            <figure>
            <img
                alt="<?= $image->alt() ?>"
                src="<?= $image->resize(400)->url() ?>"
                srcset="<?= $image->srcset([300, 600, 900, 1200, 1800]) ?>"
                width="<?= $image->resize(1800)->width() ?>"
                height="<?= $image->resize(1800)->height() ?>"
            >   
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