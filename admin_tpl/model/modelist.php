<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * FSCMS
 *
 * @package		FSCMS
 * @author		FDUIT Dev Team
 * @license		http://fduit.com/fscms
 * @link		http://fduit.com
 * @since		Version 0.1.0
 */

// ------------------------------------------------------------------------

/**
 * FSCMS, CMS Article Controller
 *
 * @subpackage	ADM_TTEMPLATE
 * @category	model_list
 *
 */
?>



<section id="leftform">
	<!-- ui-dialog -->
<div>
	<p><dl class="leftform">
	<dt><?php echo @lang('model_add_base_h2');?></dt>
	<dd>
		<form action="" method="post" enctype="multipart/form-data" name="model_post">
			<!-- name -->
			<label>
			<h3><?php echo lang('form_label_screen_name');?>:</h3></label>
			<input name="modelname" type="text" title="<?php echo @lang('form_tips_name');?>" class="text"/>
			
			<!-- table name -->
			<label>
			<h3><?php echo lang('form_label_dbtablename');?>:</h3></label>
			<input name="modelname" type="text" title="<?php echo @lang('form_tips_dbname');?>"/>
			
			<!-- descorition -->
			<label>
			<h3><?php echo lang('form_label_desc');?>:</h3></label>
			<textarea></textarea>

			<input type="submit" class="btn btn-primary">&nbsp;<input type="reset" class="btn">
			
		</form>
	</dd>
</dl></p>
</div></section>
<section id="rightform">

</section>




<?/* End of file modelist.php */
/* Location: ./admin_tpl/model/modelist.php */