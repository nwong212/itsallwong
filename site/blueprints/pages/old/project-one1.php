<?php if(!defined('KIRBY')) exit ?>

title: project-one1
pages: false
files:
  sortable: true
  fields:
    title:
      label: Title
      type: text
      required: false
    caption:
      label: Caption
      type: textarea
    alt:
      label: alt Text
      type: text
    linkto:
      label: hyperlink
      type: text
fields:
  title:
    label: Title
    type:  text
    required: false
  show:
      label: Title Visibility
      type: checkbox
      text: Hide the title.
  text:
    label: Text
    type:  textarea
