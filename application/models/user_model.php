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
 * @subpackage	Model
 * @category	user_model
 *
 */


class User_model extends CI_Model {

   function __construct()
  {
    parent::__construct();
  }

    public function get_all()              //�г����з���
    {
        $users = $this->db->order_by('uid') //������ֶ���
            ->get('fs_users')               //���õı���
            ->result_array();

        return $users;
    }

}
