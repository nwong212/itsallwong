<?php snippet('art_header') ?>
<?php

// fetch the basic set of articles
$projects = $site->index()->listed()->filterBy('template', 'art_project'); ?>

		<?php
		  $n = 0;
		  foreach ($projects as $project):
			  $n++;
		  ?>
			<a class="exempt" href="<?php echo $project->url() ?>">
				<figure>
					<?php echo $project->cover()->toFile(); ?>
					<!-- <figcaption>
					<?php // echo kirbytext($project->title())?>
				</figcaption> -->
				</figure>
			</a>
			<?php endforeach; ?>


        <?php snippet('footer') ?>
