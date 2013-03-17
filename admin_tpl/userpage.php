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
 * @subpackage	ADMIN_TEMPLATE
 * @category	USERPAGE
 *
 */

?>
<table class="table table-striped table-bordered tablesorter">
  <thead>
    <tr>
      <th><?php echo $this->lang->line('admin_user_id') ?></th>
      <th><?php echo $this->lang->line('admin_user_name') ?></th>
      <th><?php echo $this->lang->line('admin_user_login_name') ?></th>
      <th><?php echo $this->lang->line('admin_user_mail') ?></th>
      <th><?php echo $this->lang->line('admin_user_url') ?></th>
      <th><?php echo $this->lang->line('admin_user_create_time') ?></th>
      <th><?php echo $this->lang->line('admin_user_lastip') ?></th>
    </tr>
  </thead>
  <tbody>
    <? foreach($users as $user): ?>
    <tr>
      <td><?=$user['uid']; ?></td>
      <td><?=$user['name']; ?></td>
      <td><?=$user['login_id']; ?></td>
      <td><?=$user['email']; ?></td>
      <td><?=$user['url']; ?></td>
      <td><?=$user['create_date']; ?></td>
      <td><?=$user['lastip']; ?></td>
    </tr>
    <? endforeach; ?>
  </tbody>
</table>

