<?php if (!$kirby->user()) go('/') ?>

<?php //snippet('art_header');
?>
<main>

  <?php
    foreach ($page->objectsSelect()->toPages() as $object):
  ?>
  <div class="print">
    <span class="font_small">
      Updated <?php echo $page->modified('m/d/Y H:i'); ?>
    </span>
    <aside class="header">
      <h3>Nathan Wong</h3>

        <?php echo $kirby->user()->email().'<br  />';
              echo $kirby->user()->website()->kirbytext();
              echo $kirby->user()->phone()->kirbytext();
              echo $kirby->user()->address()->kirbytext();?>
    </aside>
    <h1>Object Data Sheet</h1>
    <h2><?php echo $object->inv() ?></h2>
    <figure>
      <?php echo $object->cover()->toFile(); ?>
    </figure>
    <p class="artist">Nathan Wong<br />
    American, b. 1997</p>
    <p class="title">
      <em><?php echo $object->title(); ?>, <?php echo $object->date()->toDate('Y'); ?></em></p>
    <p class="medium">
      <?php echo $object->materials()->kirbytext(); ?>
    </p>
    <p class="size">
      <?php echo $object->size()->kirbytext(); ?>
    </p>
    <p class="description">
      <?php echo $object->description()->kirbytext(); ?>
    </p>
  </div>
  <div class="break"></div>


<?php endforeach; ?>
<?php snippet('footer'); ?>
