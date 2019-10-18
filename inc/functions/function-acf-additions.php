<?php 
if( function_exists('acf_add_options_page') ) {
        
        acf_add_options_page();
        
    }


    function my_acf_prepare_field( $field ) {

        $field['disabled'] = true;
        return $field;
    
    }
    add_filter('acf/prepare_field/name=goal_amount_reached', 'my_acf_prepare_field');
    
?> 