<?php
/**
 * CMB Multi base field type
 *
 * @since  2.2.2
 *
 * @category  WordPress_Plugin
 * @package   CMB2
 * @author    CMB2 team
 * @license   GPL-2.0+
 * @link      https://cmb2.io
 */
abstract class CMB2_Type_Multi_Base extends CMB2_Type_Base {

	/**
	 * Generates html for an option element
	 *
	 * @since  1.1.0
	 * @param  array $args Arguments array containing value, label, and checked boolean
	 * @return string       Generated option element html
	 */
	public function select_option( $args = array() ) {
		return sprintf( "\t" . '<option value="%s" %s>%s</option>', $args['value'], selected( isset( $args['checked'] ) && $args['checked'], true, false ), $args['label'] ) . "\n";
	}

	/**
	 * Generates html for list item with input
	 *
	 * @since  1.1.0
	 * @param  array $args Override arguments
	 * @param  int   $i    Iterator value
	 * @return string       Gnerated list item html
	 */
	public function list_input( $args = array(), $i ) {
		$a = $this->parse_args( 'list_input', array(
			'type'  => 'radio',
			'class' => 'cmb2-option',
			'name'  => $this->_name(),
			'id'    => $this->_id( $i ),
			'value' => $this->field->escaped_value(),
			'label' => '',
		), $args );

		return sprintf( "\t" . '<li><input%s/> <label for="%s">%s</label></li>' . "\n", $this->concat_attrs( $a, array( 'label' ) ), $a['id'], $a['label'] );
	}

	/**
	 * Sidekick Generates html for sidekick_list_item with input  @CG
	 *
	 * @since  1.1.0
	 * @param  array $args Override arguments
	 * @param  int   $i    Iterator value
	 * @return string       Gnerated list item html
	 */
	public function sidekick_list_input( $args = array(), $i ) {

		$list_type = $this->field->args( 'type' );

		if ( ( $list_type=='sidekick_radio' ) ) {
			$lt = 'custom-radio ';
		}
		elseif ( ( $list_type=='sidekick_multicheck' ) ) {
			$lt = 'custom-checkbox ';
		}
		else {
			$lt = '';
		}

		$list_display = $this->field->args( 'list_display' );

		if ( ( $list_display=='inline' ) ) {
			$ld = 'custom-control-inline ';
		}
		else {
			$ld = '';
		}

		$a = $this->parse_args( 'sidekick_list_input', array(
			'type'  => 'radio',
			'class' => 'custom-control-input cmb2-option',
			'name'  => $this->_name(),
			'id'    => $this->_id( $i ),
			'value' => $this->field->escaped_value(),
			'label' => '',
		), $args );

		return sprintf( "\t" . '<li class="custom-control ' . $lt . $ld . '"><input%s/> <label class="custom-control-label" for="%s">%s</label></li>' . "\n", $this->concat_attrs( $a, array( 'label' ) ), $a['id'], $a['label'] );
	}


	/**
	 * SIDEKICK Generates html for sidekick_radio_buttons input   18-10-03 @CG
	 *
	 * @since  1.1.0
	 * @param  array $args Override arguments
	 * @param  int   $i    Iterator value
	 * @return string       Gnerated list item html
	 */
	public function sidekick_radio_buttons( $args = array(), $i ) {

		$btn_color = $this->field->args( 'btn_color' );

		$a = $this->parse_args( 'list_input', array(
			'type'  => 'radio',
			'class' => 'custom-radio-buttons',  
			'name'  => $this->_name(),
			'id'    => $this->_id( $i ),
			'value' => $this->field->escaped_value(),
			'label' => '',
		), $args );

		return sprintf( "\t" . '<label class="btn shadow-none %1$s" for="%2$s"><input%3$s autocomplete="off"/>%4$s</label>' . "\n", $btn_color, $a['id'], $this->concat_attrs( $a, array( 'label' ) ), $a['label'] );

	}


