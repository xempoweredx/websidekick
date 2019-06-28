=== Plugin Name ===
Contributors: xempoweredx
Donate link: https://github.com/xempoweredx
Tags: admin
Requires at least: 3.0.1
Tested up to: 5.2.2
Stable tag: 1.1.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Wordpress Admin panel adding Bootstrap 4, CMB2, Fontawesome 5, and more for extra functionality and flexability.

== Description ==

This plugin enqueues Bootstrap 4.x.x, FontAwesome 5.x.x, and replace WP default jQuery version with jquery.min 3.3.1 for use in the WP admin area. Easily edit/upgrade versions & CDN links via WP Admin Dashboard settings. It uses CMB2 for easy custom metabox creation (including a few custom fields such as text imputs with icons, BS4 selects, toggles, switches, and more). 

It also has a few additional plugins integrated into the core for more powerful functionality without having to hunt down and install a ton of different plugins. Simply toggle them on or off in "Sidekick / Main Settings"
- Integrated Open Source Plugins/Scripts -
- jQuery
- Bootstrap
- FontAwesome
- CMB2
- CMB2 Conditionals
- CMB2 Field Post Search Ajax
- CMB2 Taxonomy
- CMB2 Term Select
- jQuery Input Mask
- Add-to-any
- Wp Maintenance Mode
- Blueletter Bible Script Tagger
- Blueletter Bible Text Search Tool
- List Taxonomy Widget
- jQuery Replace Text


If this plugin is used in conjunction with the "websidekick-starter-theme" (https://github.com/xempoweredx/websidekick-starter-theme), you can set a lot of the main theme colors in the plugin Main Settings. Sidekick Starter Theme is a child theme developed for the awesome Understrap WP Theme.

== Installation ==

1. Download or clone latest stable release. 
2. Upload `websidekick.php` to the `/wp-content/plugins/` directory. File structure should look like '/plugins/websidekick/websidekick.php'.
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Navigate to Sidekick Options > Sidekick Options. Default values should be in the inputs. Scroll to the bottom and click "Save". That enqueues all necessary files.

== Changelog ==

= 1.1.5 =
* Added Bootstrap 4.3.1 "Sidekick version" which contains all standard BS4 styles with a few added text and color classes for more functionality.
* Added "BLB_ScriptTagger" plugin to core Sidekick settings for simple Bible referrence hover-over popups.
* Added "List Taxonomy Widget" plugin to core Sidekick settings.
* Upgraded CMB2 to version 2.5.1.
* Created CPT, TAX, & METABOX templates compatible with WP 5.0 Geutenburg editor.
* Updated additional color palettes stylesheets.
* Cleaned up a lot of old code and unused files.

= 1.1.4 =
* Added "AD-to-any" plugin to core Sidekick settings.
* Added "WP Maintenance" plugin to core Sidekick settings.
* Added "Widget Shortcode" plugin to core Sidekick settings.

= 1.1.3 =
* Added ability to change jQuery, Bootstrap, and Fontawesome file locations and versions from WP admin panel.

= 1.1.2 =
* Bug fixes.

= 1.1.1 =
* Remove FA5 config file.
* Preparing for WP 5.0.

= 1.1.0 =
* Added custom fields for core files CDN information (URL, Integrity, Version), making core file updates much easier.
* Added functions filter to properly output integrity attribute.
* Removed core files directories to decrease plugin size.
* Added Custom Taxonomy List widget.
* Remove old, unused files.
* Updated md_color.css

= 1.0.9 =
* Fix styling issues with "Ninja" inputs and fields.
* Lots of modifications and additions to CMB2.
* Update to FontAwesome Pro 5.3.1.
* Update and add to Examples.php.

= 1.0.8 =
* Major updates to CMB2.
* Update to Bootstrap 4.1.3
* Update to FontAwesome Pro 2.0

= 1.0.7 =
* Name and file parent change from StrapNinja.

= 1.0.6 =
* Back to some self hosted files for more control.
* Added Gitauth key option.

= 1.0.5 =
* Move to Google Fonts CDN.
* Remove unused files and directories.

= 1.0.4 =
* Move BS4, FA5, jQuery to CDNs.

= 1.0.3 =
* Another TEST release.

= 1.0.2 =
* Test Release ONLY.

= 1.0.1 =
* Update to main plugin file and Readme.

= 1.0.0 =
* Installed core files.
* Installed Bootstrap 4.0.1.
* Installed FontAwesome 5.0.10.
* Installed CMB2.