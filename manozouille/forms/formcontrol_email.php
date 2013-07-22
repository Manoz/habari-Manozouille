<?php 
/*
 * Files by Mzingui_v2
 * Url : https://github.com/miklb/Mzingi_v2/tree/master/forms
*/
?>
<div class="form-control" id="cf_email">
	<label
		<?php if ( isset( $label_title ) ) { ?> title="<?php echo $label_title; ?>"<?php } else { echo ( isset( $title ) ? " title=\"$title\"" : '' ); } ?> 
		for="<?php echo $field; ?>">Email<span class="required"> *</span></label>
	<input 
		type="email" 
		id="<?php echo $field; ?>" 
		name="<?php echo $field; ?>" 
		placeholder="Votre adresse email ...">
	    <?php $control->errors_out( '<li>%s</li>', '<ul class="error">%s</ul>' ); ?>
</div>