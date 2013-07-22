<?php $theme->display ( 'header' ); ?>
    <div id="main" role="main">
        <div class="grid grid-pad">
            <div class="col-1-1">
                <h2><?php echo $tags_msg; ?></h2>
            </div>
            <div class="col-9-12" id="articles">
                <?php foreach ( $posts as $post ) { ?>
                    <div id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
                        <h2>
                            <a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a>
                        </h2>

                        <div class="entry" id="home">
                            <?php echo $post->content_excerpt; ?>                            
                        </div>

                        <div class="meta">
                            <ul>
                                <li class="meta-date"><?php echo $post->pubdate_out; ?></li>
                                <li class="meta-author"><strong>Par</strong> Manoz</li>
                                <li class="meta-comments"><?php echo $theme->comments_link($post,'%d commentaires','%d commentaire','%d commentaires'); ?></li>
                                <?php if ( count( $post->tags ) > 0 )  { ?>
                                <li class="tags"><?php _e('Tagged:'); ?> <?php echo $post->tags_out; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
                <div class="pagenav clearfix">
                    <?php echo $theme->prev_page_link('&laquo; ' . _t('Newer Posts')); ?> <?php echo $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php echo $theme->next_page_link('&raquo; ' . _t('Older Posts')); ?>
                </div>
            </div>
            <div class="col-3-12" id="sidebar">
                <div class="sidebar">
                    <?php $theme->display('sidebar'); ?>
                </div>
            </div>
        </div>
    </div>
<?php $theme->display ( 'footer' ); ?>
