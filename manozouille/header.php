<!DOCTYPE HTML>
<!--[if lt IE 8 ]><html dir="ltr" lang="fr-FR" class="is_ie7 lt_ie8 lt_ie9 lt_ie10"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="fr-FR" class="is_ie8 lt_ie9 lt_ie10"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="fr-FR" class="is_ie9 lt_ie10"><![endif]-->
<!--[if gt IE 9]><html dir="ltr" lang="fr-FR" class="is_ie10"><![endif]-->
<!--[if !IE]><!--><html class="no-js" lang="<?php echo $locale; ?>"> <!--<![endif]-->
<head>
    <meta charset="<?php echo $charset; ?>">
    <title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
    <meta name="title" content="<?php Options::out( 'title' ) ?>">
    <meta name="description" content="<?php Options::out( 'tagline' ) ?>">

    <meta name="viewport" content="initial-scale=1.0,width=device-width">

    <meta property="og:title" content="<?php Options::out( 'title' ) ?>"/>
    <meta property="og:url" content="<?php Site::out_url('habari'); ?>"/>
    <meta property="og:type" content="blog"/>
    <meta property="og:image" content="<?php Site::out_url( 'theme' ); ?>/screenshot.png" />
    <meta property="og:description" content="<?php Options::out( 'tagline' ) ?>">
    <!-- Add your Google+ ID and remove this comment :) -->
    <link rel="author" href="https://plus.google.com/xxxxxxxxxxxxxxxxxxxx/posts">

    <link rel="shortcut icon" type="image/png" href="<?php Site::out_url( 'theme' ); ?>/img/favicon.png">
    <link rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/css/style.css">
    <link rel='stylesheet' href="http://fonts.googleapis.com/css?family=Nunito:400,300,700">

    <!--[if lt IE 9]>
    <script src="<?php Site::out_url( 'theme' ); ?>/js/html5shiv.js"></script>
    <![endif]-->

    <?php echo $theme->header(); ?>
</head>
<body class="<?php echo $theme->body_class(); ?>">
    <header role="banner">
        <div class="grid grid-pad">
            <div class="col-1-1">
                <div class="content">
                    <h1><a href="<?php Site::out_url( 'habari'); ?>" title="<?php Options::out( 'title' ); ?>"> <?php Options::out( 'title' ); ?></a></h1>
                    <h2><?php Options::out( 'tagline' ); ?></h2>
                    <nav class="social" role="navigation">
                        <a class="rss" title="S'abonner au flux RSS" target="_blank" href="<?php echo $theme->feed_alternate(); ?>"></a>
                        <a class="facebook" title="Me retrouver sur Facebook" target="_blank" href="https://www.facebook.com/lboldair"></a>
                        <a class="twitter" title="Suivez-moi sur Twitter" target="_blank" href="http://www.twitter.com/Manoz"></a>
                        <a class="blog" title="Mon autre blog" target="_blank" href="http://www.manoz.fr/"></a>
                        <a class="github" title="For this theme on Github" target="_blank" href="https://github.com/Manoz/Manozouille"></a>
                    </nav>
                </div>
                <div class="sep"></div>
            </div>
        </div>
    </header>
