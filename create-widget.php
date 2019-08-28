<?php

class hover_boxes_widget extends WP_Widget {

    public function __construct() {
        $widget_options = array( 
          'classname' => 'hover_boxes_widget',
          'description' => 'Widget which display an hover box',
        );
        parent::__construct( 'hover_boxes_widget', 'Hover Boxes Widget', $widget_options );
      }


      public function widget( $args, $instance ) {

        extract($args);

        $title = apply_filters('widget_title', $instance['title']); //Titolo Widget
        $hbe_widget_option_1 = apply_filters('hbe_widget_option_1', $instance['hbe_widget_option_1']); //Link
        $hbe_widget_option_2 = apply_filters('hbe_widget_option_2', $instance['hbe_widget_option_2']); //Open in new Tab
        $hbe_widget_option_3 = apply_filters('hbe_widget_option_3', $instance['hbe_widget_option_3']); //Image
        $hbe_widget_option_4 = apply_filters('hbe_widget_option_4', $instance['hbe_widget_option_4']); //Width
        $hbe_widget_option_5 = apply_filters('hbe_widget_option_5', $instance['hbe_widget_option_5']); //Type
        $hbe_widget_option_6 = apply_filters('hbe_widget_option_6', $instance['hbe_widget_option_6']); //Testo
        $hbe_widget_option_7 = apply_filters('hbe_widget_option_7', $instance['hbe_widget_option_7']); //Descrizione
        $hbe_widget_option_8 = apply_filters('hbe_widget_option_8', $instance['hbe_widget_option_8']); //A capo
        $hbe_widget_option_9 = apply_filters('hbe_widget_option_9', $instance['hbe_widget_option_9']); //Altezza

        if ($hbe_widget_option_2 == 'yes') {
          $target = "_blank";
        } else {
          $target = "_self";
        }
        if ($hbe_widget_option_8 == 'no') {
          $style_grid = "float: left; padding: 1em 1em 2em !important;";
        } else {
          $style_grid = "";
        }
        $image_url = wp_get_attachment_image_url($hbe_widget_option_3, 'pixelwars_core_image_size_3');
 ?>
      
          <div class="grid" style="<?php echo $style_grid; ?>">
            <figure class="effect-<?php echo $hbe_widget_option_5; ?>">
                <img src="<?php echo esc_attr($hbe_widget_option_3); ?>" alt="<?php echo $hbe_widget_option_6; ?>"/>
                <figcaption>
                    <h2><?php echo $hbe_widget_option_6; ?></h2>
                    <p><?php echo $hbe_widget_option_7; ?></p>
                    <a href="<?php echo $hbe_widget_option_1; ?>" target="<?php echo $target; ?>">Apri Link</a>
                </figcaption>			
            </figure>
           </div>
      <?php if ($hbe_widget_option_8 == 'yes') { ?><div class="clearfix"></div><?php } ?>
      
        <?php }

