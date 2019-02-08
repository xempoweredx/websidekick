(function( $ ) {
	'use strict';

	$( 'body' ).addClass( 'sidekick-dashboard' );

	// Admin Menu
	$( 'li.menu-top' ).addClass( 'py-0' );
	$( 'li.menu-top a.menu-top' ).addClass( 'py-2' );
	$( '#adminmenu .wp-submenu a' ).addClass( 'py-2' );

	$( 'table.wp-list-table' ).addClass( 'sidekick-post-list table-sm table-striped' ).wrap( '<div class="card mw-100 w-100 p-3"></div>' ).removeClass( 'wp-list-table widefat striped fixed' );
	$( '.tablenav.top .button' ).addClass( 'btn btn-secondary' );

	// Post List Pagination
	$( 'input.current-page' ).addClass( 'w-auto d-inline-block' );
	$( '.displaying-num' ).addClass( 'd-inline-block' );
	$( '.pagination-links' ).wrapInner( '<div class="pagination"></div>' ).addClass( 'd-inline-block' );
	$( '.prev-page' ).addClass( 'page-link' ).wrap( '<li class="page-item"></li>' ).removeClass( 'prev-page' );
	$( '.paging-input' ).addClass( 'page-item px-2' );
	$( '.next-page' ).addClass( 'page-link' ).wrap( '<li class="page-item"></li>' ).removeClass( 'next-page' );
	$( '.tablenav-pages-navspan' ).addClass( 'd-none' );
	$( 'td.colspanchange' ).attr('colspan',7);

})( jQuery );
