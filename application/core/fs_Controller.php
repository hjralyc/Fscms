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
 * @category	fs_Controller & fs_Admin
 *
 */

class Fs_Controller extends CI_Controller {
    
    function __construct(){
        
        parent::__construct();

        // load language file
        $this->lang->load('admin');
        $this->lang->load('date');
        $this->lang->load('form');
        $this->lang->load('pagination');

        // install
		if ($this->test_database() === FALSE)
		{
			redirect(base_url().'install/');
			die();
		}

    }

    // test datebase
	public function test_database()
	{

		require(FCPATH.'config/database.php');
				
		if ($db[$active_group]['hostname'] == '' || $db[$active_group]['username'] == '' || $db[$active_group]['database'] == '')
		{
			return FALSE;
		}
		return TRUE;
	}
	// take template
	protected function take($template_name,$vars=array()){

		$tpl_path = TPLPATH;
		$ci =  &get_instance();

		$content = $ci->load->view($tpl_path.$template_name, $vars, true);
        return $content;
	}

	// output template
	protected function template($template_name, $vars = array(), $return = FALSE){

		$tpl_path = TPLPATH;
		$ci =  &get_instance();

		$content  = $ci->load->view($tpl_path.'header', $vars, $return);
        $content .= $ci->load->view($tpl_path.$template_name, $vars, $return);
        $content .= $ci->load->view($tpl_path.'footer', $vars, $return);
		//$content = $this->view($tpl_path.$template_name, $vars, $return);

        if ($return)
        {
            return $content;
        }
	}
}

class Fs_Admin extends Fs_Controller {

		// 菜单变量

		static $menu;
		static $submenu;


		function __construct(){

			parent::__construct();


		}



	// 读取模板
	protected function take($template_name,$vars=array()){

		$tpl_path = ADM_TPLPATH;
		$ci =  &get_instance();

		$content = $ci->load->view($tpl_path.$template_name,$vars,true);
        return $content;
	}

	// 输出模板文件
	protected function template($template_name, $vars = array(), $return = FALSE){

		$tpl_path = ADM_TPLPATH;
		$ci =  &get_instance();

        // 初始化header菜单 和 操作菜单
		$data['topmenu'] = $this->navi_init();
        $data['leftnavi'] = $this->left_Navi();

		// 填补页面标题函数
        if (empty($vars['title'])) {
        	
        	$data['title'] =  "Cute cms : FSCMS !";

        } else {

        	$vars['title'] .= " ";

        }


		// 当前路径信息
		$pathstr = "";
		$pathtmp = "";
        foreach ($ci->uri->segment_array() as $key => $value) {

        	// 在菜单数组里寻找对应的路径字段，类名，方法名等，如果不为空那么
			if ($this->return_Menuname($value,"")!="") {


				// 如果找到的是类名那么
				if ($value==$this->router->fetch_class()) {

					$pathitem = $this->return_Menuname($value,"");

					// 判断这个类的函数是否默认函数，默认的话不加链接
					if ($this->router->fetch_method()==$this->chknaviarr(next(self::$menu[$pathitem]))) {
						$pathstr.= $pathitem . " / ";
					}else{ // 否则找到这个类的默认函数链接
						$pathstr.= "<a href=\"".site_url()."/".$pathtmp.$value."/".$this->chknaviarr(current(self::$menu[$pathitem]))."\">".$pathitem."</a> / ";
					}
					
				// 否则
				}else{
					if ($pathitem==$ci->config->item('admin_url')) {
						# code...
					}else{
						$pathstr.= "<a href=\"".self::$menu[$pathitem][$this->return_path($value,self::$menu[$pathitem])][0]."\">".$this->return_path($value,self::$menu[$pathitem]) . "</a> / ";
					}
				}

			}else{

	        	$pathitem = $value;

			}

			if ($key==1) {

				$pathstr.= "<a href=\"".site_url()."/".$pathtmp.$value."\">".$pathitem."</a> / ";

			}

        	$pathtmp .= "$value"."/";
           
        }

        // 如果有页面标题 在路径最后加入标题，没有标题为空
        if (array_key_exists('title',$vars)) {

        	$data['pathinfo'] = $pathstr."<b>".$vars['title']."</b>";

        }else{

        	$data['pathinfo'] = $pathstr;

    	}

    	// 此处关键，将函数内$data 和 $vars 数组进行合并

		$vars = array_merge($vars,$data);

    	// 此处加入PJAX处理

    	$data['my_PJAX_data'] = $this->take($template_name,$vars);

    	if (array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX']) {

			echo $data['my_PJAX_data'];

		} else {

		// 写入模板
			$content  = $ci->load->view($tpl_path.'header', $vars, $return);
	        $content .= $ci->load->view($tpl_path.$template_name, $vars, $return);
	        $content .= $ci->load->view($tpl_path.'footer', $vars, $return);
		}

        if ($return)
        {
            return $content;
        }
	}

	// 初始化管理主菜单，在后台头部位置。

