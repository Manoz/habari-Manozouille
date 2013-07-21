<?php

/**
 * All this file content is in french.
 * Exemple : 'more' mean 'Lire la suite'
 *
 * @todo comments, everywhere
 * @todo better contact form with templates (thems/manozouille/inc/an-element_form.php)
 * @todo find a trick to translate this with .po files
 *
 */

 class manoz extends Theme {

    public function action_init_theme() {
        // Apply Format::autop() to comment content...
        Format::apply( 'autop', 'comment_content_out' );
        // Apply Format::tag_and_list() to post tags...
        Format::apply( 'tag_and_list', 'post_tags_out' );
        // Only uses the <!--more--> tag, with the 'more' as the link to full post
        Format::apply_with_hook_params( 'more', 'post_content_out', 'Lire la suite' );
        // Creates an excerpt option. echo $post->content_excerpt;
        Format::apply( 'autop', 'post_content_excerpt' );
        Format::apply_with_hook_params( 'more', 'post_content_excerpt', 'Lire la suite',100, 2 );
        // Format the meta date (home, entry.single and entry.multiple)
        Format::apply( 'format_date', 'post_pubdate_out','<strong>Publié le</strong> <span>{d}-{m}-{Y}</span>' );
    }

    public function add_template_vars() {
        if ( !$this->template_engine->assigned( 'pages' ) ) {
            $this->assign( 'pages',
                Posts::get( 'page_list' ) );
        }
    }

    public function action_form_comment( $form ) { 
        $form->append( 'fieldset', 'cf_commenterinfo', _t( ' ' ) );
        $form->move_before( $form->cf_commenterinfo, $form->cf_commenter );
        $form->cf_commenter->move_into( $form->cf_commenterinfo );
        $form->cf_commenter->caption = _t( 'Pseudo/Prénom :' ) . '<span class="required">' . ( Options::get( 'comments_require_id' ) == 1 ? ' *' . _t( 'Required' ) : '' ) . '</span>';
        $form->cf_email->move_into( $form->cf_commenterinfo );
        $form->cf_email->caption = _t( 'Email :' ) . '<span class="required">' . ( Options::get( 'comments_require_id' ) == 1 ? ' *' . _t( 'Required' ) : '' ) . '</span>';
        $form->cf_url->move_into( $form->cf_commenterinfo );
        $form->cf_url->caption = _t( 'Site/blog :' );
        $form->append('static','cf_disclaimer', _t( '<p><em><small>Votre adresse email ne sera pas publiée.</small></em></p>' ) );
        $form->cf_disclaimer->move_into( $form->cf_commenterinfo );
        $form->append('fieldset', 'cf_contentbox', _t( ' ' ) );
        $form->move_before( $form->cf_contentbox, $form->cf_content );
        $form->cf_content->move_into( $form->cf_contentbox );
        $form->cf_content->caption = _t( 'Message: <span>(obligatoire)</span>' );
        $form->cf_submit->caption = _t( 'Submit' );
    }
}
?>