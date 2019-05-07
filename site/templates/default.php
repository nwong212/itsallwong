<?php snippet('art_header') ?>

<section class="content default">

    <?php if($page->hasImages()):
        $profile = $page->images()->first();?>
        <article class="images section-1-2 leftfloat">
            <figure class="profile">
                <img class="portrait" src="<?php echo $profile->url() ?>" />
            </figure>
        </article>
    <?php endif; ?>

    <article class="text section-1-2 <?php if($page->hasImages()): ?>leftfloat <?php else: ?>centerfloat<?php endif; ?>">
        <!-- <h1 class="title"><?php echo html($page->title()) ?></h1> -->
        <?php echo $page->text()->kirbytext() ?>
    </article>

</section>

<?php snippet('footer') ?>
