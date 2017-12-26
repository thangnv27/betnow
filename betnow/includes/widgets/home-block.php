<?php

class Home_Block_Widget extends WP_Widget {

    function Home_Block_Widget() {
        $widget_ops = array('classname' => 'box_home', 'description' => 'Home block slider.');
        $control_ops = array('id_base' => 'home_block_widget');
        $this->WP_Widget('home_block_widget', 'BETNOW: Home Block', $widget_ops, $control_ops);
    }

    function form($instance) {
        $defaults = array(
            'html_code' => ''
        );
        $instance = wp_parse_args((array) $instance, $defaults);

        $display .= '<p>
			<label for="' . $this->get_field_id('html_code') . '">HTML Code:</label>
		</p><p>	
			<textarea style="max-width: 100%;width: 100%;min-height:100px" id="' . $this->get_field_id('html_code') . '" name="' . $this->get_field_name('html_code') . '">' . $instance['html_code'] . '</textarea>
		</p>';
        print $display;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['html_code'] = $new_instance['html_code'];
        return $instance;
    }

    function widget($args, $instance) {
        extract($args);

        print $before_widget;
        print $instance['html_code'];
        print $after_widget;
    }

}

?>