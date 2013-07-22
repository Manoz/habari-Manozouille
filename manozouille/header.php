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
    <meta property="og:url" content="http://notes.manoz.fr"/>
    <meta property="og:type" content="blog"/>
    <meta property="og:image" content="<?php Site::out_url( 'theme' ); ?>/screenshot.png" />
    <meta property="og:description" content="<?php Options::out( 'tagline' ) ?>">

    <link rel="shortcut icon" type="image/png" href="<?php Site::out_url( 'theme' ); ?>/img/favicon.png">
    <link rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/css/style.css">

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
                    <h3>Retrouvez ici mes notes, textes, nouvelles et tous le contenu qui n'a pas sa place sur mon <a title="Mon blog" target="_blank" href="http://www.manoz.fr/">blog</a> principal :)</h3>
                    <div class="social">
                        <ul>
                            <li class="rss">
                                <a title="S'abonner au flux RSS" target="_blank" href="<?php echo $theme->feed_alternate(); ?>"></a>
                            </li>
                            <li class="facebook">
                                <a title="Me retrouver sur Facebook" target="_blank" href="https://www.facebook.com/lboldair"></a>
                            </li>
                            <li class="twitter">
                                <a title="Suivez-moi sur Twitter" target="_blank" href="http://www.twitter.com/Manoz"></a>
                            </li>
                            <li class="blog">
                                <a title="Mon autre blog" target="_blank" href="http://www.manoz.fr/"></a>
                            </li>
                            <li class="github">
                                <a title="For this theme on Github" target="_blank" href="https://github.com/Manoz/Manozouille"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sep"></div>
            </div>
        </div>
    </header>
