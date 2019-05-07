
<?php snippet('art_header');
?>
    <!-- <figure class="work-item cover">
    </figure> -->
    <!-- <section class="header">
      <div class="clear backtrack come-in-top">
            <span class="back">
            <a href="<?= url('work') ?>">&lt; Back to Projects</a>
            </span>
      </div>
    </section> -->
    <section class="everythingelse clear">
        <aside class="sub-block">
            <p class="year">
                <?php echo $page->date()->toDate('Y') ?>
            </p>
           	<h1 class="page-title"><?php echo $page->title();?></h1>
            <div class="tagged-with">
                <p class="stats">
                    <?php echo $page->size(); ?>
                </p>
                <p class="stats">
                    <?php echo $page->materials(); ?>
                </p>
            </div>
        </aside>
        <div class="project-container">
            <?php
                if ($page->selected()->toFiles()->count() == 1):
                    snippet('gallery-hero',
                    array('section'=>$page));
                else:
                    snippet('gallery-one1',
                    array('section'=>$page));
                endif;
            ?>
            <?php
            if(!$page->text()->empty()): ?>
                <section class="project-content content module already-visible">
                  <article class="text">
                      <?php
                          echo kirbytext($page->text());
                          ?>
                  </article>
                </section>
            <?php endif;?>
        </div>
    </section>

    <section class="timeline">
        <?php snippet('work-paginate');?>
    </section>
<?php snippet('footer') ?>
