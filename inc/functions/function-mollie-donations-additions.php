<?php
/*********************************************************
* Additions for Mollie Donations Plugin
**********************************************************/

    function total_donations_reached_per_project($project, $post_id) {
            global $wpdb;
            $donations = $wpdb->get_var("SELECT SUM(dm_settlement_amount) FROM wp_donate_mollie WHERE dm_status='paid' AND dm_project='$project'" );

            update_field('field_5bf6e2cfc337e', $donations, $post_id);
    }

?>