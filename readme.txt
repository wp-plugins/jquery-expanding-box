=== JQuery Expanding Box ===
Contributors: Hit Reach
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=F6XX6EJH9BPVE
Tags: Jquery, drop, down, dropdown, Hit, Reach, Hit Reach, box, expand, expanding, sliding, hidden, expandable, collapse, collapsing, collapsible 
Requires at least: 3
Tested up to: 3.5
Stable tag: 2
License: GPLv2

This plugin creates a shortcode to add an expandable box to show and hide the selected content on a post or page with customisable show and hide links

== Description ==

This plugin creates a shortcode to add an expandable box to show and hide the selected content on a post or page with customisable show and hide links.

This is the perfect solution for content such as FAQs and Spoilers, where you may not want to show the content to begin with, but prompt the reader to show the content instead.

== Installation ==

1. Download the "JQuery Expanding Box" plugin
1. Create a folder in the WordPress plugins directory (default wp/content/plugins)
1. Extract the contents of the plugin into the new folder
1. Activate the plugin via the WordPress admin system.

== Usage ==

The plugin comes with two shortcodes for use inside a posts and pages; these are: [dropdown_box] and [dropdown_box_toggle_all].

*dropdown_box* is used to add a single dropdown box to your content, it supports 4 attributes:

* *expand_text* - This is the text which is shown AFTER the verb to show or hide, for example "More Information"
* *show_more* - This is the verb shown before the expand text to prompt a user to see more content, for example "Show"
* *show_less* - This is the verb shown before the expand text to prompt a user to see less content, for example "Hide"
* *start* - This sets the default state, and has 2 usable values, "Show" to start the box visable, and "Hide" to show the box hidden
* *single_open* - This controls whether this dropdown is part of the single opening group (only one dropdown in the group can be open at a time)

Your content is added inside the shortcode, for example [dropdown_box]This is my content inside the dropdown box[/dropdown_box]

The content insider the box is open to standard WordPress formatting.

*dropdown_box_toggle_all* is used to add links to show/hide all drop down boxes on the page, this shortcode can be used in more than one place on the page and has 3 attributes

* *hide* - This is the text used to prompt a hide all, for example "Hide All"
* *show* - This is the text used to prompt a show all, for example "Show All"
* *Separator* - This is the separator between the show and hide links, for example "|"

This shortcode is self closing, so can be written as [dropdown_box_toggle_all /] or [dropdown_box_toggle_all].

This plugin also adds a small CSS file (352 bytes) to wp_head to control the styling.

As of version 2, the plugin contains a menu for setting default options for the plugin and the attributes used in the plugin support HTML.

== Usage Examples ==

A simple usage example to get you going.

**dropdown_box_toggle_all** [dropdown_box_toggle_all hide="Hide All" show="Show All" separator="|" /]

**dropdown_box**  [dropdown_box expand_text="Information" show_more="More" show_less="Less" start="hide"]This is my content and it will start hidden[/dropdown_box]

== Frequently Asked Questions ==

= What are the plugin requirements to work? =
The basic plugin requirements are the JQuery script and the plugins CSS file

= What browsers has this been tested in? =
The plugin has been tested and is working in the following Windows browsers:

 * Mozilla Firefox Version 17 - although support is indicated from version 4
 * Microsoft Internet Explorer 9
 * Microsoft Internet Explorer 8
 * Microsoft Internet Explorer 8 (compatibility mode)
 * Microsoft Internet Explorer 10 (simulation testing)
 * Microsoft Internet Explorer 7 (simulation testing)
 * Microsoft Internet Explorer 6 (simulation testing)
 * Opera 11.52
 * Google Chrome 23.0.1271.95 m
 * Apple Safari 5.1.7
 
The plugin was tested and does not work in  

 * Microsoft Internet Explorer 5 (simulation testing)

Have you tested it in another browser? [Tell Us](mailto:jamie.fraser@hitreach.com?subject=Jquery%20Dropdown%20Plugin&body=Hello%0A%0AI%20have%20tested%20the%20JQuery%20Dropdown%20plugin%20and%20it%20%5Bdoes%7Cdoes%20not%5D%20work.%0A%0AI%20use%20the%20browser%3A%0AI%20use%20the%20operating%20system%3A "Tell Us")
 
= I like your work, can i donate? =
YES! you can donate using the plugin's donation link or via a [paypal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=F6XX6EJH9BPVE) payment to admin@hitreach.co.uk.  Thank you in advance!

== Screenshots ==

1. A sample code output of the plugin and expand all text

== Changelog == 
= 1 =
 * Inital Release
= 2 =
 * Added in html support for shortcode attributes
 * Added in default options menu page
 * Tested and working for WordPress 3.5
 * Ability to have one dropdown at a time open (suggestion by Christian Frohn)

== Upgrade Notice ==
* No Entries