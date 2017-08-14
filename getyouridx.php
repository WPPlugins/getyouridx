<?php

/*
Plugin Name: GetYourIDX
Plugin URI: http://www.getyouridx.com/plugins/wordpress/#
Description: GetYourIDX integration plugin for wordpress
Author: Paul Trippett
Version: 1.5
Author URI: http://www.getyouridx.com/
*/



/*  Copyright 2009  GetYourIDX (email : info@getyouridx.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



/**
 * @see IDXSearch
 */
include_once 'idxsearch.php';


/**
 *
 */
function getyouridx_draw($atts) {
	extract(shortcode_atts(array(
		'template' => 'large'
	), $atts));
	
	if (isset($_GET['getyouridx_postback'])) {
		if (isset($_GET['mlsnumber'])) {
			$result = getyouridx_get($_GET['mlsnumber']);
			if (file_exists(TEMPLATEPATH + '/getyouridx.results_single.php')) {
				include TEMPLATEPATH + '/getyouridx.results_single.php';
			} else {
				include 'default.results_single.php';
			}
		} else {
			try {
				$results = getyouridx_search();
				if (file_exists(TEMPLATEPATH + '/getyouridx.results_list.php')) {
					include TEMPLATEPATH + '/getyouridx.results_list.php';
				} else {
					include 'default.results_list.php';
				}
			} catch (IDXException $e) {
				if (file_exists(TEMPLATEPATH + '/getyouridx.error.php')) {
					include TEMPLATEPATH + '/getyouridx.error.php';
				} else {
					include 'default.error.php';
				}
			}
		}
	}
	
	ob_start();
	switch ($template) {
		case "large":
			if (file_exists(TEMPLATEPATH + '/getyouridx.form_large.php')) {
				include TEMPLATEPATH + '/getyouridx.form_large.php';
			} else {
				include 'default.form_large.php';
			}
			break;
		default:
			if (file_exists(TEMPLATEPATH + '/getyouridx.form_small.php')) {
				include TEMPLATEPATH + '/getyouridx.form_small.php';
			} else {
				include 'default.form_small.php';
			}
			break;
	}
	$return = ob_get_contents();
	ob_end_clean();
	
	return $return;
	
}
add_shortcode('idx', 'getyouridx_draw');


/**
 *
 */
function getyouridx_get($mlsid) {
	
	$idx_search = new IDXSearch(get_option('getyouridx_api_key'));
	
	$mls_details = split(':', $mlsid);
	$idx_search->add_filter(new IDXFilter_MLSNumber($mls_details[1]));
	$idx_search->add_filter(new IDXFilter_Format('xml'));
	$idx_search->add_filter(new IDXFilter_In('mls_id', array($mls_details[0])));

	return $idx_search->result();
	
}


/**
 *
 */
