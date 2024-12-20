=== jQuery Updater ===
Contributors: Ramoonus
Donate link: http://www.ramoonus.nl/donate/
Tags: jquery, update, jquery ui, javascript, jq
Requires at least: 3.8
Tested up to: 4.4
Stable tag: 2.2.0.1
Text Domain: jquery-updater

This plugin updates jQuery to the latest stable version on your website.

== Description ==
This plugin updates [jQuery](http://jquery.com/) to the latest official stable version, which is most likely not available within the latest stable release of WordPress.
Since jQuery 2.2 was used in this plugin, making jQuery 1.x obsolete, [jQuery Migrate](http://jquery.com/download/#jquery-migrate-plugin) is also included.

No files are replaced, therefore deactivation of this plugin returns your site to it`s original state.

*Warning*

If you are not familiar with beta testing, bugfixing, javascript or running bleeding edge software it`s recommended.
I will not provide help on JavaScript and jQuery!

*Reporting problems*

Please post bug reports and request for help on [WordPress.org Support Forums](https://wordpress.org/support/plugin/jquery-updater). I will only provide help on issues caused by the plugin, not on JavaScript and jQuery related matters!
Please report feature requests and code changes on [GitHub Issues page](https://github.com/Ramoonus/jQuery-Updater/issues)

If you run into any bugs, turning this plugin off will fully deactivate everything.

*Work in Progress*

* Options screen to enable/disable
* Option to choose a specific jQuery version
* Automatic cache flushing

For more information on the development visit the plugins [GitHub](https://github.com/Ramoonus/jQuery-Updater/issues)

== Installation ==
1. Upload `jquery-updater/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Sit back and enjoy

== Frequently Asked Questions ==
1. Q: Do I need this plugin if I`m running the latest version of WordPress on my site?
A: No

2. Q: Is this plugin compatible with PHP 5.2 / 5.3 / 5.4 or 7?
A: Yes

3. Q: This plugin breaks my site! How do I fix it?
A: Using jQuery version 2 could break your site. See the warning on the homepage of this plugin.

== Changelog ==

Updated Readme

== 2.2.0.1 ==
* Updated jQuery Migrate to 1.3.1
* Removed unused files

= 2.2.0 =
* Made the core translation ready
* [Updated jQuery to 2.2.0](http://blog.jquery.com/2016/01/08/jquery-2-2-and-1-12-released/)
* Replaced comments with PHPDoc
* Removed some unused files

= 2.1.4 =
* Updated jQuery to 2.1.4
* Updated Readme

= 2.1.3 =
* Updated jQuery to 2.1.3
* Fixed a bug with jQuery Migrate not properly loading
* Updated minimum WordPress version to 3.9
* Removed some unit testing scripts

= 2.1.1 =
* Updated jQuery to 2.1.1

= 2.1.0 = 
* Updated jQuery to 2.1.0

= 2.0.3 = 
* Updated jQuery to 2.0.3
* Updated [jQuery Migrate](http://github.com/jquery/jquery-migrate/) to 1.2.1
* Improved documentation with FAQ and removed screenshots. (who wants to see screenshots of javascript?)
* Added jQuery 1.x as fallback
* Fallback: Updated jQuery to 1.10.2
* Since WordPress  3.6 this plugin cannot break the dashboard.

= 2.0.0.1 / 2.0.0.2 =
* Added [jQuery Migrate](http://github.com/jquery/jquery-migrate/)

= 2.0.0 = 
jQuery 2.0 has the same API as jQuery 1.9, but does not support Internet Explorer 6, 7, or 8. All the notes in the jQuery 1.9 Upgrade Guide apply here as well. Since IE 6/7/8 are still relatively common, we recommend using the 1.x version unless you are certain no IE 6/7/8 users are visiting the site.

* Updated jQuery to 2.0.0 [releasenotes](http://blog.jquery.com/2013/04/18/jquery-2-0-released/) 

= 1.9.1 = 
* Updated jQuery to 1.9.1 [releasenotes](http://blog.jquery.com/2013/02/04/jquery-1-9-1-released/) 

= 1.9.0 = 
* Updated jQuery to 1.9.0

= 1.8.3 = 
* Updated jQuery to 1.8.3
* Improved code styling and documentation

= 1.8.2 = 
* Updated jQuery to 1.8.2
* Fixed a bug in the Dashboard
* Minor code improvement

= 1.8.1 = 
* Updated jQuery to 1.8.1

= 1.8.0 = 
* Updated jQuery to 1.8.0  [releasenotes](http://blog.jquery.com/2012/08/09/jquery-1-8-released/) 

= 1.7.2 = 
* Updated jQuery to 1.7.2
* Readme fix

= 1.7.1 =
* Updated jQuery to 1.7.1 [releasenotes](http://blog.jquery.com/2011/11/21/jquery-1-7-1-released/) 
* Minor code optimalisation 
* Readme update
 
= 1.7.0 =
* Updated jQuery to 1.7 [releasenotes](http://blog.jquery.com/2011/11/03/jquery-1-7-released/) 
* Readme update
* Minor code optimalisation

= 1.6.4 =
* Updated jQuery to 1.6.4 [releasenotes](http://blog.jquery.com/2011/09/12/jquery-1-6-4-released/)

= 1.6.3 =
* Updated jQuery to 1.6.3

= 1.6.2.1 =
* Updated jQuery to 1.6.3 rc 1 (minified)

= 1.6.2 =
* Updated jQuery to 1.6.2 (minified)

= 1.6.1.1.1 =
* Promise: less numbers when 1.6.2 comes out
* Updated jQuery to 1.6.2 rc 1 (
* Warning beta release: unminified, un-conflicted

= 1.6.1.1 =
* Adds jQuery.noConflict(); to the javascript file for compatibility 

= 1.6.1 =
* Updated jQuery to 1.6.1

= 1.6.0.1 =
* jQuery 1.6.1 rc 1 (fixes a known WP bug untill 3.2 is released)

= 1.6.0 = 
* Equals 1.1.2 but has the same number as jQuery 

= 1.1.2 =
* jQuery 1.6.0

= 1.1.1 =
* Loads the javascript from the plugin directory instead of googles server. 

= 1.1.0 =
* Added jQuery 1.5.2.min to the javascript directory
* Removed jQuery UI to a seperate plugin

= 1.0.1 =
* Updated jQuery UI to 1.8.12 (on Googles CDN)
* Fixed version 1..0 (should be 1.0)

= 1.0 =
* First version, uses jQuery 1.5.2 on Googles CDN

== Upgrade Notice == 
= 2.1.4 =
* Updated jQuery to 2.1.4