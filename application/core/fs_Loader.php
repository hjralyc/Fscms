<?php

/*
 *	重新分配模板位置
 *	
 *	自定义目录 ： templates/
 *	文件头 : fs_Controller
 *
 */

	class fs_Loader extends CI_Loader {

		public function __construct(){

			parent::__construct();
			// 模板默认路径
			$this->_ci_view_paths = array(FCPATH=>true);
		}


		
	}

?>