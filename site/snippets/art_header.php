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

    <?php
    $tagged = false;

    // add the tag filter
    if ($tag = param('tag')) {
        $tagged=true;
    }
    ?>

</head>

<body class="art <?php echo $page->slug(); if($page->intendedTemplate() == 'project'): ?> temp-Project<?php endif; if($tagged == true):?> tagged<?php endif; ?><?php if ($kirby->user()): ?> userisLoggedIn<?php endif;?>">

      <header class="come-in-top">
				<?php if ($kirby->user()): ?>
					<div class="privatenav">
						<nav>
							<ul class="items">
								<li>
									<a href="<?= $site->panelUrl(); ?>">Panel</a>
								</li>
								<li>
									<a href="<?= $page->panelUrl();?>">Edit Page</a>
								</li>
								<li>
									<a href="<?= $site->index()->find('checklists')->url()?>">Checklists</a>
								</li>
								<li>
									<a href="<?= $site->index()->find('database-search')->url() ?>">Search</a>
								</li>
							</ul>
							<a class="logout" href="<?= url('logout') ?>">Logout</a>
						</nav>
					</div>
				<?php endif; ?>

              <?php snippet('menu');?>
      </header>
<main>
<div class="cd-index cd-main-content">
