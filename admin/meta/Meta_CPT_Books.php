<?php 

$prefix = '_sidekick_book_';

/*******************************************************************************************************

		GENERAL INFO METABOX

********************************************************************************************************/


$cn_books_meta = new_cmb2_box( array(
	'id'            => $prefix . 'book_info',
	'title'         => esc_html__( 'Book Information', 'websidekick' ),
	'object_types'  => array( 'books' ), // Post type
	'cmb_styles' => false, 
	'__block_editor_compatible_meta_box' => true,
	'__back_compat_meta_box' => true,
) );

	$cn_books_meta->add_field( array(
	    'id'				=> $prefix . 'hidden_begin',
	    'type'				=> 'title',
	    'before_row'		=> 
		'<div class="sidekickMetabox container-fluid">
			<div class="form-row">',
	) );

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Subtitle', 'websidekick' ),
		'id'    		=> $prefix . 'subtitle',
		'type' 			=> 'sidekick_text',
		'icon_block'	=> 'left',  // options: 'left', 'right'
		'fa_icon'		=> 'fal fa-book',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
		'attributes' 	=> array(
			'placeholder'	=> 'Optional',
		),
	) );

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Book Author(s)', 'websidekick' ),
		'id'			=> $prefix . 'author_select',
		'desc'			=> esc_html__('Start typing. If term does not exist it will be created.', 'websidekick' ),
		'type'			=> 'term_select',
		'taxonomy'	 	=> 'book-authors',
		'remove_default' => 'true',
		'apply_term' 	=> true, // If set to false, saves the term to meta instead of setting term on the object.
		'icon_block'	=> 'left',  // options: 'left', 'right'
		'fa_icon'		=> 'fal fa-book-user',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'attributes'	=> array(
			'placeholder'	=> esc_html__('Comma separate multiples', 'websidekick' ),
			// 	'data-min-length' => 2, // Override minimum length
			// 	'data-delay'      => 100, // Override delay
		),
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	));

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Author Last', 'websidekick' ),
		'id'			=> $prefix . 'author_last',
		'type'			=> 'sidekick_text',
		'icon_block'	=> 'left',  // options: 'left', 'right'
		'fa_icon'		=> 'fal fa-font-case',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'attributes' 	=> array(
			'placeholder'	=> 'First 3 Letters for sorting',
		),
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Book Narrator(s)', 'websidekick' ),
		'id'			=> $prefix . 'narrator_select',
		'desc'			=> esc_html__('Start typing. If term does not exist it will be created.', 'websidekick' ),
		'type'			=> 'term_select',
		'taxonomy'	 	=> 'book-narrators',
		'remove_default' => 'true',
		'apply_term' 	=> true, // If set to false, saves the term to meta instead of setting term on the object.
		'icon_block'	=> 'left',  // options: 'left', 'right'
		'fa_icon'		=> 'fal fa-book-reader',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'attributes'	=> array(
			'placeholder'	=> esc_html__('Comma separate multiples', 'websidekick' ),
			// 	'data-min-length' => 2, // Override minimum length
			// 	'data-delay'      => 100, // Override delay
		),
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	));

	/*$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Edition Formats', 'websidekick' ),
		'id'       		=> $prefix . 'format_select',
		//'desc'			=> esc_html__('Start typing. If term does not exist it will be created.', 'websidekick' ),
		'type'			=> 'taxonomy_multicheck_inline',
		'taxonomy'	 	=> 'book-formats',
		'remove_default' => 'true',
		'apply_term' 	=> true, // If set to false, saves the term to meta instead of setting term on the object.
		'classes'		=> array( 'col-12'),
	) );*/

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Book Genres/Shelves', 'websidekick' ),
		'id'       		=> $prefix . 'genre_select',
		'desc'			=> esc_html__('Start typing. If term does not exist it will be created.', 'websidekick' ),
		'type'			=> 'term_select',
		'taxonomy' 		=> 'book-genres',
		'remove_default' => 'true',
		'apply_term' 	=> true, // If set to false, saves the term to meta instead of setting term on the object.
		'icon_block'	=> 'left',  // options: 'left', 'right'
		'fa_icon'		=> 'fal fa-books',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'attributes'	=> array(
			'placeholder'	=> esc_html__('Comma separate multiples', 'websidekick' ),
			// 	'data-min-length' => 2, // Override minimum length
			// 	'data-delay'      => 100, // Override delay
		),
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Book Series', 'websidekick' ),
		'id'       		=> $prefix . 'series_select',
		'desc'			=> esc_html__('Start typing. If term does not exist it will be created.', 'websidekick' ),
		'type'			=> 'term_select',
		'taxonomy' 		=> 'book-series',
		'remove_default' => 'true',
		'apply_term' 	=> true, // If set to false, saves the term to meta instead of setting term on the object.
		'icon_block'	=> 'left',  // options: 'left', 'right'
		'fa_icon'		=> 'fal fa-book-spells',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'attributes'	=> array(
			'placeholder'	=> esc_html__('Optional', 'websidekick' ),
			// 	'data-min-length' => 2, // Override minimum length
			// 	'data-delay'      => 100, // Override delay
		),
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Series Number', 'websidekick' ),
		'id'			=> $prefix . 'series_number',
		'type'			=> 'sidekick_text',
		'icon_block'	=> 'left',  // options: 'left', 'right'
		'fa_icon'		=> 'fal fa-hashtag',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'attributes'	=> array(
			'placeholder'	=> esc_html__('Optional', 'websidekick' ),
		),
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Edition Publisher(s)', 'websidekick' ),
		'id'			=> $prefix . 'pub_select',
		'desc'			=> esc_html__('Start typing. If term does not exist it will be created.', 'websidekick' ),
		'type'			=> 'term_select',
		'taxonomy'	 	=> 'book-publishers',
		'remove_default' => 'true',
		'apply_term' 	=> true, // If set to false, saves the term to meta instead of setting term on the object.
		'icon_block'	=> 'left',  // options: 'left', 'right'
		'fa_icon'		=> 'fal fa-building',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'attributes'	=> array(
			'placeholder'	=> esc_html__('Comma separate multiples', 'websidekick' ),
			// 	'data-min-length' => 2, // Override minimum length
			// 	'data-delay'      => 100, // Override delay
		),
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	));

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Progress', 'websidekick' ),
		'id'    		=> $prefix . 'status',
		'type'  		=> 'sidekick_select',
		'options'			=> array(
	    	'current'		=> __('Currently Reading', 'websidekick'),
	    	'finished'		=> __('Finished', 'websidekick'),
	    	'dnf'			=> __('DNF', 'websidekick'),
	    ),
	    'icon_block'	=> 'left',  // options: 'left', 'right'
		'fa_icon'		=> 'fal fa-bookmark',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
	) );

		$cn_books_meta->add_field( array(
			'name'			=> esc_html__( 'Started', 'websidekick' ),
			'id'			=> $prefix . 'started',
			'type' 		 	=> 'sidekick_text_date',
			'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-calendar',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'attributes' => array(
				'data-conditional-id'    => $prefix . 'status',
				'data-conditional-value' => wp_json_encode( array( 'current', 'finished', 'dnf' ) ),
			),
			'classes'		=> array( 'col-6', 'col-md-4', 'col-lg-3' ),
		) );

		$cn_books_meta->add_field( array(
			'name'			=> esc_html__( 'Finished', 'websidekick' ),
			'id'			=> $prefix . 'finished',
			'type' 		 	=> 'sidekick_text_date',
			'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-calendar-alt',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'attributes' => array(
				'data-conditional-id'    => $prefix . 'status',
				'data-conditional-value' => wp_json_encode( array( 'current', 'finished' ) ),
			),
			'classes'		=> array( 'col-6', 'col-md-4', 'col-lg-3' ),
		) );

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Overall Rating', 'websidekick' ),
		'id'			=> $prefix . 'rating_overall',
		'type'			=> 'sidekick_select',
		'options'			=> array(
	    	'zero'			=> __('0 Stars', 'websidekick'),
	    	'half'			=> __('0.5 Stars', 'websidekick'),
	    	'one'			=> __('1.0 Star', 'websidekick'),
	    	'onehalf'		=> __('1.5 Stars', 'websidekick'),
	    	'two'			=> __('2.0 Stars', 'websidekick'),
	    	'twohalf'		=> __('2.5 Stars', 'websidekick'),
	    	'three'			=> __('3.0 Stars', 'websidekick'),
	    	'threehalf'		=> __('3.5 Stars', 'websidekick'),
	    	'four'			=> __('4.0 Stars', 'websidekick'),
	    	'fourhalf'		=> __('4.5 Stars', 'websidekick'),
	    	'five'			=> __('5.0 Stars', 'websidekick'),
	    ),
	    'icon_block'	=> 'left',  // options: 'left', 'right'
		'fa_icon'		=> 'fal fa-star',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3', 'col-xl-2' ),
	) );

	$cn_books_meta->add_field( array(
		'name'			=> esc_html__( 'Maturity Level', 'websidekick' ),
		'id'    		=> $prefix . 'maturity',
		'type'  		=> 'sidekick_select',
		'options'			=> array(
	    	'everyone'		=> __('Everyone', 'websidekick'),
	    	'teen'			=> __('Teen', 'websidekick'),
	    	'adult'			=> __('Adult', 'websidekick'),
	    ),
	    'icon_block'	=> 'left',  // options: 'left', 'right'
	    'fa_icon'		=> 'fal fa-users',  // full fontawesome markup: 'fal fa-truck'
		'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
		'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
		'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3', 'col-xl-2' ),
	) );

	$cn_books_meta->add_field( array(
	    'id'			=> $prefix . 'hidden_end_1',
	    'type'			=> 'title',
	    'after_row'		=> 
						'</div><!-- END .form-row -->
					</div><!-- END .container -->',
	) );

