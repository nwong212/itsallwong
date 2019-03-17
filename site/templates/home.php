<?php snippet('art_header') ?>
<?php

$tagged = false;

// fetch the basic set of articles
$projects = $site->index()->visible();

// add the tag filter
if ($tag = param('tag')) {
    $projects = $projects->flip()->filterBy('tags', $tag, ',');
    $tagged=true;
}

// apply pagination
$projects = $projects->paginate(12);

// if ($page->isHomePage()) {
// 	$projects = $projects->paginate(6);
// }

if ($tagged == true):?>
    <section class="clear" id="projects">
        <aside class="sub-block">
    	    <h1 class="page-title">Works</h1>

            <h2 class="tagged-with"><em><?php echo $tag?></em></h2>
        </aside>

        <ul class="art projects gallery one1 grid">
            <div class="grid-sizer"></div>
            <div class="gutter-sizer"></div>
            <?php
              $n = 0;
              foreach ($projects as $project):
                  $n++
              ?>
                <li class="grid-item project item-<?php echo $n ?>">
                    <a class="exempt" href="<?php echo $project->url() ?>">
                        <figure>
                            <img src="<?php echo $project->images()->first()->resize(1024, null, 70)->url() ?>" />
                            <!-- <figcaption>
        					<?php // echo kirbytext($project->title())?>
        				</figcaption> -->
                        </figure>
                    </a>
                </li>
                <?php endforeach; ?>
        </ul>
        <div class="timeline">
            <?php if ($projects->pagination()->hasPrevPage()): ?>
            <div class="newer">
                <a data-type="page-transition-right" id="right" href="<?php echo $projects->pagination()->prevPageURL() ?>"><span class="icon-larrlong arrow"></span>&nbsp;Newer</a>
            </div>
            <?php endif ?>

            <?php if ($projects->pagination()->hasNextPage()): ?>
            <div class="older">
                <a data-type="page-transition-left" id="left" href="<?php echo $projects->pagination()->nextPageURL() ?>">Older&nbsp;<span class="icon-rarrlong arrow"></span></a>
            </div>
            <?php endif ?>
        </div>
    </section>
<?php else:?>
    <section class="content default">

        <?php echo kirbytext($page->text()->widont()) ?>

    </section>
<?php endif;?>


        <?php snippet('footer') ?>
