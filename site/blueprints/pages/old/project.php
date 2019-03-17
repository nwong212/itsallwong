<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: true
    build:
        - title: [default]
          uid: images
          template: project-1one
          num: 1

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
    required: false
  date:
    label: Date
    type:  date
  intro:
    label: Intro
    type:  textarea
  scope:
    label: Scope
    type:  text
  Media:
    label: Media
    type:  text
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
