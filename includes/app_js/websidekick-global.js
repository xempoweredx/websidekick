jQuery(document).ready(function( $ ) {

	/****************************
	 	MAIN DOM READY FUNCTIONS
	****************************/

 	// Global Tooltip initialization
	$('[data-toggle="tooltip"]').tooltip()

	// Global Popover initialization
	$('[data-toggle="popover"]').popover()

	// Prevent empty links which use jQuery from jumping to top of page
    $('.sidekickMetabox a.empty-link').click(function(e)
		{ e.preventDefault(); 
	});

	// Add body class to identify a user who is not an admin
	$( 'body:not(.role-administrator)' ).addClass( 'user-not-admin' );


	// Input Masks - Global Options 
	$.jMaskGlobals = {
	  	// maskElements: 'input,td,span,div', (default)
	  	maskElements: 'input', // Only watch for input elements (speed things up a little)
	  	dataMaskAttr: '*[data-mask]',
	  	dataMask: true,
	  	watchInterval: 300,
	  	watchInputs: true,
	  	watchDataMask: false,
	  	byPassKeys: [9, 16, 17, 18, 36, 37, 38, 39, 40, 91],
	  	translation: {
		    '0': {pattern: /\d/},
		    '9': {pattern: /\d/, optional: true},
		    '#': {pattern: /\d/, recursive: true},
		    'A': {pattern: /[a-zA-Z0-9]/},
		    'S': {pattern: /[a-zA-Z]/}
	  	}
	};

	// Input Mask - Phone Inputs
	$('.sidekickMetabox .cmb-type-sidekick-tel input').mask('(000) 000-0000', {placeholder: "(___) ___-____"});

	$( '.sidekickMetabox table:not(.table)' ).addClass( 'table' );
	$( '.sidekickMetabox .cmb-multicheck-toggle' ).addClass( 'btn rounded-10 btn-sm btn-outline-secondary' ).removeClass( 'button-secondary' );

		/** Add active class to selected option **/
	$( '.sidekickMetabox .radio-buttons-list.cmb2-list label.btn > input:checked' ).parent().addClass( 'active' );
	$( '.sidekickMetabox .cmb-type-sidekick-switch-buttons .cmb2-list label.btn > input:checked' ).parent().addClass( 'active' );

	$( '.sidekickMetabox textarea:not(.form-control)' ).addClass( 'form-control' );
	$( '.sidekickMetabox select:not(.custom-select)' ).addClass( 'custom-select' );
	$( '.sidekickMetabox .cmb-type-sidekick-file .cmb2-upload-file:not(.form-control)' ).addClass( 'form-control' );
	
	//$( '.ninjaMetabox .cmb-type-sidekick-file input:not(.custom-file-input)' ).addClass( 'custom-file-input' );
	//$( '.ninjaMetabox .cmb-type-sidekick-file label:not(.custom-file-labe)' ).addClass( 'custom-file-labe' );

	$( '.sidekickMetabox .cmb-type-sidekick-text-datetime-timestamp-timezone .cmb2-datepicker' ).addClass( 'form-control sidekick-datepicker' ).removeClass( 'cmb2-text-small' );
	$( '.sidekickMetabox .cmb-type-sidekick-text-datetime-timestamp-timezone .cmb2-timepicker' ).addClass( 'form-control sidekick-timepicker' ).removeClass( 'cmb2-text-small' );

	$( '.cmb-type-term-select input[type="text"]' ).addClass( 'form-control' );

	//$( '.sidekickMetabox .postbox.cmb-row.cmb-repeatable-grouping' ).addClass( 'd-block' );

});