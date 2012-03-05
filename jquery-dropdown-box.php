<?php
/**
 * Plugin Name: JQuery Expanding Box
 * Author: Hit Reach
 * Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=F6XX6EJH9BPVE
 * Version: 1
 * Description: A shortcode to add an expandable box to show and hide the selected content on a post or page
 * Author URI: http://www.hitreach.co.uk
 **/
 
#############################################################################################
# Copyright 2012  Hit Reach  (email : info@hitreach.co.uk)
#
# This program is free software; you can redistribute it and/or modify it under the terms
# of the GNU General Public License, version 2, as published by the Free Software Foundation.
# 
# This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
# without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
# See the GNU General Public License for more details.
# 
# You should have received a copy of the GNU General Public License along with this program; 
# if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston,
# MA  02110-1301  USA
#################################################################################

add_shortcode( "dropdown_box_toggle_all", array( "JQEB", "dropdown_box_all_shortcode" ) );
add_shortcode( "dropdown_box", array( "JQEB", "dropdown_box_shortcode" ) );
add_action( "wp_head", array( "JQEB", "enqueue_styles" ), 0 );

class JQEB{	
 	/**
	 * Parse the single dropdown shortcode to show one dropdown
	 * @since: version 1
	 * @args: a = attributes used to localise the text - Array
	 * @args: c = content used inside the dropdown - String
	 * @version: 1
	**/
	function dropdown_box_shortcode($a, $c=""){
		self::enqueue_scripts();
		$a = wp_parse_args($a, array("expand_text" => "More Information", "show_less" => "hide", "show_more"=>"more", "start"=>"show"));
		$t = sprintf("<div class='inner_text %s'>%s</div>", $a['start'], $c);
		$l = sprintf("<a href='#' class='showmore'><span class='view_modifier %s' data-show='%s' data-hide='%s'>%s</span> %s</a>",$a['start'],$a['show_more'], $a['show_less'],self::get_view_modifier($a['start'],$a['show_less'],$a['show_more']), $a["expand_text"]);
		return sprintf("<div class='dropdown_box'>%s%s</div>",$l,$t);
	}
	
	/**
	 * Parse the showall shortcode to show the view all and hide all links
	 * @since: version 1
	 * @args: a = attributes used to localise the text - Array
	 * @version: 1
	**/
 	function dropdown_box_all_shortcode($a){
		self::enqueue_scripts();
		$a = wp_parse_args($a, array("hide" => "Hide All", "show" => "Show All", "separator"=>""));
		return sprintf("<p class='dropdown_box_all'><a href='#' class='showall'>%s</a> %s <a href='#' class='hideall'>%s</a></p>", $a["show"],$a["separator"], $a["hide"]);
	}
	
	/**
	 * Output the styles needed for the dropdown to the head
	 * @since: version 1
	 * @args: none
	 * @version: 1
	**/
	function enqueue_styles(){
		wp_enqueue_style( 'JQEB_style', self::plugin_url().'jquery-dropdown-box.css', false, 1, "all" );
	}
	
	/**
	 * return the text to be used for the dropdown
	 * @since: version 1
	 * @args: s = starting state - values(show/hide)
	 * @args: l = less text - String
	 * @args: m = more text - String
	 * @version: 1
	**/
 	private function get_view_modifier($s,$l,$m){
		if($s == "show"){return $l;}
		else{return $m;}
	}
	
 	/**
	 * Returns the url of the plugin folder for including items
	 * @since: version 1
	 * @args: none
	 * @version: 1
	**/
	private function plugin_url(){
		return WP_PLUGIN_URL.'/'.plugin_basename( dirname(__FILE__) ).'/';
	}
 
 	/**
	 * Enqueue dropdown scripts for the dropdown functionality
	 * @since: version 1
	 * @args: none
	 * @version: 1
	**/
	private function enqueue_scripts(){
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'JQEB_script', self::plugin_url().'jquery.dropdown.min.js', array("jquery"), 1, true );
	}
}
?>