	public function navi_init(){

		$menu = self::$menu =  array(

					lang('admin_navi_home') => array(

											'root' => '',
											lang('admin_about') => array(''),
											lang('admin_sysinfo') => array('sysinfo'),
											lang('admin_statistical') => array('statistical')

					) ,

					lang('admin_navi_content') => array(

											'root' => 'content',
											lang('admin_model') => array('model','addmodel'),
											lang('admin_categories') => array('categories'),
											lang('admin_article') => array('article')

					) ,

					lang('admin_navi_module') => array(

											'root' => 'module',
											lang('admin_block') => array("block"),
											lang('admin_tag') => array("tag"),
											lang('admin_plugin') => array("plugin"),
											lang('admin_database') => array("database"),
											lang('admin_label') => array("label")

					) ,

					lang('admin_navi_user')  => array(

											'root' => 'user',
											lang('admin_user') => array("userpage"),
											lang('admin_group') => array("usergroup")

					) ,

					lang('admin_navi_configure') => array(

											'root' => 'configure',
											lang('admin_site') => array("site_Set"),
											lang('admin_template') => array("tpl_Set"),
											lang('admin_language') => array("lang_Set")

					)  
				);


		$nav_class_name = "navi";
		$ul_class_name = "menu";
		$li_class_name = "grid_3";
		

		$str = "<nav class=\"".$nav_class_name."\"><ul id=\"topmenu\" class=\"".$ul_class_name."\">\r\n";
		
		foreach ($menu as $key => $value) {
			
			$li_current = "current";
			$li_links = "<a>";

			if ($this->in_Where()!=$key) {
				$li_current = $this->router->fetch_class();
				$li_links = "<a href=\"".site_url()."/".rtrim($this->config->item('admin_url'),'/')."/".$value['root']."/".$this->chknaviarr(next($value))."\">";
			}

			$str .= "\t<li class=\"".$li_class_name." ".$li_current."\">".$li_links;
			$str .= $key;
			$str .= "</a></li>\r\n";
		}

		$str .= "\t</ul>\r\n\t</nav>\r\n";

		return $str;

	}

	// 构建管理界面左部菜单

	protected function left_Navi () {

		$submenu = self::$menu; 
		$str = "";
		//var_dump($this->in_Where());
		foreach ($submenu[$this->in_Where()] as $key => $value) {

			$homestr = "/"; // 默认首页路径

			if ($key!='root') {

				//if (self::$menu[$this->in_Where()]!="") { // 除首页外的循环链接
				if ($this->in_Where()!=lang('admin_navi_home')) { // 除首页外的循环链接

					$homestr = "/".ltrim(rtrim($this->router->fetch_class(),'/'),'/').'/';

				}

				if ($this->return_path($this->router->fetch_method(),$submenu[$this->in_Where()])==$this->return_path($value[0],$submenu[$this->in_Where()])) {

					$str .= "\t<li class=\"current\"><a>".$key."</a></li>\r\n";

				}elseif(($this->in_Where()==lang('admin_navi_home'))&&($value[0]=='')&&($this->router->fetch_method()=='index')) {

					$str .= "\t<li class=\"current\"><a>".$key."</a></li>\r\n";

				}else{

					$str .= "\t<li><a href=\"".site_url()."/".rtrim($this->config->item('admin_url'),'/').$homestr.$this->chknaviarr($value)."\">".$key."</a></li>\r\n";
					//$str .= $this->return_path($value,$submenu[$this->in_Where()]);

				}
			}
		}
		return $str;
	} 

	// 提取URL路径部分 , 并返回对应的页面位置。
	// 此处用router来获取控制器名称。

	protected function in_Where(){

			$test = "";

			if($this->router->fetch_class()=="panel"){

				return lang('admin_navi_home');

			}else{

				return $this->return_Menuname($this->router->fetch_class(),"");

			}

	}

	// 查找管理菜单数组，返回一个语言包对应的变量来判断当前控制器是否与数组中某个字段对应。
	// 判断当前位置用。

	protected function return_Menuname($str,$source,$self = false){

		if (empty($code)) {

			$code = "";
		}

		if (empty($source)) {

			$source = self::$menu;
		}

		foreach ($source as $key => $value) {
			
			if ($self) {

				if (is_array($value)) {

					$code .= $this->return_Menuname($str,$value,true);
				
				}elseif($str == $value){

					$code .= $key;
				}
				
				

			}else{

				// 如果值为数组，切入子循环对比数据
				if (is_array($value)) {
					
					if(in_array($str, $value)) {

			            $code = $key;    

			        } else if($this->return_Menuname($str, $value)!="") {

			            $code = $key;

			        }
				}
			}
		}

			return $code;//var_dump($source);
	}

	protected function return_path($str,$main){

		$re = "";

		foreach ($main as $key => $value) {
					
			if (is_array($value)) {
				
				if(in_array($str, $value)) {

		            $re = $key;    

		        } else if($this->return_path($str, $value)!="") {

		            $re = $key;

		        }
			}	
		}

		return $re;
	}

	// 数组检查

	protected function chknaviarr($some=""){

		if (is_array($some)) {
			return $some[0];
		}else{
			return $some;
		}
	}

	// 公共控制菜单函数，比如新建，删除，查看等控制性按钮，位于PATH下方。

	protected function ctrlgroup($nav=array()){

		$ctrlarr['ctrlgroup'] = $nav;
        $ctrlgroup = $this->take('pagectrl',$ctrlarr);
        return $ctrlgroup;
	}

}

/* End of file fs_Controller.php */
/* Location: ./application/controllers/fs_Controller.php */