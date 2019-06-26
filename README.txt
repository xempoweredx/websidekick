=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://github.com/xempoweredx
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

This is the long description.  No limit, and you can use Markdown (as well as in the following sections).

For backwards compatibility, if this section is missing, the full length of the short description will be used, and
Markdown parsed.

A few notes about the sections above:

*   "Contributors" is a comma separated list of wp.org/wp-plugins.org usernames
*   "Tags" is a comma separated list of tags that apply to the plugin
*   "Requires at least" is the lowest version that the plugin will work on
*   "Tested up to" is the highest version that you've *successfully used to test the plugin*. Note that it might work on
higher versions... this is just the highest one you've verified.
*   Stable tag should indicate the Subversion "tag" of the latest stable version, or "trunk," if you use `/trunk/` for
stable.

    Note that the `readme.txt` of the stable tag is the one that is considered the defining one for the plugin, so
if the `/trunk/readme.txt` file says that the stable tag is `4.3`, then it is `/tags/4.3/readme.txt` that'll be used
for displaying information about the plugin.  In this situation, the only thing considered from the trunk `readme.txt`
is the stable tag pointer.  Thus, if you develop in trunk, you can update the trunk `readme.txt` to reflect changes in
your in-development version, without having that information incorrectly disclosed about the current stable version
that lacks those changes -- as long as the trunk's `readme.txt` points to the correct stable tag.

    If no stable tag is provided, it is assumed that trunk is stable, but you should specify "trunk" if that's where
you put the stable version, in order to eliminate any doubt.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `websidekick.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

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