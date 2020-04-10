<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{

    public function about_text() {
        return get_field('about_text');
    }
   
    public function about_image() {
        return get_field('about_image');
    }
    
    public function hp_projects() {
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
            );       
        $hp_query = new WP_Query( $args );
        return $hp_query;
    }

}
