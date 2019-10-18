<?php
/*********************************************************
* Additions for Mollie Donations Plugin
**********************************************************/

    function total_donations_reached_per_project($project, $post_id) {
            global $wpdb;
            //$donations = $wpdb->get_var("SELECT SUM(dm_settlement_amount) FROM wp_donate_mollie WHERE dm_status='paid' AND dm_project='$project'" );
            
            //$donations = $wpdb->get_var("SELECT SUM(dm_settlement_amount) FROM wp_donate_mollie AND dm_project='$project'" );
            $donations2 = $wpdb->get_var("SELECT SUM(dm_settlement_amount) FROM wp_donate_mollie WHERE dm_project='$project' AND dm_status='paid'");
            
            update_field('field_5bf6e2cfc337e', $donations2, $post_id); 

                echo '<script>console.log('.json_encode($donations2).');</script>';
    }

?>