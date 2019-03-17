    <div class="project-container">
      <section class="gallery">
       <?php foreach($section->images()->sortBy('sort', 'asc') as $image): ?>
        <figure class="project">
            <?php

              $caption = $image->caption();
              $title   = $image->title();

            ?>

            <img src="<?php echo $image->url() ?>" title="<?php echo $title ?>" />

            <?php if(!$title->empty() || !$caption->empty()):?>
                <div class="caption">
                    <?php

                      if(!$title->empty()):
                        echo "<h4>$title</h4>";
                      endif;
                      //caption stuff- title above, actual caption below
                      if(!$caption->empty()):
                          echo "<p>$caption</p>";
                      endif;
                      ?>
                </div>
            <?php endif; ?>
        </figure>

        <?php endforeach ?>
      </section>
      <section class="project-content content already-visible">
        <article class="text">
          <?php echo kirbytext($section->text()->widont()) ?>
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
    </div>
