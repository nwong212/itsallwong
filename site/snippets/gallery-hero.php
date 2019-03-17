      <section class="gallery one1 hero">
       <?php foreach($section->images()->sortBy('sort', 'asc') as $img): ?>
            <figure class="project ">
                <?php

                  $caption = $img->caption();
                  $title   = $img->title(); ?>

                <?php if($img->extension() == 'gif') { ?>
                  <img src="<?=$img->url() ?>" />
                <?php } else { ?>
                  <img src="<?= $img->resize(null, null, 80)->url() ?>" srcset="
                  <?= $img->resize(768, null, 90)->url() ?> 768w,
                  <?= $img->resize(1024, null, 90)->url() ?> 1024w,
                  <?= $img->resize(2048, null, 90)->url() ?> 2048w,
                  <?= $img->resize(3000, null, 90)->url() ?> 3000w,
                  <?= $img->resize(4096, null, 90)->url() ?> 4096w"
                  sizes="100vw" title="<?php echo $title ?>" alt="Alt" class="image" />
                <?php } ?>

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
