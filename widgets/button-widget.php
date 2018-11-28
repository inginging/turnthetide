<?php

if(!class_exists('ButtonWidget')) {

  class ButtonWidget extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
      $widget_ops = array(
        'description' => 'Simple Button Widget',
      );
      parent::__construct( 'button_widget', 'Button Widget', $widget_ops );
    }

    /**
    * Outputs the content of the widget
    *
    * @param array $args
    * @param array $instance
    */
    public function widget( $args, $instance ) {
      // outputs the content of the widget
      if ( ! isset( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }

      // widget ID with prefix for use in ACF API functions
      $widget_id = 'widget_' . $args['widget_id'];

      $btn_label = get_field( 'button_widget_label', $widget_id );
      $btn_link = get_field( 'button_widget_link', $widget_id ) ? get_field( 'button_widget_link', $widget_id ) : '#';

      if($btn_label) {
        echo '<div class="text-center my-6"><a href="' . esc_url($btn_link) . '" class="c-button text-center">' . esc_html($btn_label) . '</a></div>';
      }

    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
    	// outputs the options form on admin
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update( $new_instance, $old_instance ) {
    	// processes widget options to be saved
    }

  }

}

/**
 * Register our Button Widget
 */
function register_button_widget()
{
  register_widget( 'ButtonWidget' );
}
add_action( 'widgets_init', 'register_button_widget' );