      public function form($instance) {

        if (isset($instance['title'])) { $title = $instance[ 'title' ]; } else { $title = ""; }
        if (isset($instance['hbe_widget_option_1'])) { $hbe_widget_option_1 = $instance[ 'hbe_widget_option_1' ]; } else { $hbe_widget_option_1 = ""; }
        if (isset($instance['hbe_widget_option_2'])) { $hbe_widget_option_2 = $instance[ 'hbe_widget_option_2' ]; } else { $hbe_widget_option_2 = 'no'; }
        if (isset($instance['hbe_widget_option_3'])) { $hbe_widget_option_3 = $instance[ 'hbe_widget_option_3' ]; } else { $hbe_widget_option_3 = ""; }
        if (isset($instance['hbe_widget_option_4'])) { $hbe_widget_option_4 = $instance[ 'hbe_widget_option_4' ]; } else { $hbe_widget_option_4 = ""; }
        if (isset($instance['hbe_widget_option_5'])) { $hbe_widget_option_5 = $instance[ 'hbe_widget_option_5' ]; } else { $hbe_widget_option_5 = ""; }
        if (isset($instance['hbe_widget_option_6'])) { $hbe_widget_option_6 = $instance[ 'hbe_widget_option_6' ]; } else { $hbe_widget_option_6 = ""; }
        if (isset($instance['hbe_widget_option_7'])) { $hbe_widget_option_7 = $instance[ 'hbe_widget_option_7' ]; } else { $hbe_widget_option_7 = ""; }
        if (isset($instance['hbe_widget_option_8'])) { $hbe_widget_option_8 = $instance[ 'hbe_widget_option_8' ]; } else { $hbe_widget_option_8 = 'yes'; }
        if (isset($instance['hbe_widget_option_9'])) { $hbe_widget_option_9 = $instance[ 'hbe_widget_option_9' ]; } else { $hbe_widget_option_9 = ""; }

        ?>
          <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php echo 'Title' ?></label>
            
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>">
          </p>
          <p>
            <label for="<?php echo esc_attr($this->get_field_id('hbe_widget_option_6')); ?>"><?php echo 'Text' ?></label>
            
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('hbe_widget_option_6')); ?>" name="<?php echo esc_attr($this->get_field_name('hbe_widget_option_6')); ?>" value="<?php echo esc_attr($hbe_widget_option_6); ?>">
          </p>
          <p>
            <label for="<?php echo esc_attr($this->get_field_id('hbe_widget_option_7')); ?>"><?php echo 'Description' ?></label>
            
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('hbe_widget_option_7')); ?>" name="<?php echo esc_attr($this->get_field_name('hbe_widget_option_7')); ?>" value="<?php echo esc_attr($hbe_widget_option_7); ?>">
          </p>
          <p>
            <label for="<?php echo esc_attr($this->get_field_id('hbe_widget_option_1')); ?>"><?php echo 'Link URL' ?></label>
            
            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('hbe_widget_option_1')); ?>" name="<?php echo esc_attr($this->get_field_name('hbe_widget_option_1')); ?>" value="<?php echo esc_attr($hbe_widget_option_1); ?>">
          </p>
          <p>
            <label for="<?php echo esc_attr($this->get_field_id('hbe_widget_option_2')); ?>"><?php echo 'Open link in new tab' ?></label>
            
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('hbe_widget_option_2')); ?>" name="<?php echo esc_attr($this->get_field_name('hbe_widget_option_2')); ?>">
              <option <?php if ($hbe_widget_option_2 == 'no') { echo 'selected="selected"'; } ?> value="no"><?php echo 'No'; ?></option>
              <option <?php if ($hbe_widget_option_2 == 'yes') { echo 'selected="selected"'; } ?> value="yes"><?php echo 'Yes'; ?></option>
            </select>
          </p>
          <p>
            <label for="<?php echo esc_attr($this->get_field_id('hbe_widget_option_3')); ?>"><?php echo 'Image'; ?></label>
            <br>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('hbe_widget_option_3')); ?>" name="<?php echo esc_attr($this->get_field_name('hbe_widget_option_3')); ?>" value="<?php echo esc_attr($hbe_widget_option_3); ?>">
            <input type="button" class="button button-browse" value="<?php esc_attr_e('Browse', 'pixelwars-core'); ?>">
          </p>
          <p>
            <label for="<?php echo esc_attr($this->get_field_id('hbe_widget_option_4')); ?>"><?php echo 'Width' ?></label>
            
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('hbe_widget_option_4')); ?>" name="<?php echo esc_attr($this->get_field_name('hbe_widget_option_4')); ?>">
              <option <?php if ($hbe_widget_option_4 == "") { echo 'selected="selected"'; } ?> value=""><?php echo '25%'; ?></option>
              <option <?php if ($hbe_widget_option_4 == 'w-33') { echo 'selected="selected"'; } ?> value="w-33"><?php echo '33%'; ?></option>
              <option <?php if ($hbe_widget_option_4 == 'w-50') { echo 'selected="selected"'; } ?> value="w-50"><?php echo '50%'; ?></option>
              <option <?php if ($hbe_widget_option_4 == 'w-100') { echo 'selected="selected"'; } ?> value="w-100"><?php echo '100%'; ?></option>
            </select>
          </p>
          <p>
					<label for="<?php echo esc_attr($this->get_field_id('hbe_widget_option_9')); ?>"><?php echo 'Ratio' ?></label>
					
					<select class="widefat" id="<?php echo esc_attr($this->get_field_id('hbe_widget_option_9')); ?>" name="<?php echo esc_attr($this->get_field_name('hbe_widget_option_9')); ?>">
						<option <?php if ($hbe_widget_option_9 == "") { echo 'selected="selected"'; } ?> value=""><?php echo 'Square'; ?></option>
						<option <?php if ($hbe_widget_option_9 == 'ratio-2-1') { echo 'selected="selected"'; } ?> value="ratio-2-1"><?php echo 'Tall'; ?></option>
						<option <?php if ($hbe_widget_option_9 == 'ratio-16-9') { echo 'selected="selected"'; } ?> value="ratio-16-9"><?php echo 'Wide'; ?></option>
						<option <?php if ($hbe_widget_option_9 == 'ratio-21-9') { echo 'selected="selected"'; } ?> value="ratio-21-9"><?php echo 'Extra-Wide'; ?></option>
					</select>
				</p>
          <p>
            <label for="<?php echo esc_attr($this->get_field_id('hbe_widget_option_5')); ?>"><?php echo 'Type' ?></label>
            
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('hbe_widget_option_5')); ?>" name="<?php echo esc_attr($this->get_field_name('hbe_widget_option_5')); ?>">
              <option <?php if (($hbe_widget_option_5 == 'oscar') || ($hbe_widget_option_5 == "")) { echo 'selected="selected"'; } ?> value="oscar"><?php echo 'Oscar'; ?></option>
              <option <?php if ($hbe_widget_option_5 == 'zoe') { echo 'selected="selected"'; } ?> value="zoe"><?php echo 'Zoe'; ?></option>
              <option <?php if ($hbe_widget_option_5 == 'layla') { echo 'selected="selected"'; } ?> value="layla"><?php echo 'Layla'; ?></option>
              <option <?php if ($hbe_widget_option_5 == 'honey') { echo 'selected="selected"'; } ?> value="honey"><?php echo 'Honey'; ?></option>
            </select>
          </p>
          <p>
            <label for="<?php echo esc_attr($this->get_field_id('hbe_widget_option_8')); ?>"><?php echo 'Go to next line' ?></label>
            
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('hbe_widget_option_8')); ?>" name="<?php echo esc_attr($this->get_field_name('hbe_widget_option_8')); ?>">
              <option <?php if ($hbe_widget_option_8 == 'yes') { echo 'selected="selected"'; } ?> value="yes"><?php echo 'Yes'; ?></option>
              <option <?php if ($hbe_widget_option_8 == 'no') { echo 'selected="selected"'; } ?> value="no"><?php echo 'No'; ?></option>
            </select>
          </p>
        <?php
      }

      public function update($new_instance, $old_instance)
      {
        $instance = array();
        $instance['title']                          = strip_tags($new_instance['title']);
        $instance['hbe_widget_option_1'] = strip_tags($new_instance['hbe_widget_option_1']);
        $instance['hbe_widget_option_2'] = strip_tags($new_instance['hbe_widget_option_2']);
        $instance['hbe_widget_option_3'] = strip_tags($new_instance['hbe_widget_option_3']);
        $instance['hbe_widget_option_4'] = strip_tags($new_instance['hbe_widget_option_4']);
        $instance['hbe_widget_option_5'] = strip_tags($new_instance['hbe_widget_option_5']);
        $instance['hbe_widget_option_6'] = strip_tags($new_instance['hbe_widget_option_6']);
        $instance['hbe_widget_option_7'] = strip_tags($new_instance['hbe_widget_option_7']);
        $instance['hbe_widget_option_8'] = strip_tags($new_instance['hbe_widget_option_8']);
        $instance['hbe_widget_option_9'] = strip_tags($new_instance['hbe_widget_option_9']);
        return $instance;
      }

}
