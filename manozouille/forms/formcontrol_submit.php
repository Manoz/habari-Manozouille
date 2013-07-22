<?php 
/*
 * Files by Mzingui_v2
 * Url : https://github.com/miklb/Mzingi_v2/tree/master/forms
*/
?>
<input 
	type="submit" 
	class="button"  
	name="<?php echo $field; ?>" 
	value="<?php echo htmlspecialchars($caption); ?>">
<?php if($message != '') : ?>
<p class="error"><?php echo $message; ?></p>
<?php endif; ?>