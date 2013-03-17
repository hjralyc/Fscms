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
 * @category	Admin_desktop
 *
 */

class Panel extends Fs_Admin {
    
    function __construct(){

    	parent::__construct();
        
    }

    function index(){

        // 设定 页面标题

        $data['title'] = lang('ti_admin_about');

        // 输出内容，初始化about函数
        
        $data['pagetitle'] = $this->about();
        
        $data['content'] = $this->take("formui");

        // 模板输出
        $this->template('panel',$data);
    }

    public function about(){

        return site_url();
        
    }

    public function sysinfo(){

        // 输出内容，初始化about函数

        $data['title'] = lang('ti_admin_sys');
        $data['pagetitle'] = "System infomation";
        
        // 模板输出
        $this->template('panel',$data);
    }

    public function statistical(){

        // 输出内容，初始化about函数

        $data['title'] = lang('ti_admin_stati');
        $data['pagetitle'] = "Statistical analysis";
        
        // 模板输出
        $this->template('panel',$data);

    }
}

/* End of file Panel.php */
/* Location: ./application/controller/admin/panel.php */