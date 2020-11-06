<?php
//Do not inclide the opening PHP tag.

function search_form_rem() {

 //Put the page ID inside the array(); - as '1', '2', '3', etc.
  $page_not = array();

	$page_exclude[] = 'page-id-' . $page_not;

	if( $page_exclude ) {
    	return;
	}

  echo '<div class="section-title line-style"><h3 class="title">Advanced Search</h3></div>&nbsp;';

  //Put the URL in results_page="#" where to redirect the results by creating a page with permalink /result.
  echo do_shortcode( '[rem_search_property
          results_page="#"
          fields_to_show="property_city,property_type,property_purpose,property_price,property_bathrooms,property_bedrooms,property_area,property_lotarea"
          columns="3"]' ) . '<hr style="color:#fff0;">';

}
add_action( 'genesis_before_content', 'search_form_rem' );
