jQuery(document).ready(function( $ ) {

// Add classes to form elements for BS4 compatibility
	$( '.ninjaMetabox table:not(.table)' ).addClass( 'table' );
	//$( 'input[type="text"]:not(.form-control)' ).addClass( 'form-control' );
	//$( 'input[type="email"]:not(.form-control)' ).addClass( 'form-control' );
	//$( 'input[type="search"]:not(.form-control)' ).addClass( 'form-control' );

	$( '.cmb-multicheck-toggle' ).addClass( 'btn rounded-10 btn-sm btn-outline-secondary' ).removeClass( 'button-secondary' );

	//$( '.cmb-type-radio-inline .custom-control.custom-radio' ).addClass( 'custom-control-inline' );

	/** Radio Buttons Sizes **/
	//$( '.cmb-type-radio-buttons-sm .btn-group' ).addClass( 'btn-group-sm' );
	//$( '.cmb-type-radio-buttons-lg .btn-group' ).addClass( 'btn-group-lg' );

	/** Switch Buttons Sizes **/
	//$( '.cmb-type-switch-buttons-sm .btn-group' ).addClass( 'btn-group-sm' );
	//$( '.cmb-type-switch-buttons-lg .btn-group' ).addClass( 'btn-group-lg' );

	/** Add active class to selected option **/
	$( '.radio-buttons-list.cmb2-list label.btn > input:checked' ).parent().addClass( 'active' );
	$( '.cmb-type-ninja-switch-buttons .cmb2-list label.btn > input:checked' ).parent().addClass( 'active' );

	//$( '.cmb-type-multicheck-inline .custom-control.custom-checkbox' ).addClass( 'custom-control-inline' );
	
	$( '.ninjaMetabox textarea:not(.form-control)' ).addClass( 'form-control' );
	$( '.ninjaMetabox select:not(.custom-select)' ).addClass( 'custom-select' );

//WP Defaults
	//$( '.aligncenter' ).addClass( 'mx-auto' );
	//$( '.alignleft' ).addClass( 'float-left' );
	//$( 'img.alignleft' ).addClass( 'mt-3 mr-3 mb-3' );
	//$( 'figure.alignleft' ).addClass( 'mt-3 mr-3 mb-3' );
	//$( '.alignright' ).addClass( 'float-right' );
	//$( 'img.alignright' ).addClass( 'mt-3 ml-3 mb-3' );
	//$( 'figure.alignright' ).addClass( 'mt-3 ml-3 mb-3' );


});