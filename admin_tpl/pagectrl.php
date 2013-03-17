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
 * @subpackage	ADM_TEMPLATE
 * @category	Page Top_Navi
 *
 */
?>
<div id="ctrlgroup">
	<?php 
	foreach ($ctrlgroup as $key => $value) {
		
		if ($value=="addmodel") {
			echo "<a href=\"".$value."\"><button id=\"dialog-link\" class=\"ui-state-default ui-corner-all\">".$key."</button></a>";
		}else{
			echo "<a href=\"".$value."\"><button class=\"button\">".$key."</button></a>";
		}
	}
	?><span id="buttonafter"></span>
</div>

<?php /* End of file pagectrl.php */
/* Location: ./admin_tpl/pagectrl.php */