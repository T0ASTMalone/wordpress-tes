<?php
/*
Plugin Name: Add Text To Header
*/
 
// Hook the 'wp_footer' action hook, add the function named 'mfp_Add_Text' to it
add_action("wp_head", "add_Text_Header");
 
// Define 'mfp_Add_Text'
function add_Text_Header()
{
  echo "<p style='color: black;'> ".gethostname()." After the header is loaded, my text is added!</p>";
}