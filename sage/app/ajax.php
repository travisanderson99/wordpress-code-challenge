<?php

namespace App;

class Ajax
{
    public function __construct()
    {
        $ajax_events = array(
            'ajax_load_more_posts',
        );
        foreach ($ajax_events as $ajax_event) {
            add_action('wp_ajax_' . $ajax_event, [$this, $ajax_event]);
            add_action('wp_ajax_nopriv_' . $ajax_event, [$this, $ajax_event]); 
        }
    }

    function ajax_load_more_posts() {
        // Your code here
    }
}

new Ajax();