<?php
/*
Plugin Name: BLB ScriptTagger
Plugin URI: https://www.blueletterbible.org/webtools/BLB_ScriptTagger.cfm
Description: Transform Bible references into links with hover tooltip.
Author: Blue Letter Bible
Version: 1.08
Author URI: https://www.blueletterbible.org/
*/

function BLB_ScriptTaggerFooter($unused)
{
	$blb_Translation = get_option('blb_Translation');
	$blb_HyperLinks = get_option('blb_HyperLinks');
	$blb_HideTanslationAbbrev = get_option('blb_HideTanslationAbbrev');
	$blb_TargetNewWindow = get_option('blb_TargetNewWindow');
	$blb_Style = get_option('blb_Style');
	$blb_noAbbrv = get_option('blb_noAbbrv');
	$blb_noSearchClassNames = get_option('blb_noSearchClassNames');
	$blb_noSearchTagNames = get_option('blb_noSearchTagNames');

	// Generate the script code to be printed on the page
?>
	<script src="https://www.blueletterbible.org/assets/scripts/blbToolTip/BLB_ScriptTagger-min.js" type="text/javascript"></script>
	<script type="text/javascript">
		BLB.Tagger.wp_ver ='1.07';
		BLB.Tagger.Translation = '<?php echo $blb_Translation;?>';
		BLB.Tagger.HyperLinks = '<?php echo $blb_HyperLinks;?>';  // 'all', 'none', 'hover'
		BLB.Tagger.HideTanslationAbbrev = <?php echo $blb_HideTanslationAbbrev;?>;
		BLB.Tagger.TargetNewWindow = <?php echo $blb_TargetNewWindow;?>;
		BLB.Tagger.Style = '<?php echo $blb_Style;?>';  // 'line' or 'par'
		BLB.Tagger.ExcludeAbbrv = [<?php echo $blb_noAbbrv;?>];
		BLB.Tagger.NoSearchClassNames = '<?php echo $blb_noSearchClassNames;?>';
		BLB.Tagger.NoSearchTagNames = '<?php echo $blb_noSearchTagNames;?>';
	</script>
<?php
}

// Register the user preferences when the plugin is enabled
function BLB_ScriptTaggerSetOptions()
{
	add_option('blb_Translation', 'NKJV', 'Which Bible translation to use');
	add_option('blb_HyperLinks', 'all', 'Replace existing hyperlinks');
	add_option('blb_HideTanslationAbbrev', 'false', 'Show/Hide alterante translation abbreviation.');
	add_option('blb_TargetNewWindow', 'false', 'Target links to a new window?');
	add_option('blb_Style', 'par', 'Scripture reference format.');
	add_option('blb_noAbbrv', '', 'Scripture reference format.');
	add_option('blb_noSearchClassNames', '', 'Avoid tagging elements with these classes.');
	add_option('blb_noSearchTagNames', '', 'Avoid tagging these elements.');
}

// Remove the user preferences when the plugin is disabled
function BLB_ScriptTaggerUnsetOptions()
{
	delete_option('blb_Translation');
	delete_option('blb_HyperLinks');
	delete_option('blb_HideTanslationAbbrev');
	delete_option('blb_TargetNewWindow');
	delete_option('blb_Style');
	delete_option('blb_noAbbrv');
	delete_option('blb_noSearchClassNames');
	delete_option('blb_noSearchTagNames');
}

// The options page
function BLB_ScriptTaggerAdminOptions()
{
	?>
<div class="wrap">
  <h2>BLB ScriptTagger Settings</h2>
  <?php
	if($_REQUEST['submit'])	{ BLB_ScriptTaggerUpdateOptions();	}
	BLB_ScriptTaggerOptions();
	?>
</div>
<?php
}

