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
 * @subpackage	ADM_TTEMPLATE
 * @category	ADD_model
 *
 */ ?>

 <script>
  $(function() {
    var tooltips = $( "[title]" ).tooltip({
      position: {
        my: "center bottom-20",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });
    $( "<button>" )
      .text( "<?php echo @lang('form_button_help');?>" )
      .button()
      .click(function() {
        tooltips.tooltip( "open" );
      })
      .insertAfter( "span#buttonafter" );
  });
  </script>




<? /* End of file addmodel.php */
/* Location: ./admin_tpl/model/addmodel.php */