function getyouridx_search() {
	
	$idx_search = new IDXSearch(get_option('getyouridx_api_key'));
	
	// Property Type
	//
	if (isset($_GET['idx_propertytype']) & $_GET['idx_propertytype'] > 0) {
		$idx_search->add_filter(new IDXFilter_Equals('type', $_GET['idx_propertytype']));
	}
	
	// Price High to Low Handler
	//
	if (isset($_GET['idx_pricerange_low']) && isset($_GET['idx_pricerange_high']) && $_GET['idx_pricerange_low'] > 0 && $_GET['idx_pricerange_high'] > 0) {
		$idx_search->add_filter(new IDXFilter_Range('asking_price', $_GET['idx_pricerange_low'], $_GET['idx_pricerange_high']));
		
	} elseif (isset($_GET['idx_pricerange_low']) && $_GET['idx_pricerange_low'] > 0) {
		$idx_search->add_filter(new IDXFilter_GreaterThan('asking_price', $_GET['idx_pricerange_low']));
		
	} elseif (isset($_GET['idx_pricerange_high']) && $_GET['idx_pricerange_high'] > 0) {
		$idx_search->add_filter(new IDXFilter_LessThan('asking_price', $_GET['idx_pricerange_high']));
		
	}
	
	// Bedrooms
	//
	if (isset($_GET['idx_bedrooms']) && $_GET['idx_bedrooms'] > 0 && $_GET['idx_bedrooms'] < 4) {
		$idx_search->add_filter(new IDXFilter_Equals('bedrooms', $_GET['idx_bedrooms']));
		
	} else if (isset($_GET['idx_bedrooms']) && $_GET['idx_bedrooms'] == 4) {
		$idx_search->add_filter(new IDXFilter_GreaterThan('bedrooms', $_GET['idx_bedrooms']));
		
	}
	
	// Bathrooms
	//
	if (isset($_GET['idx_bathrooms']) && $_GET['idx_bathrooms'] > 0 && $_GET['idx_bathrooms'] < 4) {
		$idx_search->add_filter(new IDXFilter_Equals('bathrooms', $_GET['idx_bathrooms']));
		
	} else if (isset($_GET['idx_bathrooms']) && $_GET['idx_bathrooms'] == 4) {
		$idx_search->add_filter(new IDXFilter_GreaterThan('bathrooms', $_GET['idx_bathrooms']));
		
	}
	
	// City Search
	if (isset($_GET['idx_city'])) {
		$idx_search->add_filter(new IDXFilter_In('city', $_GET['idx_city']));
	}
	
	// Limit the results
	//
	if (isset($_GET['idx_results'])) {
		$idx_search->add_filter(new IDXFilter_Limit($_GET['idx_results']));
	}

	// Short Sale
	//
	if (isset($_GET['idx_shortsale'])) {
		$idx_search->add_filter(new IDXFilter_Equals('short_sale', 'True'));
	}
	
	// Has Virtual Tours
	//
	if (isset($_GET['idx_vtours'])) {
		$idx_search->add_filter(new IDXFilter_Equals('has_vtour', '1'));
	}
	
	// Paging
	//
	if (isset($_GET['offset'])) {
		$idx_search->add_filter(new IDXFilter_Offset($_GET['offset']));
	}
	
	// Sort
	//
	if (isset($_GET['idx_sort'])) {
		$idx_search->add_filter(new IDXFilter_Sort('asking_price', $_GET['idx_sort']));
	}
	
	// Add MLS
	//
	$idx_search->add_filter(new IDXFilter_Format('xml'));
	$idx_search->add_filter(new IDXFilter_Equals('active', true));
	$idx_search->add_filter(new IDXFilter_In('mls_id', split(',', get_option('getyouridx_mls_ids'))));
	
	// Return the result
	return $idx_search->result();
	
}
	

/**
 *
 */
function getyouridx_css() {
	do_action('su_head');
	echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/css/prettyPhoto.css" />' . "\n";
	echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/getyouridx.css" />' . "\n";
	echo '<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=' . get_option('gmaps_api_key') . '" type="text/javascript"></script>';
	echo '<script src="' . get_bloginfo('wpurl') . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/js/jquery.prettyPhoto.js" type="text/javascript"></script>';
}
add_action('wp_head', 'getyouridx_css', 1);


/**
 *
 */
function getyouridx_init() {
	global $getyouridx_api_key;

	if ( empty($getyouridx_api_key) )
		$getyouridx_api_key = get_option('getyouridx_api_key');

	add_action('admin_menu', 'getyouridx_config_page');
	
	register_sidebar_widget(__('GetYourIDX'), 'getyouridx_widget');
	
}
add_action('init', 'getyouridx_init');


/**
 *
 */
function string_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}


/**
 *
 */
function getyouridx_config_page() {
	if ( function_exists('add_submenu_page') )
		add_submenu_page('plugins.php', __('GetYourIDX'), __('GetYourIDX'), 'manage_options', 'getyouridx-key-config', 'getyouridx_conf');

}


/**
 *
 */
