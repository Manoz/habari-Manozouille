<?php

/**
 * All this file content is in french.
 * Exemple : 'more' mean 'Lire la suite'
 *
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

    /*
     * Form by Mzingui_v2
     * Url : https://github.com/miklb/Mzingi_v2/tree/master/forms
    */
    public function action_form_comment( $form ) { 
        // Create all fields template
        $this->add_template('formcontrol_form', dirname(__FILE__).'/forms/formcontrol_form.php', true);
        $this->add_template('formcontrol_submit', dirname(__FILE__).'/forms/formcontrol_submit.php', true);
        $this->add_template( 'manozouille_email', dirname(__FILE__).'/forms/formcontrol_email.php' );
        $this->add_template( 'manozouille_url', dirname(__FILE__).'/forms/formcontrol_url.php' );
        $this->add_template('formcontrol_textarea', dirname(__FILE__).'/forms/formcontrol_textarea.php', true);
        $this->add_template('formcontrol_text', dirname(__FILE__).'/forms/formcontrol_text.php', true);     
        $form->cf_email->template = 'manozouille_email';
        $form->cf_url->template = 'manozouille_url';

        // Add infos Fieldset and move on top
        $form->append( 'fieldset', 'cf_commenterinfo'/* *Add label ? **, _t( 'Tell Me About Yourself' )*/);
        $form->move_before( $form->cf_commenterinfo, $form->cf_commenter );
        
        // Move the fields into info fieldset
        $form->cf_commenter->move_into($form->cf_commenterinfo);
        $form->cf_email->move_into( $form->cf_commenterinfo );
        $form->cf_url->move_into( $form->cf_commenterinfo );

        // Add "message" fieldset
        $form->append ( 'fieldset', 'cf_commentermsg');

        // Move textarea and label into "Message" fieldset
        $form->cf_content->move_into($form->cf_commentermsg);

        // Add submit button and move it after "message" fieldset
        $form->cf_submit->caption = _t( 'Submit' );
        $form->cf_submit->move_after($form->cf_commentermsg);

        // Add email disclamer and move it into info fieldset
        $form->append('static','cf_disclaimer', _t( '<p class="disclamer"><small>Votre adresse email ne sera pas publiée.</small></p>' ) );
        $form->cf_disclaimer->move_into($form->cf_commenterinfo);
    }

}
?>