// Update any preferences the user has changed
function BLB_ScriptTaggerUpdateOptions()
{
	$changed = false;
	$blb_Translation = get_option('blb_Translation');
	$blb_HyperLinks = get_option('blb_HyperLinks');
	$blb_HideTanslationAbbrev = get_option('blb_HideTanslationAbbrev');
	$blb_TargetNewWindow = get_option('blb_TargetNewWindow');
	$blb_Style = get_option('blb_Style');
	$blb_noAbbrv = get_option('blb_noAbbrv');
	$blb_noSearchClassNames = get_option('blb_noSearchClassNames');
	$blb_noSearchTagNames = get_option('blb_noSearchTagNames');

	if($_REQUEST['blb_Translation'] != $blb_Translation)
	{
		update_option('blb_Translation', $_REQUEST['blb_Translation']);
		$changed = true;
	}

	if($_REQUEST['blb_HyperLinks'] != $blb_HyperLinks)
	{
		update_option('blb_HyperLinks', $_REQUEST['blb_HyperLinks']);
		$changed = true;
	}

	if($_REQUEST['blb_HideTanslationAbbrev'] != $blb_HideTanslationAbbrev)
	{
		update_option('blb_HideTanslationAbbrev', $_REQUEST['blb_HideTanslationAbbrev']);
		$changed = true;
	}

	if($_REQUEST['blb_TargetNewWindow'] != $blb_TargetNewWindow)
	{
		update_option('blb_TargetNewWindow', $_REQUEST['blb_TargetNewWindow']);
		$changed = true;
	}

	if($_REQUEST['blb_Style'] != $blb_Style)
	{
		update_option('blb_Style', $_REQUEST['blb_Style']);
		$changed = true;
	}

	if($_REQUEST['blb_noAbbrv'] != $blb_noAbbrv)
	{
		update_option('blb_noAbbrv', $_REQUEST['blb_noAbbrv']);
		$changed = true;
	}

	if($_REQUEST['blb_noSearchClassNames'] != $blb_noSearchClassNames)
	{
		update_option('blb_noSearchClassNames', $_REQUEST['blb_noSearchClassNames']);
		$changed = true;
	}

	if($_REQUEST['blb_noSearchTagNames'] != $blb_noSearchTagNames)
	{
		update_option('blb_noSearchTagNames', $_REQUEST['blb_noSearchTagNames']);
		$changed = true;
	}

	if($changed)
	{
	?>
<div id="message" class="updated fade">
  <p>Settings Saved.</p>
</div>
<?php
	}
}

