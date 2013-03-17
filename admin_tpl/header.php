<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * FSCMS
 *
 * @package   FSCMS
 * @author    FDUIT Dev Team
 * @license   http://fduit.com/fscms
 * @link    http://fduit.com
 * @since   Version 0.1.0
 */

// ------------------------------------------------------------------------

/**
 * FSCMS, CMS Article Controller
 *
 * @subpackage  ADM_TEMPLATE
 * @category  HEADER
 *
 */


/* End of file header.php */
/* Location: ./admin_tpl_folder/header.php */
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo @$title;?></title>
<?php set_header();?>
</head>
<body>
<!--  header -->
<header id="header" class="container_24">
  <div class="logo grid_5"> <img src="<?php echo BASE_URL.ADM_TPLPATH?>images/logo.png" alt> </div>
  <div id="nav" class="grid_16">
    <?php echo @$topmenu; ?>
  </div>
  <div class="login grid_4 suffix_1"> <span class="userinfo">ADMINISTRATOR</span> <span class="logout">LOGOUT</span> </div>
</header>
<!--  end header --> 
<!--  container -->
<section id="container" class="container_24"> 