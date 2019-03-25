<!DOCTYPE html>
<html lang="en">
<head>
<!--
    itsallwong
-->
  <title><?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
<!--   <link rel="shortcut icon" href="<?= url('assets/images/favicon.ico') ?>" type="image/x-icon">
  <link rel="icon" href="<?= url('assets/images/favicon.ico') ?>" type="image/x-icon"> -->
  <link rel="shortcut icon" href="<?= url('assets/images/pinkcircle.png?ver=1') ?>" type="image/x-icon">
  <link rel="icon" href="<?= url('assets/images/pinkcircle.png?ver=1') ?>" type="image/x-icon">
  <link rel="alternate" href="http://itsallwong.com" hreflang="en" />
  <?php if($page->intendedTemplate() == 'project'): ?>
      <meta name="description" content="<?php echo html($page->intro()->excerpt(30, 'words'))?>" />
  <?php else: ?>
      <meta name="description" content="<?php echo html($site->description())?>" />
  <?php endif;?>
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,">

    <?php   echo css('assets/styles/styles.min.css?ver=2');
            echo css('@auto');
            // echo css('assets/ATC-HARRIS-KIT/atcharris.css') ?>
    <?php
        echo js('assets/js/modernizr.js', true)
    ?>
  <noscript>
    <style>
      header
      {
        position:relative;
        height:auto;
      }
      a.nav-toggle
      {
        display:none;
        visibility: hidden;
      }
      nav li {
        float:left;
      }
      nav li.link a {
        color:#000;
      }
      nav {
        background:transparent;
        height:auto;
        position:relative;
        height:auto;
        min-height:0;
        min-width:0;
        left:auto;
        right:auto;
        top:auto;
        bottom:auto;
        font-size:1em;
      }
      .nav-collapse::before
      {
        display:none;
        visiblity:hidden;
      }
      .module,
      .come-in-top,
      .nav-toggle {
        opacity:1!important;
      }
      </style>
  </noscript>

    <style>
    a.bigLink::before,
    a.bigLink:hover::before {
        color:#707071;
    }
    </style>
    <script>
      (function(d) {
        var config = {
          kitId: 'hxs8iau',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

    <?php
    $tagged = false;

    // add the tag filter
    if ($tag = param('tag')) {
        $tagged=true;
    }
    ?>

</head>

<body class="art <?php echo $page->slug(); if($page->intendedTemplate() == 'project'): ?> temp-Project<?php endif; if($tagged == true):?> tagged<?php endif; ?>">
      <header class="come-in-top">
              <?php snippet('menu');?>
      </header>
<main>
<div class="cd-index cd-main-content">
