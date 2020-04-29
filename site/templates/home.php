<?php snippet('art_header') ?>
<?php

// fetch the basic set of articles
$projects = $site->index()->listed()->filterBy('template', 'art_project'); ?>

		<?php
		  $n = 0;
		  foreach ($projects as $project):
			  $n++;

				$coverimage = $project->cover()->toFile();
		  ?>
			<a class="exempt" href="<?php echo $project->url() ?>">
				<figure>
					<img src="<?php echo $coverimage->resize(1024, null, 80)->url(); ?>" alt="<?php echo $project->title(); ?>">
					<!-- <figcaption>
					<?php // echo kirbytext($project->title())?>
				</figcaption> -->
				</figure>
			</a>
			<?php endforeach; ?>


        <?php snippet('footer') ?>
