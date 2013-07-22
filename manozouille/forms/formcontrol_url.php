<?php 
/*
 * Files by Mzingui_v2
 * Url : https://github.com/miklb/Mzingi_v2/tree/master/forms
*/
?>
<div class="form-control" id="cf_url">
	<label for="<?php echo $field; ?>"><?php echo $this->caption; ?></label>
	<input
		type="url" 
		id="<?php echo $field; ?>" 
		name="<?php echo $field; ?>" 
		placeholder="Votre site ou blog ...">
	<?php $control->errors_out( '<li>%s</li>', '<ul class="error">%s</ul>' ); ?>
</div>