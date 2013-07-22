<?php 
/*
 * Files by Mzingui_v2
 * Url : https://github.com/miklb/Mzingi_v2/tree/master/forms
*/
?>
<div class="form-control" id="cf_text">
	<label for="<?php echo $field; ?>"><?php echo $this->caption; ?></label>
	<input 
		type="text" 
		id="<?php echo $field; ?>" 
		name="<?php echo $field; ?>" 
		placeholder="Votre prénom ou pseudo ...">
	<?php $control->errors_out( '<li>%s</li>', '<ul class="error">%s</ul>' ); ?>
</div>