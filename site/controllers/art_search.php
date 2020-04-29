<?php

return function ($site) {

  $query   = get('q');

  $results = collection('objects')->search($query);

  return [
    'query'   => $query,
    'results' => $results,
  ];

};
