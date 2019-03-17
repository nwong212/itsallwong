<?php

require __DIR__ . '/kirby/bootstrap.php';

$kirby = new Kirby;

// authenticate as almighty
$kirby->impersonate('kirby');

foreach (page('2018')->children()->images() as $image) {

  try {
      $image->update([
        'template' => 'object'
      ]);
      echo 'The meta info has been updated';
  } catch (Exception $e) {
      echo $e->getMessage();
  }

}
