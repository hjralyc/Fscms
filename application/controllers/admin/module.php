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
 * @category	Admin_module
 *
 */

class Module extends Fs_Admin {
    
    function __construct(){

    	parent::__construct();
        
    }

    function index(){

        // 设定 页面标题

        $data['title'] = lang('title');

        // 模板输出
        $this->template('panel',$data);
           	
    }

    public function block(){

        $data['pagetitle'] = "holala~ welcome to block page";
        $this->template('panel',$data);
    }


    public function tag(){

        $data['pagetitle'] = "holala~ welcome to tag page";
        $this->template('panel',$data);
    }


    public function plugin(){

        $data['pagetitle'] = "holala~ welcome to plugin page";
        $this->template('panel',$data);
    }


    public function database(){

        $data['pagetitle'] = "holala~ welcome to database page";
        $this->template('panel',$data);
    }


    public function label(){

        $data['pagetitle'] = "holala~ welcome to label page";
        $this->template('panel',$data);
    }

}

/* End of file module.php */
/* Location: ./application/controller/admin/module.php */