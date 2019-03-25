  <?php if($page->hasNext() && $next = $page->nextVisible()): ?>
  <span class="newer">
    <a data-type="page-transition-right" id="right" href="<?php echo $next->url() ?>">
      <span class="icon-larrlong arrow"></span>
    </a>
  </span>
  <?php endif ?>

  <?php if($page->hasPrev() && $prev = $page->prevVisible()): ?>
  <span class="older">
    <a data-type="page-transition-left" id="left" href="<?php echo $prev->url() ?>">
      <span class="icon-rarrlong arrow"></span>
    </a>
  </span>
  <?php endif ?>
