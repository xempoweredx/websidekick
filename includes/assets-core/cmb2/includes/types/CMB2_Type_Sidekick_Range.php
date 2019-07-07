<?php
/**
 * CMB range field type
 *
 * @since  2.2.2
 *
 * @category  WordPress_Plugin
 * @package   CMB2
 * @author    CMB2 team
 * @license   GPL-2.0+
 * @link      https://cmb2.io
 */
class CMB2_Type_Sidekick_Range extends CMB2_Type_Base {

	/**
	 * The type of field
	 *
	 * @var string
	 */
	public $type = 'input';

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

	/**
	 * Handles outputting an 'input' element
	 *
	 * @since  1.1.0
	 * @param  array $args Override arguments
	 * @return string       Form input element
	 */
	public function render( $args = array() ) {

		$range_min = $this->field->args( 'range_min' );
		$range_max = $this->field->args( 'range_max' );
		$range_step = $this->field->args( 'range_step' );

		$args = empty( $args ) ? $this->args : $args;
		$a = $this->parse_args( $this->type, array(
			'type'            => 'range',
			'class'           => 'custom-range',
			'name'            => $this->_name(),
			'id'              => $this->_id(),
			'value'           => $this->field->escaped_value(),
			'desc'            => $this->_desc( true ),
			'js_dependencies' => array(),
		), $args );

		return $this->rendered(
			sprintf( '<input min="' . $range_min . '" max="' . $range_max . '" step="' . $range_step . '"%s/>%s', $this->concat_attrs( $a, array( 'desc' ) ), $a['desc'] )
		);
	}
}