// Print the options page
function BLB_ScriptTaggerOptions()
{
	$blb_Translation = get_option('blb_Translation');
	$blb_HyperLinks = get_option('blb_HyperLinks');
	$blb_HideTanslationAbbrev = get_option('blb_HideTanslationAbbrev');
	$blb_TargetNewWindow = get_option('blb_TargetNewWindow');
	$blb_Style = get_option('blb_Style');
	$blb_noAbbrv = get_option('blb_noAbbrv');
	$blb_noSearchClassNames = get_option('blb_noSearchClassNames');
	$blb_noSearchTagNames = get_option('blb_noSearchTagNames');
	?>
<form method="post">
	<table class="form-table">
		<tbody>
			<tr style="vertical-align:top">
				<td colspan="2">
					The plugin settings provided here offer a simple way to customize the
					BLB ScriptTagger Bible reference tagging script from the <a href="http://www.blueletterbible.org/" target="new">Blue Letter Bible</a>.
					It automatically modifies your site to run the script each time a page loads.
					The BLB ScriptTagger identifies scripture references to Bible verses you post
					and turns the references into links to the verse on
					<a href="http://www.blueletterbible.org/" target="new">BlueLetterBible.org</a>.
					Hovering over a link displays a tooltip containing the text of the reference.
					In doing so users don't need to leave the page on your site to view the verse.
					Clicking on embedded links from the tooltip opens the specified verse on the Blue Letter Bible's web site.
				</td>
			</tr>
			<tr style="vertical-align:top">
				<th scope="row">Default Bible Translation:</th>
				<td>
					<select name="blb_Translation">
						<option value="KJV" <?php if ($blb_Translation == 'KJV') { print 'selected="SELECTED"'; } ?>>KJV - King James Version</option>
						<option value="NKJV" <?php if ($blb_Translation == 'NKJV') { print 'selected="SELECTED"'; } ?>>NKJV - New King James Version</option>
						<option value="NLT" <?php if ($blb_Translation == 'NLT') { print 'selected="SELECTED"'; } ?>>NLT - New Living Translation</option>
						<option value="NIV" <?php if ($blb_Translation == 'NIV') { print 'selected="SELECTED"'; } ?>>NIV - New International Version</option>
						<option value="ESV" <?php if ($blb_Translation == 'ESV') { print 'selected="SELECTED"'; } ?>>ESV - English Standard Version</option>
						<option value="CSB" <?php if ($blb_Translation == 'CSB') { print 'selected="SELECTED"'; } ?>>CSB - Christian Standard Bible</option>
						<option value="NASB" <?php if ($blb_Translation == 'NASB') { print 'selected="SELECTED"'; } ?>>NASB - New American Standard Bible</option>
						<option value="NET" <?php if ($blb_Translation == 'NET') { print 'selected="SELECTED"'; } ?>>NET - New English Translation</option>
						<option value="RSV" <?php if ($blb_Translation == 'RSV') { print 'selected="SELECTED"'; } ?>>RSV - Revised Standard Version</option>
						<option value="ASV" <?php if ($blb_Translation == 'ASV') { print 'selected="SELECTED"'; } ?>>ASV - American Standard Version</option>
						<option value="YLT" <?php if ($blb_Translation == 'YLT') { print 'selected="SELECTED"'; } ?>>YLT - Young's Literal Translation </option>
						<option value="DBY" <?php if ($blb_Translation == 'DBY') { print 'selected="SELECTED"'; } ?>>DBY - Darby Translation</option>
						<option value="WEB" <?php if ($blb_Translation == 'WEB') { print 'selected="SELECTED"'; } ?>>WEB - Webster's Bible</option>
						<option value="HNV" <?php if ($blb_Translation == 'HNV') { print 'selected="SELECTED"'; } ?>>HNV - Hebrew Names Version</option>
						<option value="RVR60" <?php if ($blb_Translation == 'RVR60') { print 'selected="SELECTED"'; } ?>>RVR60 - Reina-Valera 1960</option>
						<option value="VUL" <?php if ($blb_Translation == 'VUL') { print 'selected="SELECTED"'; } ?>>VUL - Latin Vulgate</option>
						<option value="WLC" <?php if ($blb_Translation == 'WLC') { print 'selected="SELECTED"'; } ?>>WLC - Westminster Leningrad Codex</option>
						<option value="LXX" <?php if ($blb_Translation == 'LXX') { print 'selected="SELECTED"'; } ?>>LXX - Septuagint</option>
						<option value="mGNT" <?php if ($blb_Translation == 'mGNT') { print 'selected="SELECTED"'; } ?>>mGNT - Morphological Greek New Testament</option>
						<option value="TR" <?php if ($blb_Translation == 'TR') { print 'selected="SELECTED"'; } ?>>TR - Textus Receptus</option>
					</select>
				</td>
			</tr>
			<tr style="vertical-align:middle">
			<th scope="row">Replace Existing Links:</th>
				<td>
					<input type="radio" name="blb_HyperLinks" value="all" id="blb_HyperLinks0" <?php if ($blb_HyperLinks == 'all') { print 'checked="CHECKED"'; } ?>>
					<label for="blb_HyperLinks0">Replace all existing links and create tooltips.</label>
					<br/>
					<input type="radio" name="blb_HyperLinks" value="hover" id="blb_HyperLinks1" <?php if ($blb_HyperLinks == 'hover') { print 'checked="CHECKED"'; } ?>>
					<label for="blb_HyperLinks1">Leave existing links, but create the tooltips.</label>
					<br/>
					<input type="radio" name="blb_HyperLinks" value="none" id="blb_HyperLinks2" <?php if ($blb_HyperLinks == 'none') { print 'checked="CHECKED"'; } ?>>
					<label for="blb_HyperLinks2">Don't change anything about the existing links.</label>
				</td>
			</tr>
			<tr style="vertical-align:top">
				<th scope="row">Alternate Translation:</th>
				<td>By default the tagger will utilize the default translation selected above.  However, you can force an alternate translation with each specific Scripture reference by one of the following methods:<br />
					<ol style="font-size:1.0em;">
						<li> Include the translation abbreviation after the Scripture reference, e.g., John 3:16 ESV.</li>
						<li> Wrap the reference with a special anchor tag &lt;a rel="ESV"&gt;John 3:16&lt;/a&gt;.</li>
					</ol>
					This option will determine whether you want the translation to be noted after the reference.<br />
					<input name="blb_HideTanslationAbbrev" value="false" id="blb_HideTanslationAbbrev0" style="vertical-align: middle" type="radio" <?php if ($blb_HideTanslationAbbrev == 'false') { print 'checked="CHECKED"'; } ?>>
					<label for="blb_HideTanslationAbbrev0">Show translation abbreviation</label>
					<br/>
					<input name="blb_HideTanslationAbbrev" value="true" id="blb_HideTanslationAbbrev1" style="vertical-align: middle" type="radio" <?php if ($blb_HideTanslationAbbrev == 'true') { print 'checked="CHECKED"'; } ?>>
					<label for="blb_HideTanslationAbbrev1">Hide translation abbreviation</label>
				</td>
			</tr>
			<tr style="vertical-align:middle">
				<th scope="row">Links Open In:</th>
				<td><input name="blb_TargetNewWindow" value="false" id="blb_TargetNewWindow0" style="vertical-align: middle" type="radio" <?php if ($blb_TargetNewWindow == 'false') { print 'checked="CHECKED"'; } ?>>
					<label for="blb_TargetNewWindow0">Same window</label>
					<br/>
					<input name="blb_TargetNewWindow" value="true" id="blb_TargetNewWindow1" style="vertical-align: middle" type="radio" <?php if ($blb_TargetNewWindow == 'true') { print 'checked="CHECKED"'; } ?>>
					<label for="blb_TargetNewWindow1">New window</label>
				</td>
			</tr>
			<tr style="vertical-align:middle">
				<th scope="row">Scripture Text Format:</th>
				<td><input name="blb_Style" value="par" id="blb_Style0" style="vertical-align: middle" type="radio" <?php if ($blb_Style == 'par') { print 'checked="CHECKED"'; } ?>>
					<label for="blb_Style0">Paragraph</label>
					<br/>
					<input name="blb_Style" value="line" id="blb_Style1" style="vertical-align: middle" type="radio" <?php if ($blb_Style == 'line') { print 'checked="CHECKED"'; } ?>>
					<label for="blb_Style1">Line by line</label>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="padding-left:0;"><strong>List of HTML elements to ignore when searching for scripture references. (Comma or space separated)</strong><br />
				<input style="width:600px;" type="text" name="blb_noSearchTagNames" <?php echo 'value="' . $blb_noSearchTagNames . '"'?> /></td>
			</tr>
			<tr>
				<td colspan="2" style="padding-left:0;"><strong>List of CSS classes on HTML elements to ignore when searching for scripture references. (Comma or space separated)</strong><br />
				<input style="width:600px;" type="text" name="blb_noSearchClassNames" <?php echo 'value="' . $blb_noSearchClassNames . '"'?> /></td>
			</tr>
		</tbody>
	</table>
	<p class="submit">
		<input type="submit" name="submit" value="Save Changes" />
	</p>
</form>

<table class="form-table">
	<tbody>
		<tr style="vertical-align:top"><td colspan="2"><B>Using your mouse hover over the following examples</B></td><tr>
		<tr style="vertical-align:top">
			<td align="right">Rom 6:1</td>
			<td align="left">Simple scripture reference</td>
		</tr>
		<tr style="vertical-align:top">
			<td align="right">Rom 8</td>
			<td align="left">Referencing an entire chapter</td>
		</tr>
		<tr style="vertical-align:top">
			<td align="right">Gal 2:20 ESV</td>
			<td align="left">Reference overriding the default translation with ESV translation</td>
		</tr>
		<tr style="vertical-align:top">
			<td align="right">Gal 2:10-21 NLT</td>
			<td align="left">Reference range and overriding the default translation with NLT translation</td>
		</tr>
		<tr style="vertical-align:top">
			<td align="right"><a rel="NKJV">Eph 1:1-4</a></td>
			<td>Enclosing a reference with an anchor tag such a follows:<br />
				&lt;a rel=&quot;NKJV&quot;&gt;Eph 1:1-4&lt;/a&gt;</td>
		</tr>
		<tr style="vertical-align:top">
			<td colspan="2">
				If you have found this plugin to be an asset to your site, please consider how you can get involved in <a href="http://www.blueletterbible.org/contribute.cfm" target="new">supporting</a> the Blue Letter Bible.
			</td>
		</tr>
	</tbody>
</table>
<script src="http://www.blueletterbible.org/scripts/blbToolTip/BLB_ScriptTagger-min.js" type="text/javascript"></script>
<script type="text/javascript">
	BLB.Tagger.Translation = "NKJV";	//
	BLB.Tagger.HyperLinks = 'all';  	// 'all', 'none', 'hover'
	BLB.Tagger.HideTanslationAbbrev = false;		// true, false  true will hide the first instance of abbrev
	BLB.Tagger.TargetNewWindow = true;	// true, false
	BLB.Tagger.Style = 'par';  // 'line' or 'par'
</script>
<?php
}

// Add the options page to the menu
function BLB_ScriptTaggerAddMenu()
{
	add_options_page('BLB ScriptTagger', 'BLB ScriptTagger', 'manage_options', __FILE__, 'BLB_ScriptTaggerAdminOptions');
}

add_action('admin_menu', 'BLB_ScriptTaggerAddMenu');

register_activation_hook(__FILE__, 'BLB_ScriptTaggerSetOptions');
register_deactivation_hook(__FILE__, 'BLB_ScriptTaggerUnsetOptions');

// Run when the footer is generated
add_action('wp_footer', 'BLB_ScriptTaggerFooter');

?>
