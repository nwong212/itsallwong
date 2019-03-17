  <section class="project-content content module already-visible">
    <article class="text">
        <?php if($section->show()->bool()): ?>

        <?php else: ?>
            <h4><?php echo html($section->title())?></h4>
        <?php endif;

        if(!$section->text()->empty()):

            echo kirbytext($section->text());

        endif;?>
    </article>
      <!-- <aside class="meta">
        <ul>
          <li>
            <h4>Date</h4> <?php echo kirbytext($section->date('Y M')) ?>
          </li>
          <li>
            <h4>Media</h4> <?php echo kirbytext($section->media()) ?>
          </li>
        </ul>
      </aside> -->

  </section>
