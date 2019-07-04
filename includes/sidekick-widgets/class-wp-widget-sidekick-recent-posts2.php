<?php

// Register 'List Custom Taxonomy' widget
add_action( 'widgets_init', 'init_widget_sidekick_recent_posts22' );
function init_widget_sidekick_recent_posts22() { return register_widget('WP_widget_sidekick_recent_posts22'); }

/**
  * Sidekick_Recent_Posts widget class
  *
  */
class WP_widget_sidekick_recent_posts22 extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'widget_sidekick_recent_entries2', 'description' => __( "The most recent posts on your site") );
        $this->WP_Widget('sidekick-recent-posts2', __('Sidekick Recent Posts 2'), $widget_ops);
        $this->alt_option_name = 'widget_sidekick_recent_entries2';

        add_action( 'save_post', array(&$this, 'flush_widget_cache') );
        add_action( 'deleted_post', array(&$this, 'flush_widget_cache') );
        add_action( 'switch_theme', array(&$this, 'flush_widget_cache') );
    }

    function widget($args, $instance) {
        $cache = wp_cache_get('widget_sidekick_recent_posts2', 'widget');

        if ( !is_array($cache) )
            $cache = array();

        if ( isset($cache[$args['widget_id']]) ) {
            echo $cache[$args['widget_id']];
            return;
        }

        ob_start();
        extract($args);

        $title = apply_filters('widget_title', empty($instance['title']) ? __('Sidekick Recent Posts 2') : $instance['title'], $instance, $this->id_base);
        if ( !$number = (int) $instance['number'] )
            $number = 10;
        else if ( $number < 1 )
            $number = 1;
        else if ( $number > 15 )
            $number = 15;

        echo '<select>';

        $all_cpts = get_post_types();
        foreach( $all_cpts as $cpt_object ) :

        echo '<option' . ' class="' . esc_attr( $class_name ) . '" value="' . esc_attr( $cpt_object ) . '">' . esc_html( $cpt_object ) . '</option>';

        wp_reset_postdata(); endforeach;

        echo '</select>';

        if ( array_key_exists( 'post_type', $instance ) ) {
			$this_post_type = $instance['post_type']; // Taxonomy to show
		} else {
			$this_post_type = '';
		}

		$cpt = $this_post_type;

		$cpt_object = get_post_type( $cpt );

        $r = new WP_Query(array('showposts' => $number, 'nopaging' => 0, 'post_status' => 'publish', 'ignore_sticky_posts' => true, 'post_type' => array($cpt)));
        if ($r->have_posts()) :
?>
        <?php echo $before_widget; ?>
        <?php if ( $title ) echo $before_title . $title . $after_title; ?>
        <ul>
        <?php  while ($r->have_posts()) : $r->the_post(); ?>
        <li><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a></li>
        <?php endwhile; ?>
        </ul>
        <?php echo $after_widget; ?>
<?php
        // Reset the global $the_post as this query will have stomped on it
        wp_reset_postdata();

        endif;

        $cache[$args['widget_id']] = ob_get_flush();
        wp_cache_set('widget_sidekick_recent_posts2', $cache, 'widget');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = (int) $new_instance['number'];
        $this->flush_widget_cache();

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset($alloptions['widget_sidekick_recent_entries2']) )
            delete_option('widget_sidekick_recent_entries2');

        return $instance;
    }

    function flush_widget_cache() {
        wp_cache_delete('widget_sidekick_recent_posts2', 'widget');
    }

    function form( $instance ) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        if ( !isset($instance['number']) || !$number = (int) $instance['number'] )
            $number = 5;
?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts to show:'); ?></label>
        <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
<?php
    }
}