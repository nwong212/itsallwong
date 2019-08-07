<?php

// main menu items
$items = $pages->visible();

// only show the menu if items are available
if($items->count()):

?>
  <nav class="menu-box navigation">
  	<ul class="links">
  		<?php foreach($items as $item): ?><!--
  			--><li class="link"><a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li><!--.-->
  		<?php endforeach ?>
  	</ul>
  </nav>
</section>
<?php endif; ?>
