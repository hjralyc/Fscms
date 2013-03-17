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
 * @category	Admin_Content
 *
 */

class Content extends Fs_Admin {
    
    function __construct(){

    	parent::__construct();
        
    }

    function index(){

    }

    public function model($str=""){

        if ($str=="") {
            # code...

        // 初始化该页的控制按钮群
       // $data['pagectrl'] = $this->ctrlgroup(array(
                    
       //             lang('form_button_new') => "addmodel",

       //     ));

        $data['pagetitle'] = $data['title'] = lang('ti_admin_model');

        $data['content'] = $this->take('./model/modelist',$data);

        $this->template('panel',$data);

        }elseif ($str=="add") {
            $this->addmodel();
        }
    }

    public function categories(){

        $data['pagetitle'] = "holala~ welcome to categories page";
        $this->template('panel',$data);
    }

    public function article(){

        $data['pagetitle'] = "holala~ welcome to article page";
        $this->template('panel',$data);
    }

    public function addmodel(){

        // 标题

        $data['pagetitle'] = $data['title'] = lang('ti_admin_model_add');

        // 控制按钮组

        $data['pagectrl'] = $this->ctrlgroup(array(
                    
                    lang('form_button_save') => "../user/userpage",
                    lang('form_button_savexit') => "#",
                    lang('form_button_reset') => "../user/userpage",

        ));

        // 更新内容

        $data['content'] = $this->take('model/addmodel.php',$data);


        // 生成模板

        $this->template('panel.php',$data);

    }

}

/* End of file content.php */
/* Location: ./application/controller/admin/content.php */