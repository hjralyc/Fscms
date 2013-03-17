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
 * @subpackage	Controllers
 * @category	Admin_Config
 *
 */

class Configure extends Fs_Admin {
    
    function __construct(){

    	parent::__construct();
        
    }

    function index(){

       
    }

    public function site_Set (){

        $data['pagetitle'] = "holala~ welcome to model page";
        $this->template('panel',$data);
    }


    public function tpl_Set (){

        $data['pagetitle'] = "holala~ welcome to model page";
        $this->template('panel',$data);
    }


    public function lang_Set (){

        $data['pagetitle'] = "holala~ welcome to model page";
        $this->template('panel',$data);
    }

}

/* End of file configure.php */
/* Location: ./application/controller/admin/configre.php */