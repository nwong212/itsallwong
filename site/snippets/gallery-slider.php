      <section class="gallery slider">
       <?php foreach($section->images()->sortBy('sort', 'asc') as $img): ?>
        <div class="gallery-item">
            <figure class="project">
                <?php

                  $caption = $img->caption();
                  $title   = $img->title();
                  snippet('images', array('img'=>$img, 'title' => $title, 'page' => $section));?>

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
        </div>

        <?php endforeach ?>
      </section>
