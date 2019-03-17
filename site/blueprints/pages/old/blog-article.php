<?php if(!defined('KIRBY')) exit ?>

title: Blog Article
pages: true
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
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
  intro:
    label: Intro
    type:  textarea
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags
  mainColor:
    label: Main Color
    type:  text
  textColor:
    label: Text Color
    type:  text
