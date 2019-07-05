<?php
/**
 * BLB Search widget class
 *
 * @since 1.0.0
 * @package Custom Post Type Widgets
 */
class WP_Custom_Post_Type_Widgets_BLB_Search extends WP_Widget {

	/**
	 * Sets up a newBLB Search widget instance.
	 *
	 * @since 2.8.0
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'sidekick_widget_blb_search',
			'description'                 => __( 'BLB Scripture Search' ),
			//'customize_selective_refresh' => true,
		);
		parent::__construct( 'sidekick-blb-scripture-search', __( 'BLB Scripture Search' ), $widget_ops );
		//$this->alt_option_name = 'sidekick_widget_blb_search';
	}

	/**
	 * Outputs the content for the current Recent Custom Posts widget instance.
	 *
	 * @since 2.8.0
	 *
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Recent Custom Posts widget instance.
	 */
	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'BLB Scripture Search' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number ) {
			$number = 5;
		}
		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
		?>
		<?php echo $args['before_widget']; ?>
		<?php
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
			echo '<h6 class="font-weight-light mb-2">Powered by <a class="text-primary" href="http://blueletterbible.org" target="_blank">BlueLetterBible.org</a></h6>';
		}
		?>
		<form action="http://blb.org/search/preSearch.cfm" onSubmit="if(this.cscs.value=='Optional Verse Range')this.cscs.value='';" method="get">
		    <div class="form-row">
		        <div class="col-8">
		            <input class="form-control" type="text" name="Criteria" placeholder="Verse(s), Word(s), Topic" />
		        </div>
		        <div class="col-4">
		            <select class="custom-select" name="t">
		                <option value="ESV" selected="selected">ESV</option>
		                <option value="NASB">NASB</option>
		                <option value="NIV">NIV</option>
		                <option value="KJV">KJV</option>
		                <option value="NKJV">NKJV</option>
		                <option value="CSB">CSB</option>
		                <option value="RSV">RSV</option>
		                <option value="TR">TR</option>
		            </select>
		        </div>
		    </div>
		    <div class="form-row pt-3">
		        <div class="col-8">
		            <input class="form-control" type="text" name="cscs" placeholder="Optional Text Range" title="Use semicolons to separate groups - Gen;Jdg;Psa-Mal;Rom 3-12; Mat 1:15;Mat 5:12-22" value="" onfocus="if(this.value=='Optional Verse Range') this.value='';" onblur="if(this.value=='') this.value='Optional Verse Range';" />
		            <small class="form-text text-muted help-text">i.e. Gen;Jdg;Psa-Mal;Rom3-12;Mat1:15;Mat5:12-22</small>
		        </div>
		        <div class="col-4">
		            <input class="btn btn-block btn-outline-danger rounded-pill" type="submit" value="Search" />
		        </div>
		    </div>
		</form>
		<?php
		echo $args['after_widget'];
	}

	/**
	 * Handles updating the settings for the current Recent Custom Posts widget instance.
	 *
	 * @since 2.8.0
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Updated settings to save.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance              = $old_instance;
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['number']    = (int) $new_instance['number'];
		$instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
		return $instance;
	}

	/**
	 * Outputs the settings form for the Recent Custom Posts widget.
	 *
	 * @since 2.8.0
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
		<input class="tiny-text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $number; ?>" size="3" /></p>

		<p><input class="checkbox" type="checkbox"<?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
		<label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label></p>
		<?php
	}
}
