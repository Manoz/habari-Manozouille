<?php 
/*
 * Files by Mzingui_v2
 * Url : https://github.com/miklb/Mzingi_v2/tree/master/forms
*/
?>
<div class="form-control" id="cf_content">
	<label<?php if ( isset( $label_title ) ) { ?> title="<?php echo $label_title; ?>"<?php $label_title = ''; } else { echo ( isset( $title ) ? "  title=\"$title\"" : '' ); } ?> for="<?php echo $field; ?>">
	<?php echo $this->caption; ?></label>
	<textarea 
		name="<?php echo $field; ?>" 
		id="<?php echo $field; ?>"
		class="<?php echo $field; ?>" 
		rows="10"
		placeholder="Votre commentaire ..." ></textarea>
	<?php if ( $message != '' ) : ?>
		<p class="error">Pourquoi commenter si vous ne laissez pas de message ? :)</p>
	<?php endif; ?>
</div>