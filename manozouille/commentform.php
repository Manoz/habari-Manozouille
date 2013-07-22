<?php if ( Session::has_messages() ) {
        Session::messages_out();
    }
?>

<div class="comments">
    <h2><?php echo $post->comments->comments->approved->count; ?> <?php echo _n( 'Comment', 'Comments', $post->comments->comments->approved->count ); ?></h2>
    <ul class="comment-list">
        <?php
        if ( $post->comments->moderated->count ) {
            foreach ( $post->comments->comments->moderated as $comment ) {
            $class = 'class="comment';
            if ( $comment->status == Comment::STATUS_UNAPPROVED ) {
                $class.= '-unapproved';
            }
            $class.= '"';
        ?>

            <li id="comment-<?php echo $comment->id; ?>" <?php echo $class; ?>>
                <div class="comment-meta">Commenaire #<a href="#comment-<?php echo $comment->id; ?>" class="counter" title="Lien de ce commentaire"><?php echo $comment->id; ?></a>
                    <span>
                        <strong>Par</strong> <?php echo $theme->comment_author_link($comment); ?>
                    </span>
                    <span>
                        <strong>le</strong>
                        <a href="#comment-<?php echo $comment->id; ?>" title="<?php _e('Time of this comment'); ?>"><?php $comment->date->out( _t( 'd M Y' ) ); ?> à <?php $comment->date->out( _t( 'H:i' ) ); ?> </a>
                    </span>
                    <h5>
                        <?php if ( $comment->status == Comment::STATUS_UNAPPROVED ) : ?> <?php _e('In moderation'); ?><?php endif; ?>
                    </h5>
                </div>
                <div class="comment-content">
                    <?php echo $comment->content_out; ?>
                </div>
            </li>

        <?php
            }
        }
        else {
            _e('<li>Il n\'y a pas de commentaires <span id="triste"></span> <br/> Mais tu peux être le premier ou la première à commenter ! <span id="supercontent"></span></li>');
        }
        ?>
    </ul>
    <div class="comment-form">
        <h2>Pour commenter, c'est ici :</h2>
        <?php $post->comment_form()->out(); ?>
    </div>
</div>
