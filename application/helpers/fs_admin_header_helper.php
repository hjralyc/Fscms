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
 * @category	Header init
 *
 */


function set_header(){

	$ci=& get_instance();

	// 要加载的js文件名，带后缀
	// 每个加载项都是一个数组，数值1为文件名，数值2为是否兼容IE版本，例如 IE 9 或者 IE 8
	// 版本符号尽量依据html格式填写。
	$script_str = $ci->config->item('script_file');

	// 要加载的样式表名，带后缀
	$css_str = $ci->config->item('css_file');


	// 目录名
	$global_path = rtrim($ci->config->base_url(),'/')."/".rtrim($ci->config->item('admin_tpl_folder'),'/')."/";
	$script_path =  $ci->config->item('script_path');;
	$css_path =  $ci->config->item('css_path');;

	// 字符串 输出格式化
	$script_head = "\r\n<script src=\"".$global_path.$script_path."/";
	$script_end = "\"></script>";
	$css_head = "\r\n<link href=\"".$global_path.$css_path."/";
	$css_moth = "";
	$css_end = "\" rel=\"stylesheet\" type=\"text/css\" ".$css_moth.">";

	$print_str = "";
	$print_if = array();
	
	// 循环输出css
	foreach ($css_str as $key => $value) {

		if ($value[1]!='') {

			$print_if = array_merge_recursive($print_if,array($value[1]=>array($css_path=>$value[0])));

		}else{

			$print_str .= $css_head . $value[0] . $css_end;
		}
	}


	// 循环输出js
	foreach ($script_str as $key => $value) {

		if ($value[1]!='') {

			$print_if = array_merge_recursive($print_if,array($value[1]=>array($script_path=>$value[0])));
		
		}else{

			$print_str .= $script_head . $value[0] . $script_end;
		}
		
		

	}


	$print_str .= "\r\n\r\n";

	// 循环输出 ie 判断
	$if_str = "";

	foreach ($print_if as $key => $value) {
		
		$if_str .= $if_head = "\r\n<!--[if lt ".strtoupper($key)."]>\r\n";

		foreach ($value as $tp => $file) {
			
			// script 处理
			if ($tp==$script_path) { 

				if (is_array($file)) {

					foreach ($file as $id => $name) {

						$if_str .= $script_head;
						$if_str .= $name;
						$if_str .= $script_end;
					}
				}else{

					$if_str .= $script_head;
					$if_str .= $file;
					$if_str .= $script_end;
				}
			}

			// css 处理
			if ($tp==$css_path) { 

				if (is_array($file)) {

					foreach ($file as $id => $name) {

						$if_str .= $css_head;
						$if_str .= $name;
						$if_str .= $css_end;
					}
				}else{

					$if_str .= $css_head;
					$if_str .= $file;
					$if_str .= $css_end;
				}
			}
		}

		$if_str .= $if_end = "\r\n\r\n<![endif]-->\r\n";
	}

	echo $if_str."\r\n".$print_str;
	
}


/* End of file fs_admin_header_helper.php */
/* Location: ./application/helper/fs_admin_header_helper.php */