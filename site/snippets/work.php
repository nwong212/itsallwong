<section class="clear" id="projects">
<?php

	// fetch the basic set of articles
	$projects = $page->children()->visible()->flip();

	// add the tag filter
	if($tag = param('tag')) {
	  $projects = $projects->filterBy('tags', $tag, ',');
	}

	// apply pagination
	$projects = $projects->paginate(12);

	// if ($page->isHomePage()) {
	// 	$projects = $projects->paginate(6);
	// }
?>

 <ul class="projects">
  <?php
  	$n = 0;
  	foreach ($projects as $project):
  		$n++
  	?>
  <li class="project item-<?php echo $n ?>">
	  <div class="more tail">
		  <p>
			  <?= echo html($project->title()) ?>
		  </p>
	  </div>
  	<a class="exempt" href="<?php echo $project->url() ?>">
		<div class="work-item-wrap">
			<figure class="work-item <?php echo html($project->uid());?>" style="background-image:url('<?php echo $project->images()->first()->url() ?>')">
		    </figure>
	    </div>
	</a>
  </li>
  <?php endforeach; ?>
<?php if($page->isHomePage()): ?>
 	<?php if($projects->pagination()->hasNextPage()): ?>
 		<li class="project clear older">
 			<a href="<?php echo page('i-made')->url() ?>">
				It's not over<span class="icon-rarrlong arrow"></span>
 			</a>
 		</li>
	<?php endif; ?>
</ul>
<?php else: ?>
</ul>
			<div class="timeline">
				<?php if($projects->pagination()->hasPrevPage()): ?>
				<div class="newer">
				  <a data-type="page-transition-right" id="right" href="<?php echo $projects->pagination()->prevPageURL() ?>"><span class="icon-larrlong arrow"></span>&nbsp;Newer</a>
				</div>
				<?php endif ?>

				 <?php if($projects->pagination()->hasNextPage()): ?>
				<div class="older">
				  <a data-type="page-transition-left" id="left" href="<?php echo $projects->pagination()->nextPageURL() ?>">Older&nbsp;<span class="icon-rarrlong arrow"></span></a>
				</div>
				<?php endif ?>
			</div>
<?php endif;?>
</section>
