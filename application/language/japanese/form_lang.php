<?php
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
 * @subpackage	Language Pack
 * @category	Forms
 *
 */

// ------------------------------------------------------------------------

$lang['form_label_email'] = 'メールアドレス';
$lang['form_label_name'] = '名前';
$lang['form_label_dbtablename'] = '(データベース)テーブル';
$lang['form_label_firstname'] = '名';
$lang['form_label_lastname'] = '姓';
$lang['form_label_screen_name'] = '表示名';
$lang['form_label_username'] = '登録ID名';
$lang['form_label_birthdate'] = '誕生日';
$lang['form_label_gender'] = '性別';
$lang['form_label_login'] = 'ログイン';
$lang['form_label_password'] = 'パースワッド';
$lang['form_label_password_confirmation'] = '確認';
$lang['form_label_delete_account'] = 'Delete account';
$lang['form_label_desc'] = '記述';

/**
 * BUTTONS
 */
$lang['form_button_new'] = "新規入力";
$lang['form_button_edit'] = "編集";
$lang['form_button_send'] = "発信";
$lang['form_button_save'] = "保存";
$lang['form_button_savexit'] = "保存&閉める";
$lang['form_button_cancel'] = "キャンセル";
$lang['form_button_reset'] = "リセット";
$lang['form_button_register'] = "Register";
$lang['form_button_login'] = "ログイン";
$lang['form_button_logout'] = "ログ‐アウト";
$lang['form_button_post'] = "放送";
$lang['form_button_answer'] = "答え";
$lang['form_button_help'] = "ガイド";

/**
 * EMAIL
 */
// Registration : Email to the website email
$lang['mail_website_registration_subject'] = "Someone registered on the website";
$lang['mail_website_registration_message'] = "Here are the details of this new member.";

// Registration : Email to user
$lang['mail_user_registration_subject'] = "Registration on %s";
$lang['mail_user_registration_intro'] = "Dear %s,";
$lang['mail_user_registration_message'] = "You just registered on <b>%s</b>.<br/>Here are your login information.";
$lang['mail_user_registration_activate'] = "Before login, you need to activate your account through this link :";

// New Password : Email to user
$lang['mail_user_password_subject'] = "New password for your account on %s";
$lang['mail_user_password_intro'] = "Dear %s,";
$lang['mail_user_password_message'] = "You just asked for one new password to access to the website <b>%s</b>.<br/>Here are your new login information:";

/**
 * message
 */
$lang['form_not_logged'] = "You're not logged in.";

$lang['form_login_success_message'] = "You successfully logged in.";
$lang['form_login_error_message'] = "Error : Check your login / password.";
$lang['form_login_not_found_message'] = "User not found.";
$lang['form_login_not_activated_message'] = "This account is not activated. Check your emails and click on the activation link.";

$lang['form_register_success_message'] = "You successfully registered.";
$lang['form_register_error_message'] = "Error : Registration not successful.";

$lang['form_profile_success_message'] = "Profile data saved";
$lang['form_profile_error_message'] = "This user already exists. Please change your username or email";
$lang['form_profile_account_deleted'] = "Account deleted";

$lang['form_password_error_message'] = "One error happens.";
$lang['form_password_not_found_message'] = "This email seems not to be in our system";
$lang['form_password_success_message'] = "One email with you new password has just been sent to you.";


/**
 * TOOLTIPS
 */
$lang['form_tips_name'] = '名前を入力してください';
$lang['form_tips_dbname'] = 'データベースのテーブル名を入力してください';


/******************************************
 *   FORM TEXT
 */

/*** 	ADD MODEL ***/
$lang['model_add_base_h2'] = "モデル新規";