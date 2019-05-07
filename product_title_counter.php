<?php
/*
Plugin Name: Product title counter
Plugin URI: https://golfclubs4cash.co.uk
Description: Adding a char counter to the woocommerce new product title feild
Author: Luke Rhys Melvin
Version: 1.1.5
*/
/* Start Adding Functions Below this Line */
function title_count_js(){
      echo '<script>jQuery(document).ready(function(){
          jQuery("#poststuff #titlediv").after("<div style=\"position:absolute;top:0px;right:5px;color:#666; padding-top:45px;\"><small>Title length: </small><input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"title_counter\" readonly=\"\" style=\"background:#fff;\"> <small>character(s).</small></div>");
          jQuery("#title_counter").val(jQuery("#title").val().length);
          jQuery("#title").keyup( function() {
              jQuery("#title_counter").val(jQuery("#title").val().length);
              });
});</script>';
}
add_action( 'admin_head-post.php', 'title_count_js');
add_action( 'admin_head-post-new.php', 'title_count_js')
/* Stop Adding Functions Below this Line */
?>