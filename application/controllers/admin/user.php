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
 * @category	Admin_user
 *
 */

class User extends Fs_Admin {
    
    function __construct(){

    	parent::__construct();

        $data['title'] = lang('ti_admin_user');
        $this->load->model('user_model');
        $this->lang->load('admin', 'japanese');
    }

    function index(){

        // 设定 页面标题
       
    }

    public function userpage(){

        $data['title'] = lang('ti_admin_user');
        
        $users = $this->user_model->get_all();                //通过数据模型调用数据
        $data['content'] = $this->take('userpage', array('users' => $users)); //输出到模板view
        $data['pagetitle'] = $this->lang->line('admin_navi_user');;
        $this->template('panel',$data);
    }


    public function usergroup(){

        $data['pagetitle'] = "holala~ welcome to usergroup page";
        $this->template('panel',$data);
    }

}

/* End of file user.php */
/* Location: ./application/controller/admin/user.php */