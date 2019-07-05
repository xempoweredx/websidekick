# Websidekick WP Admin Plugin

**Contributors**: xempoweredx<br/>
**Donate link**: https://github.com/xempoweredx<br/>
**Tags**: admin<br/>
**Requires at least**: 3.0.1<br/>
**Tested up to**: 5.2.2<br/>
**Stable tag**: 1.1.6 BETA<br/>
**License**: GPLv2 or later<br/>
**License** URI: http://www.gnu.org/licenses/gpl-2.0.html

Wordpress Admin panel adding Bootstrap 4, CMB2, Fontawesome 5, and more for extra functionality and flexability.

## Heads Up

Be sure to use the "Master" branch for the latest stable release.

## Description

This plugin enqueues Bootstrap 4.x.x, FontAwesome 5.x.x, and replace WP default jQuery version with jquery.min 3.3.1 for use in the WP admin area. Easily edit/upgrade versions & CDN links via WP Admin Dashboard settings. It uses CMB2 for easy custom metabox creation (including a few custom fields such as text imputs with icons, BS4 selects, toggles, switches, and more). 

This is a plugin I developed to work in conjuction with a WP theme I developed, **Websidekick Starter Theme**, (https://github.com/xempoweredx/websidekick-starter-theme) a child theme for Understrap WP Theme. It should work fine for standard WP installs without this theme, but some of the options and settings are geared specifically for that theme.

## Integrated Open-source Plugins

It also has a few additional plugins integrated into the core for more powerful functionality without having to hunt down and install a ton of different plugins. 

#### Plugins For Admin Area

- **jQuery 3.3.1** (https://code.jquery.com/)
    + Easily edit/upgrade release via text-box input. Just change CDN link reference, hash, and version text.
- **Bootstrap 4.3.1** (https://getbootstrap.com/docs/4.3/components/alerts/)
    + Easily edit/upgrade release via text-box input. Just change CDN link reference, hash, and version text.
- **FontAwesome Free Latest version** (https://fontawesome.com/start)
    + Easily upgrade to FA Pro, if you have that subscription, and input the new reference info via text-box input. Just change CDN link reference, hash, and version text.
- **CMB2** (https://github.com/CMB2/CMB2/wiki). CMB2 is a developer's toolkit for building metaboxes, custom fields, and forms for WordPress that will blow your mind. Easily manage meta for posts, terms, users, comments, or create custom option pages.
- **CMB2 Conditionals** (https://github.com/jcchavezs/cmb2-conditionals). Allows developers to relate fields so one of them could only appear when one other have an specific value or when is not empty.
- **CMB2 Field Post Search Ajax** (https://github.com/alexis-magina/cmb2-field-post-search-ajax). Custom field for CMB2 to attach posts to each others.
- **CMB2 Taxonomy** (https://github.com/jcchavezs/cmb2-taxonomy). Create custom metaboxes and inputs for custom terms.
- **CMB2 Term Select** (https://github.com/CMB2/cmb2-term-select). Special CMB2 Field that allows users to define an autocomplete text field for terms.
- **jQuery Input Mask** (https://github.com/igorescobar/jQuery-Mask-Plugin). A jQuery Plugin to make masks on form fields and HTML elements.
- **Add-to-any** (https://wordpress.org/plugins/add-to-any/). The AddToAny Share Buttons plugin for WordPress increases traffic & engagement by helping people share your posts and pages to any service.
    + Enable/Disable via toggle switch
- **Wp Maintenance Mode** (https://github.com/Designmodocom/WP-Maintenance-Mode). Adds a splash page to your site that lets visitors know your site is down for maintenance. It's perfect for a coming soon page.
    + Enable/Disable via toggle switch
- **Blueletter Bible Script Tagger** (https://www.blueletterbible.org/webtools/BLB_ScriptTagger.cfm). The "BLB ScriptTagger" is a free tool that you can integrate into your website or blog to automatically create a hover-over display for all Bible references on the page. The hover-over reveals the verse text and provides a link for further study at the Blue Letter Bible website.
    + Enable/Disable via toggle switch
- **List Taxonomy Widget** (https://wordpress.org/plugins/list-custom-taxonomy-widget/). The List Custom Taxonomy Widget is a quick and easy way to display custom taxonomies. Simply choose the taxonomy name you want to display from an auto-populated list.
- **jQuery Replace Text** (http://benalman.com/projects/jquery-replacetext-plugin/).

#### Plugins to work with Websidekick Starter Theme

- **Blueletter Bible Text Search Tool** (https://www.blueletterbible.org/webtools/BLB_websearch.cfm). Allows your website's users to search the Bible for passages of Scripture, for individual words or combinations of words, for phrases, and even by Strong's numbers.
    + Enable/Disable via toggle switch

## Plugin Features

#### Plugin Features For Admin Area

- **Custom Post Types Templates** Easy Custom Post Type & Custom Taxonomy creation. Navigate to websidekick/admin/cpt, duplicate CPT_TEMPLATE.php, rename it to CPT_Mynewcpt.php (I usually use the registered post type i.e CPT_Books.php). Then open the new file in your text editor and replace "Mycpt" plural and singular with your new CPT name, list the custom taxonomies it will use, save and upload.
- **Custom Taxonomy Templates** Custom Taxonomies follow the same process websidekick/admin/tax.
- **Custom Metabox Templates** 
- Sidekick **custom input types** use **BS4 form styling** in place of default WP or CMB2 styles. They also add a lot of style and functionality to backend forms and inputs, which is helpful if you are developing a site for a client who will access the Dashboard. They just look better.
    + There is a metabox template and an entire page of examples for the custom input types. They use a mixture of Bootstrap 4 and FontAwesome.
- Replaces default WP-Admin jQuery version with v3.3.1. Easily edit/upgrade release via text-box input.
- Bootstrap 4.1.3 framework available for Admin area. Easily edit/upgrade release via text-box input.
- Latest Fontawesome Free release available for Admin area. Easily upgrade to FA Pro, if you have that subscription, and input the new reference info via text-box input.
- Adds text-box input option for script security hashes.

#### Plugin Features For Websidekick Starter Theme

If this plugin is used in conjunction with the "websidekick-starter-theme" (https://github.com/xempoweredx/websidekick-starter-theme), the following options will apply to the theme:

- Replaces default WP Frontend jQuery version with v3.3.1. Easily edit/upgrade release via text-box input.
- Bootstrap 4.1.3 framework available for frontend. Easily edit/upgrade release via text-box input.
- Latest Fontawesome Free release available for frontend. Easily upgrade to FA Pro, if you have that subscription, and input the new reference info via text-box input.
- Adds text-box input option for script security hashes.
- Select mobile menu style (3 options).
- Enable/Disable BLB Text Search.

**Theme Color Selector Options**

- Main Body Text
- Primary Link
- Primary Link Hover
- Menu Link
- Menu BG
- Menu Link Hover
- Menu Link Hover BG
- Mobile Menu BG

## Installation

1. Download or clone latest stable release. 
2. Upload `websidekick.php` to the `/wp-content/plugins/` directory. File structure should look like '/plugins/websidekick/websidekick.php'.
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Navigate to Sidekick Options > Sidekick Options. Default values should be in the inputs. Scroll to the bottom and click "Save". That enqueues all necessary files.

## Changelog

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