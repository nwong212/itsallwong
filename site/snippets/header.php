<!DOCTYPE html>
<html lang="en">
<head>
<!--
    itsallwong
-->
  <title><?php if(!$page->isHomePage()): echo html($page->parent()->title()) .', '; endif; echo html($page->title()) ?></title>
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

    <?php if($page->intendedTemplate() == 'project'): ?>
        <style>
          .work-item.cover::before {
              content: ' ';
              position: fixed;
              width: 100%;
              height: 100%;
              top: 0;
              left: 0;
              background-image: url('<?php echo $page->images()->first()->url() ?>');
              background-color: white;
              background-size: cover;
              background-position: center center;
              will-change: transform;
              z-index: -1;
          }
          @media screen and (max-width:55em) {
              .work-item.cover::before {
                  position:absolute;
              }
          }
        </style>
    <?php endif; ?>

  <?php
    $mainColor = $page->mainColor();
    $textColor = $page->textColor();

    if(!$mainColor->empty()||!$textColor->empty()):
  ?>
  <style>
        section.header h1,
        section.header h2,
        section.header h3,
        section.header h4,
        /*footer.foot a,*/{
          color:<?php echo $textColor; ?>;
        }
        a::after
        /*footer [class^='sector'].light*/
        {
          border-color: <?php echo $mainColor; ?>;
        }
        .excerpt a::after {
          border-color:<?php echo $textColor; ?>;
        }
        .excerpt a:hover {
          color:<?php echo $mainColor; ?>;
        }
        section.header,
        footer a.scrollToTop::after {
        background-color:<?php echo $mainColor; ?>;
        color:<?php echo $textColor; ?>;
        }
  </style>

  <?php endif;?>

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

</head>

<body class="<?php if($page->parent()=='art'):?>art<?php endif;?> <?php echo $page->slug()?> <?php if($page->intendedTemplate() == 'project'): ?>temp-Project<?php endif; ?>">
    <?php if(!$page->isHomePage()): ?>
      <header class="come-in-top">
      <?php snippet('menu');?>
      </header>
    <?php endif;?>
<main>
<div class="cd-index cd-main-content">
