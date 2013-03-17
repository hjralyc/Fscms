<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * FSCMS
 *
 * @package   FSCMS
 * @author    FDUIT Dev Team
 * @license   http://fduit.com/fscms
 * @link    http://fduit.com
 * @since   Version 0.1.0
 */

// ------------------------------------------------------------------------

/**
 * FSCMS, CMS Article Controller
 *
 * @subpackage  ADM_TEMPLATE
 * @category  FOOTER
 *
 */


/* End of file footer.php */
/* Location: ./admin_tpl_folder/footer.php */
?>


</section>
<!--  end container -->
<footer id="footer">
  <section class="copyright"></section>
</footer>
<a id="gototop"> <span>&nbsp;</span> </a> 
<script src="<?php echo BASE_URL.ADM_TPLPATH;?>js/run.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(document).pjax('[data-pjax]a,a[data-pjax]', '#pjax-content');
	$(document).on('pjax:send', function() { console.log("Appears in console just after call is started"); });
	$(document).on('pjax:complete', function() { console.log("Do something once PJAX call is finished"); });

	<?php if ($this->config->item('tips')||strtolower($this->config->item('tips'))=="on") {?>var tooltips = $( "[title]" ).tooltip({
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
	    });<?php };?>


  });
</script>
</body>
</html>
