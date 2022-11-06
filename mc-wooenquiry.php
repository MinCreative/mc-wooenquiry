<?php
/*
Plugin Name: MinCreative Product Enquiry
Plugin URI: https://mincreative.com.au
Description: Plugin to create a Product Enquiry feature
Version: 0.1
Author: Min Huang
Author URI:https://mincreative.com.au
Textdomain: mc-wooenquiry
License: GPLv2
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function mc_woo_new_product_tab( $tabs ) {

	$name_for_new_tab = "enquiry_form";
	$title_for_new_tab = "Questions about this Product?";
  
	$tabs[$name_for_new_tab] = array(
	  'title' => __( $title_for_new_tab, 'woocommerce' ),
	  'priority' => 50,
	  'callback' => 'mc_woo_new_product_enquiry_form'
	);
	
	return $tabs;
  
  }
  add_filter( 'woocommerce_product_tabs', 'mc_woo_new_product_tab', 98 );
  
  function mc_woo_new_product_enquiry_form() {
	echo "Hello World!";
  }
  ?>