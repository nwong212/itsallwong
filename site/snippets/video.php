<?php
// stop without videos
if(empty($video)) return;
// // set some defaults
if(!isset($width))    $width    = 400;
if(!isset($height))   $height   = 300;
if(!isset($preload))  $preload  = true;
if(!isset($controls)) $controls = true;
// build the html tags for the video element
$preload  = ($preload)  ? ' preload="preload"'   : '';
$controls = ($controls) ? ' controls="controls"' : '';
?>
<div class="video-container v16x9 ">
    <video width="<?php echo $width ?>" height="<?php echo $height ?>"<?php echo $preload . $controls ?> autoplay muted loop>
      <source src="<?php echo $video->url() ?>" type="<?php echo $video->mime() ?>" />
      <?php if(isset($thumb)): ?>
      <img src="<?php echo $thumb->url() ?>" alt="<?php echo $thumb->title() ?>" />
      <?php endif ?>
    </video>
</div>
