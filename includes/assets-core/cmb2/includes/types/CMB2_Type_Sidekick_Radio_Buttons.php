<?php
/**
 * CMB radio field type
 *
 * @since  2.2.2
 *
 * @category  WordPress_Plugin
 * @package   CMB2
 * @author    CMB2 team
 * @license   GPL-2.0+
 * @link      https://cmb2.io
 */
class CMB2_Type_Sidekick_Radio_Buttons extends CMB2_Type_Multi_Base {

	/**
	 * The type of radio field
	 *
	 * @var string
	 */
	public $type = 'radio';

	/**
	 * Constructor
	 *
	 * @since 2.2.2
	 *
	 * @param CMB2_Types $types
	 * @param array      $args
	 */
	public function __construct( CMB2_Types $types, $args = array(), $type = '' ) {
		parent::__construct( $types, $args );
		$this->type = $type ? $type : $this->type;
	}

	public function render() {

		$btn_size = $this->field->args( 'btn_size' );  // Use BS4 display markup "d-block" or "d-inline-block"
		$btn_align = $this->field->args( 'btn_align' );  // Use BS4 display markup "d-block" or "d-inline-block"

		$args = $this->parse_args( $this->type, array(
			'class'   => 'radio-buttons-list cmb2-list custom-radio-buttons btn-group btn-group-toggle ' . $btn_size . ' ' . $btn_align,
			'options' => $this->concat_items( array(
				'label'  => 'test',
				'method' => 'sidekick_radio_buttons',
			) ),
			'desc' => $this->_desc( true ),
		) );
		
			return $this->rendered( $this->ul( $args ) );
	}

	protected function ul( $a ) {
		return sprintf( '<div class="%s" data-toggle="buttons">%s</div>%s', $a['class'], $a['options'], $a['desc'] ); // Change <ul> to <div>. 18-10-03 @CG
	}

}
