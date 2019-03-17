<?php if(!defined('KIRBY')) exit ?>

title: Art Projects
pages:
  template: art_project
  sort: date desc
  num:
    mode: date
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
