<?php if (!$kirby->user()) go('login') ?>
<?php snippet('art_header') ?>

<form class="queries">
  <input type="search" name="q" value="<?= html($query) ?>" placeholder="Search...">
</form>

<table class="results">
	<thead>
		<tr>
			<th class="invNo">No.</th>
			<th class="figure">Image</th>
			<th class="description">Description</th>
		</tr>
	</thead>
  <tbody>
  <?php if($results->isNotEmpty()):
		foreach ($results as $result): ?>
		<tr>
			<td>
				<?= $result->inv() ?>
			</td>
			<td>
				<?= $result->cover()->toFile() ?>
			</td>
			<td>
				<h1><a href="<?= $result->url() ?>"><?= $result->title() ?></a></h1>
				<div class="metadata">
					<p>
						<?= $result->size()?>
					</p>
					<p>
						<?= $result->materials()?>
					</p>
					<p>
						<?= $result->description()->kirbytext()?>
					</p>
					<p>
						<?php
							$location = $result->current_past()->toStructure();
						 	if($location->isNotEmpty()): ?>
							<h2>Location</h2>
							<strong><?= $location->first()->owner(); ?></strong><br />
							<?= $location->first()->location() ?>
						<?php endif; ?>
					</p>
					<p>
						<?= $result->installation()->kirbytext()?>
					</p>
				</div>
				<a href="<?= $result->panelUrl();?>" class="panel-button">Edit</a>
				<a href="<?= $result->url();?>" class="panel-button">View</a>
			</td>
		</tr>
  <?php endforeach; endif; ?>
  </tbody>
</table>

<?php snippet('footer') ?>