/**************************************************************************
* 					EDITION META INFORMATION  							*
**************************************************************************/

	$cn_books_edition_group = $cn_books_meta->add_field( array(
		'id'          => $prefix . 'edition_group',
		'type'        => 'group',
		'description' => esc_html__( 'Edition Information', 'websidekick' ),
		'repeatable'  => true, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'       => esc_html__( 'Edition {#}', 'websidekick' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'        => esc_html__( 'Add Another Edition', 'websidekick' ),
			'remove_button'     => esc_html__( 'Remove Edition', 'websidekick' ),
			'sortable'		=> true,
			'closed'         	=> false, // true to have the groups closed by default
			'remove_confirm' 	=> esc_html__( 'Are you sure you want to remove this edition?', 'websidekick' ), // Performs confirmation before removing group.
		),
		'before_group'     => '<div class="sidekickMetabox container-fluid">',
		'after_group'      => '</div>',
	) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
		    'id'				=> 'hidden_begin',
		    'type'				=> 'title',
		    'before_row'		=> '<div class="form-row">',
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'Eidtion Title', 'websidekick' ),
			'id'    		=> 'title',
			'type' 			=> 'sidekick_text',
			'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-book',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
			'attributes' 	=> array(
				'placeholder'	=> 'Unique Title - Optional',
			),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'Edition Format', 'websidekick' ),
			'id'    		=> 'format',
			'type'  		=> 'sidekick_select',
			'options'			=> array(
		    	'audible'		=> __('Audible', 'websidekick'),
		    	'mp3'			=> __('MP3', 'websidekick'),
		    	'kindle'		=> __('Kindle', 'websidekick'),
		    	'paperback'		=> __('Paperback', 'websidekick'),
		    	'hardcover'		=> __('Hardcover', 'websidekick'),
		    	'ebook'			=> __('eBook', 'websidekick'),
		    	'pdf'			=> __('PDF', 'websidekick'),
		    ),
		    'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-book-alt',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'Pages/Length', 'websidekick' ),
			'id'			=> 'pages',
			'type' 		 	=> 'sidekick_text',
			'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-hashtag',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'attributes' 	=> array(
				'data-conditional-id'    => wp_json_encode( array( $cn_books_edition_group, 'format' ) ),
				'data-conditional-value' => wp_json_encode( array( 'paperback', 'hardcover', 'kindle', 'ebook', 'pdf' ) ),
			),
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'Listen Time', 'websidekick' ),
			'id'			=> 'time',
			'type' 		 	=> 'sidekick_text',
			'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-user-clock',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'attributes' 	=> array(
				'data-conditional-id'    	=> wp_json_encode( array( $cn_books_edition_group, 'format' ) ),
				'data-conditional-value' 	=> wp_json_encode( array( 'audible', 'mp3' ) ),
				'placeholder'				=> __('hh:mm', 'websidekick'),
			),
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'Publish Year', 'websidekick' ),
			'id'    		=> 'pub_year',
			'type' 			=> 'sidekick_text',
			'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-hashtag',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'Ownership', 'websidekick' ),
			'id'    		=> 'ownership',
			'type'  		=> 'sidekick_select',
			'options'			=> array(
		    	'own'			=> __('I Own It', 'websidekick'),
		    	'borrow'		=> __('Borrowed', 'websidekick'),
		    	'wish'			=> __('Wishlist', 'websidekick'),
		    ),
		    'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-shopping-cart',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3' ),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'ISBN-10', 'websidekick' ),
			'id'    		=> 'isbn',
			'type'  		=> 'sidekick_text',
			'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-hashtag',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3', 'col-xl-2' ),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'ISBN-13', 'websidekick' ),
			'id'    		=> 'isbn13',
			'type'  		=> 'sidekick_text',
			'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-hashtag',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3', 'col-xl-2' ),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'ASIN', 'websidekick' ),
			'id'    		=> 'asin',
			'type'  		=> 'sidekick_text',
			'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fab fa-amazon',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3', 'col-xl-2' ),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'Story Rating', 'websidekick' ),
			'id'    		=> 'rating_story',
			'type'			=> 'sidekick_select',
			'options'			=> array(
		    	'zero'			=> __('0 Stars', 'websidekick'),
		    	'half'			=> __('0.5 Stars', 'websidekick'),
		    	'one'			=> __('1.0 Star', 'websidekick'),
		    	'onehalf'		=> __('1.5 Stars', 'websidekick'),
		    	'two'			=> __('2.0 Stars', 'websidekick'),
		    	'twohalf'		=> __('2.5 Stars', 'websidekick'),
		    	'three'			=> __('3.0 Stars', 'websidekick'),
		    	'threehalf'		=> __('3.5 Stars', 'websidekick'),
		    	'four'			=> __('4.0 Stars', 'websidekick'),
		    	'fourhalf'		=> __('4.5 Stars', 'websidekick'),
		    	'five'			=> __('5.0 Stars', 'websidekick'),
		    ),
		    'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-book-open',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		    'attributes' 	=> array(
				'data-conditional-id'    	=> wp_json_encode( array( $cn_books_edition_group, 'format' ) ),
				'data-conditional-value' 	=> wp_json_encode( array( 'audible', 'mp3' ) ),
			),
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3', 'col-xl-2' ),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
			'name'			=> esc_html__( 'Performance Rating', 'websidekick' ),
			'id'    		=> 'rating_performance',
			'type' 			=> 'sidekick_select',
			'options'			=> array(
		    	'zero'			=> __('0 Stars', 'websidekick'),
		    	'half'			=> __('0.5 Stars', 'websidekick'),
		    	'one'			=> __('1.0 Star', 'websidekick'),
		    	'onehalf'		=> __('1.5 Stars', 'websidekick'),
		    	'two'			=> __('2.0 Stars', 'websidekick'),
		    	'twohalf'		=> __('2.5 Stars', 'websidekick'),
		    	'three'			=> __('3.0 Stars', 'websidekick'),
		    	'threehalf'		=> __('3.5 Stars', 'websidekick'),
		    	'four'			=> __('4.0 Stars', 'websidekick'),
		    	'fourhalf'		=> __('4.5 Stars', 'websidekick'),
		    	'five'			=> __('5.0 Stars', 'websidekick'),
		    ),
		    'icon_block'	=> 'left',  // options: 'left', 'right'
			'fa_icon'		=> 'fal fa-book-reader',  // full fontawesome markup: 'fal fa-truck'
			'icon_color'	=> 'text-gray-darken-2',  // Use BS4 "color-palette" full class 'text-dark-lighten-2'
			'icon_bg'		=> 'bg-gray-lighten-6',  // Use BS4 "color-palette" full class 'bg-dark-lighten-4'
			'icon_border'	=> 'no',  // Default is 'yes' or true. Option: 'no'.
		    'attributes' 	=> array(
				'data-conditional-id'    	=> wp_json_encode( array( $cn_books_edition_group, 'format' ) ),
				'data-conditional-value' 	=> wp_json_encode( array( 'audible', 'mp3' ) ),
			),
			'classes'		=> array( 'col-12', 'col-md-4', 'col-lg-3', 'col-xl-2' ),
		) );

		$cn_books_meta->add_group_field( $cn_books_edition_group, array(
		    'id'			=> 'hidden_end',
		    'type'			=> 'title',
		    'after_row'		=> '</div><!-- END .form-row -->',
		) );
