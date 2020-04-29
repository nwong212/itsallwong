<?php if (!$kirby->user()) go('login') ?>
<?php snippet('art_header') ?>

<table class="results">
	<thead>
		<tr>
			<th class="invNo">Date</th>
			<th class="description">Checklist</th>
		</tr>
	</thead>
  <tbody>
  <?php

		$checklists = $page->children();

		if($checklists->isNotEmpty()):

			foreach ($checklists as $checklist): ?>

			<tr>
				<td>
					<?= $checklist->exhibitionDate()->toDate('M Y') ?>
				</td>
				<td>
					<h1><a href="<?= $checklist->url() ?>"><?= $checklist->title() ?></a></h1>
					<a href="<?= $checklist->panelUrl();?>" class="panel-button">Edit</a>
					<a href="<?= $checklist->url();?>" class="panel-button">View</a>
				</td>
			</tr>
	  <?php endforeach; endif; ?>
	  </tbody>
</table>

<?php snippet('footer') ?>
