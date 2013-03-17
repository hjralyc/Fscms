
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
 * @subpackage	ADMIN_TEMPLATE
 * @category	PANEL
 *
 */



/* End of file panel.php */
/* Location: ./adm_tpl_folder/panel.php */

?>
 <!--  left navigation -->
  <div class="leftframe grid_5 alpha">
    <ul class="leftnavi">
      <?php echo $leftnavi;?>
    </ul>
  </div>
  <!--  end left navigation --> 

    <!--  wrap -->
  <div class="rightframe">
    <div class="mainmenu"></div>
    <section id="wrap" class="radius">
      <div class="path"><?php echo @lang('ti_admin_path') ;?>: <?php echo @$pathinfo ;?></div>
      <div class="toolbar"><h1><?php echo @$pagetitle ?></h1> <?php echo @$pagectrl;?></div>
      <section id="pjax-content">
       <p></p><?php echo @$content; ?>
      </section>
   </section>
  </div>
  <!--  end wrap --> 
