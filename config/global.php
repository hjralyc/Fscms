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
 * @subpackage	CONFIGURE
 * @category	System setting
 *
 */

/**   FOLDER SETTING **/

$config['admin_url'] = 'admin';
$config['admin_tpl_folder']	= 'admin_tpl';

$config['custom_tpl_folder']	= 'default';


// 存放脚本和样式表的目录名。目录一定要放置在模板目录下。
$config['script_path'] = 'js';
$config['css_path'] = 'css';

/* 加载的脚本名称和样式表名称
* 使用时，增加子数组

array(

	array(	'add-file.js',
			'IE X'	), 
};


*  ▼ begin js & css file list                */

$config['script_file'] = array(

							array(	'jquery.min.js', //jquery 库文件
									''	),

							array(	'jquery.hoverIntent.minified.js',  // 头部菜单辅助函数
									''	),

							array(	'jquery.dcmegamenu.1.3.js', // 头部多元菜单
									''	),

							array(	'jquery.pjax.js', // pjax 无刷新
									''	),

							array(	'jquery.cookie.js', // pjax cookies
									''	),

							array(	'bootstrap.js', // 表单ui
									''	),

							array(	'jquery-ui-1.10.1.custom.js', // 表单ui
									''	),

							array(	'jquery.mjs.nestedSortable.js', // 表单ui
									''	),

							array(	'bootstrap-fileupload.js', // 表单ui
									''	),

							array(	'formrun.js', // 表单ui
									''	),

							array(	'html5shiv.js', // ie9以下初始化html5标签
									'IE 9'	)
						 );

$config['css_file'] = array(

							array(	'fscms/jquery-ui-1.10.1.custom.css',
									''	),

							array(	'bootstrap.css',
									''	),

							array(	'reset.css',
									''	),

							array(	'import.css',
									''	),

							array(	'bootstrap-fileupload.css',
									''	),

							array(	'ie.css',
									'IE 9'	)

					  );

/*   ▲  end js & css file list  */

$config['tips'] = true;