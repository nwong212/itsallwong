<?php if(!defined('KIRBY')) exit ?>

title: Art Project
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
  date:
    label: Date
    type:  date
    width: 1/2
  size:
    label: Size
    type:  text
    width: 1/2
  materials:
    label: Materials
    type:  textarea