	/**
	 * SIDEKICK Generates html for radio icons input   18-10-03 @CG
	 *
	 * @since  1.1.0
	 * @param  array $args Override arguments
	 * @param  int   $i    Iterator value
	 * @return string       Gnerated list item html
	 */
	public function sidekick_radio_icons( $args = array(), $i ) {

		$display_class		= $this->field->args( 'display_class' );  // Use BS4 display markup "d-block" or "d-inline-block"
		$icon_unselected	= $this->field->args( 'icon_unselected' );  // full fontawesome markup: 'fal fa-truck'
		$icon_selected		= $this->field->args( 'icon_selected' );  // full fontawesome markup: 'fal fa-truck'
		$color_unselected	= $this->field->args( 'color_unselected' );  // Use BS4 "color-palette" full class 'text-green-lighten-2'
		$color_selected		= $this->field->args( 'color_selected' );  // Use BS4 "color-palette" full class 'text-green-lighten-2'
		$size_unselected	= $this->field->args( 'size_unselected' );  // full fontawesome markup: 'fa-sm' *optional*
		$size_selected		= $this->field->args( 'size_selected' );  // full fontawesome markup: 'fa-lg' *optional*

		$a = $this->parse_args( 'list_input', array(
			'type'  => 'radio',
			'class' => 'custom-control-input',  
			'name'  => $this->_name(),
			'id'    => $this->_id( $i ),
			'value' => $this->field->escaped_value(),
			'label' => '',
		), $args );

		return sprintf( "\t" . '<div class="custom-control custom-radio mr-2 mb-2 %10$s"><input%7$s />
			<label class="custom-control-label" for="%8$s">
				<span class="radio-option %1$s">
                    <i class="fa-fw %2$s %3$s"></i>
                </span>
                <span class="radio-selected %4$s">
                    <i class="fa-fw %5$s %6$s"></i>
                </span>
                <div>%9$s</div>
            </label></div>' . "\n", $color_unselected, $icon_unselected, $size_unselected, $color_selected, $icon_selected, $size_selected, $this->concat_attrs( $a, array( 'label' ) ), $a['id'], $a['label'], $display_class );

	}

	/**
	 * Generates html for list item with checkbox input
	 *
	 * @since  1.1.0
	 * @param  array $args Override arguments
	 * @param  int   $i    Iterator value
	 * @return string       Gnerated list item html
	 */
	public function list_input_checkbox( $args, $i ) {
		$saved_value = $this->field->escaped_value();
		if ( is_array( $saved_value ) && in_array( $args['value'], $saved_value ) ) {
			$args['checked'] = 'checked';
		}
		$args['type'] = 'checkbox';
		return $this->list_input( $args, $i );
	}

	/**
	 * SIDEKICK Generates html for sidekick_list item with checkbox input
	 *
	 * @since  1.1.0
	 * @param  array $args Override arguments
	 * @param  int   $i    Iterator value
	 * @return string       Gnerated list item html
	 */
	public function sidekick_list_input_checkbox( $args, $i ) {
		$saved_value = $this->field->escaped_value();
		if ( is_array( $saved_value ) && in_array( $args['value'], $saved_value ) ) {
			$args['checked'] = 'checked';
		}
		$args['type'] = 'checkbox';
		return $this->sidekick_list_input( $args, $i );
	}

	/**
	 * Generates html for concatenated items
	 *
	 * @since  1.1.0
	 * @param  array $args Optional arguments
	 * @return string        Concatenated html items
	 */
	public function concat_items( $args = array() ) {
		$field = $this->field;

		$method = isset( $args['method'] ) ? $args['method'] : 'select_option';
		unset( $args['method'] );

		$value = null !== $field->escaped_value()
			? $field->escaped_value()
			: $field->get_default();

		$value = CMB2_Utils::normalize_if_numeric( $value );

		$concatenated_items = '';
		$i = 1;

		$options = array();
		if ( $option_none = $field->args( 'show_option_none' ) ) {
			$options[''] = $option_none;
		}
		$options = $options + (array) $field->options();
		foreach ( $options as $opt_value => $opt_label ) {

			// Clone args & modify for just this item
			$a = $args;

			$a['value'] = $opt_value;
			$a['label'] = $opt_label;

			// Check if this option is the value of the input
			if ( $value === CMB2_Utils::normalize_if_numeric( $opt_value ) ) {
				$a['checked'] = 'checked';
			}

			$concatenated_items .= $this->$method( $a, $i++ );
		}

		return $concatenated_items;
	}

}
