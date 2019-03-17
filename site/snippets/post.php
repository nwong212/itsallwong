    <section class="header">
      <div class="main-info come-in-top">
        <h1 class="title"><a href="<?php echo $article->url()?>"><?php echo html($article->title()) ?></a></h1>
        <p class="excerpt">
            <?php
                if(!$article->intro()->empty()): echo widont($article->intro());
                else: echo excerpt($article->text(), 300);
                endif;?>
        </p>
        <aside class="scope come-in-top">
          <h5><?php echo kirbytext($article->date('M j, Y')) ?></h5>
        </aside>
        <?php
        if($article->hasImages()):

            $images = $article->images()->shuffle()->limit(3);

            foreach($images as $image) { ?>

                <figure class="preview-image">
                    <img src="<?php echo $image->url(); ?>" />
                </figure>

        <?php }
        endif; ?>
      </div>
    </section>
