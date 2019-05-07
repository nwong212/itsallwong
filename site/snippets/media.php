<?php foreach($section->selected()->toFiles()->sortBy('sort', 'asc') as $file): ?>
 <div class="grid-item">
     <figure class="project">
         <?php

           $caption = $file->caption();
           $title   = $file->title();

           if(in_array($file->extension(), array('mp4', 'webm', 'ogv'))) {
              snippet('video', array(
                  'video' => $file));
            }
            if(in_array($file->extension(), array('gif', 'jpg', 'png'))) {
               snippet('images', array(
                   'img' => $file,
                   'title' => $title
               ));
            }?>

         <?php if($caption->isNotEmpty()):?>
             <figcaption>
               <?php
                  echo $caption;
               ?>
             </figcaption>
         <?php endif; ?>
     </figure>
 </div>

 <?php endforeach ?>
