<?php
/**
 * CMB textarea field type
 *
 * @since  2.2.2
 *
 * @category  WordPress_Plugin
 * @package   CMB2
 * @author    CMB2 team
 * @license   GPL-2.0+
 * @link      https://cmb2.io
 */
class CMB2_Type_Sidekick_Textarea extends CMB2_Type_Base {

	/**
	 * Handles outputting an 'textarea' element
	 *
	 * @since  1.1.0
	 * @param  array $args Override arguments
	 * @return string       Form textarea element
	 */
	public function render( $args = array() ) {

		$textarea_rows = $this->field->args( 'textarea_rows' );

		if ( ( $textarea_rows ) ) {
			$rows = $textarea_rows;
		}
		else {
			$rows = '3';
		}

		$args = empty( $args ) ? $this->args : $args;
		$a = $this->parse_args( 'textarea', array(
			'class' => 'form-control',
			'name'  => $this->_name(),
			'id'    => $this->_id(),
			//'cols'  => 60,
			'rows'  => $rows,
			'value' => $this->field->escaped_value( 'esc_textarea' ),
			'desc'  => $this->_desc( true ),
		), $args );

		return $this->rendered(
			sprintf( '<textarea%s>%s</textarea>%s', $this->concat_attrs( $a, array( 'desc', 'value' ) ), $a['value'], $a['desc'] )
		);
	}
}
