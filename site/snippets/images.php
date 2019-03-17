<?php
$link = $img ->linkto();

if($img->extension() == 'gif') {

    if($link->isNotEmpty()) {
    ?>
        <a href="<?php echo $link ?>">
            <img src="<?=$img->url() ?>" />
        </a>
    <?php } else{?>
        <img src="<?=$img->url() ?>" />
    <?php }?>
<?php } else {

    if($link->isNotEmpty()){?>
        <a href="<?php echo $link ?>" >
            <img src="<?= $img->resize(null, null, 80)->url() ?>" srcset="
            <?= $img->resize(768, null, 80)->url() ?> 768w,
            <?= $img->resize(1024, null, 80)->url() ?> 1024w,
            <?= $img->resize(2048, null, 80)->url() ?> 2048w"
            sizes="
            100vw,
            (max-width:30em) 100vw,
            (max-width:50em) 50vw" title="<?php echo $title ?>" alt="" class="image" />
        </a>

    <?php } elseif($page->intendedTemplate() == 'project-slider') {?>

        <img src="<?= $img->resize(null, null, 90)->url() ?>" srcset="
        <?= $img->resize(null, 1500, 100)->url() ?> 768w"
        sizes="
        100vw" title="<?php echo $title ?>" alt="" class="image" />

    <?php } else { ?>
        <img src="<?= $img->resize(null, null, 90)->url() ?>" srcset="
        <?= $img->resize(768, null, 90)->url() ?> 768w,
        <?= $img->resize(1024, null, 90)->url() ?> 1024w,
        <?= $img->resize(2048, null, 90)->url() ?> 2048w"
        sizes="
        100vw,
        (max-width:30em) 100vw,
        (max-width:50em) 50vw" title="<?php echo $title ?>" alt="Alt" class="image" />
    <?php }?>
<?php } ?>