function getyouridx_conf() {
	global $getyouridx_api_key, $gmaps_api_key;
	
	$saved_options = FALSE;
	$saved_cache   = FALSE;

	if ( isset($_POST['submit']) ) {
		if ( function_exists('current_user_can') && !current_user_can('manage_options') )
			die(__('Cheatin&#8217; uh?'));
		
		update_option('getyouridx_api_key', $_POST['idxkey']);
		update_option('gmaps_api_key', $_POST['gmapskey']);
		update_option('getyouridx_mls_ids', $_POST['mlsid']);
		
		$saved_options = TRUE;
	}
	
	if ( isset($_POST['cachecities']) ) {
		
		$getyouridx_cityfetcher = new IDXCity(get_option('getyouridx_api_key'));
		
		$citycache = array();
		$cities = $getyouridx_cityfetcher->getByMLS(get_option('getyouridx_mls_ids'));
		foreach ($cities->Results->item as $item) {
			$city = (string) $item->city;
			if (!empty($city)) $citycache[] = $city;
		}
		
		update_option('getyouridx_citycache', $citycache);
		
		$saved_cache = TRUE;
		
	}

?>
<?php if ( $saved_options ) : ?>
	<div id="message" class="updated fade"><p><strong><?php _e('Options saved.') ?></strong></p></div>
<?php endif; ?>
<?php if ( $saved_cache ) : ?>
	<div id="message" class="updated fade"><p><strong><?php _e('City Cache has been Updated') ?></strong></p></div>
<?php endif; ?>
<div class="wrap">
	<h2><?php _e('GetYourIDX Configuration'); ?></h2>
	<div class="narrow">
		<p>Configuration information for the <a href="http://www.getyouridx.com/">GetYourIDX.com</a> wordpress plugin. For Help and support please visit the <a href="http://www.getyouridx.com/help/">GetYourIDX Help</a> site</p>
		<form action="" method="post" id="getyouridx-conf" style="margin: auto; ">
			
			<h3><label for="key"><?php _e('GetYourIDX API Key'); ?></label></h3>
			<p><input id="key" name="idxkey" type="text" size="30" value="<?php echo get_option('getyouridx_api_key'); ?>" style="font-family: 'Courier New', Courier, mono; font-size: 1.5em;" /> (<?php _e('<a href="http://www.getyouridx.com/blog/api-key">What is this?</a>'); ?>)</p>
			
			<h3><label for="mlsids"><?php _e('MLS IDs (Comma Seperated)'); ?></label></h3>
			<p><input id="mlsids" name="mlsid" type="text" size="30" value="<?php echo get_option('getyouridx_mls_ids'); ?>" style="font-family: 'Courier New', Courier, mono; font-size: 1.5em;" /> (<?php _e('<a href="http://faq.wordpress.com/2005/10/19/api-key/">What is this?</a>'); ?>)</p>
			
			<h3><label for="mapkey"><?php _e('Google Maps API Key'); ?></label></h3>
			<p><input id="mapkey" name="gmapskey" type="text" size="30" value="<?php echo get_option('gmaps_api_key'); ?>" style="font-family: 'Courier New', Courier, mono; font-size: 1.5em;" /> (<?php _e('<a href="http://faq.wordpress.com/2005/10/19/api-key/">What is this?</a>'); ?>)</p>
			
			<p class="submit">
				<input type="submit" name="submit" value="<?php _e('Update options &raquo;'); ?>" />
				<input type="submit" name="cachecities" value="<?php _e('Refresh City Cache &raquo;'); ?>" />
			</p>
		</form>
	</div>
</div>
<?php
}

function getyouridx_widget($args) {
	extract($args);
	echo $before_widget;
	echo $before_title;?>IDX Search<?php echo $after_title;
	if (file_exists(TEMPLATEPATH + '/form_small.php')) {
		include TEMPLATEPATH + '/form_small.php';
	} else {
		include 'default.form_small.php';
	}
	echo $after_widget;
 }