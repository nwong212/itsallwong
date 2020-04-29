<?php if (!$kirby->user()) go('login') ?>

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
        <h1>Checklist for <em><?php echo $page->title()?></em></h1>
        <p>
          Updated <?php echo $page->modified('m/d/Y H:i'); ?>
        </p>
        <table border="0">
          <thead>
            <tr>
              <?php if ($page->objectsInv()->bool() == true): ?>
                <th scope="col" style="width:100px">#</th>
              <?php endif; if ($page->objectsImage()->bool() == true): ?>
                <th scope="col" style="width:220px">Image</th>
              <?php endif; ?>
                <th scope="col" style="min-width:400px">Title</th>
              <?php if ($page->objectsPrice()->bool() == true): ?>
                <th scope="col">Price</th>
              <?php endif; if ($page->objectsMaterial()->bool() == true): ?>
                <th scope="col">Materials</th>
              <?php if ($page->objectsSize()->bool() == true):?>
                <th scope="col">Size</th>
              <?php endif; ?>
              <?php endif; if ($page->objectsInstall()->bool() == true): ?>
                <th scope="col">Installation/Care</th>
              <?php endif; if ($page->objectsLocation()->bool() == true): ?>
                <th scope="col">Location</th>
              <?php endif;?>
            </tr>
          </thead>
          <?php
          foreach ($page->objectsSelect()->toPages() as $object):
          ?>
            <tr>
              <?php if ($page->objectsInv()->bool() == true):?>
                <td>
                  <?php echo $object->inv(); ?>
                </td>
              <?php endif; ?>
              <?php if ($page->objectsImage()->bool() == true):?>
                <td>
                  <?php echo $object->cover()->toFile(); ?>
                </td>
              <?php endif; ?>
                <td>
                  <?php echo $object->title(); ?>
                </td>
              <?php if ($page->objectsPrice()->bool() == true):?>
                <td>
                  $<?php echo $object->listed_price(); ?>
                </td>
              <?php endif; ?>
              <?php if ($page->objectsMaterial()->bool() == true):?>
                <td>
                  <?php echo $object->materials(); ?>
                </td>
              <?php endif; ?>
              <?php if ($page->objectsSize()->bool() == true):?>
                <td>
                  <?php echo $object->size(); ?>
                </td>
              <?php endif; ?>
              <?php if ($page->objectsInstall()->bool() == true):?>
                <td>
                  <?php echo $object->install_care(); ?>
                </td>
              <?php endif; ?>
              <?php
              if ($page->objectsLocation()->bool() == true):
                if($object->current_past()->toStructure()->isNotEmpty()):
                $location = $object->current_past()->toStructure()->nth(0);?>
                <td>
                  <?php echo $location->location(); ?>
                </td>
              <?php endif; endif; ?>
            </tr>
          <?php endforeach; ?>
          <!--objectsInv
              objectsPrice
              objectsMaterial
              objectsInstall
              objectsLocation-->





        </table>
    </section>
<?php snippet('footer'); ?>
