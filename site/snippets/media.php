<?php foreach($section->files()->sortBy('sort', 'asc') as $file): ?>
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
