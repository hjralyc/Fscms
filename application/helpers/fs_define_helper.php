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
 * @subpackage	Helper
 * @category	Templates path
 *
 */


$ci=& get_instance();
define('TPLPATH','templates/'.ltrim(rtrim($ci->config->item('custom_tpl_folder'),'/'),'/').'/');
define('ADM_TPLPATH','/'.ltrim(rtrim($ci->config->item('admin_tpl_folder'),'/'),'/').'/');
define('BASE_URL',rtrim($ci->config->item('base_url'),"/")."/");
define('BASE_URL_ALL',rtrim($ci->config->item('base_url'),"/")."/".rtrim($ci->config->item('index_page'),"/"));


/* End of file fs_define_helper.php */
/* Location: ./application/helper/fs_define_helper.php */