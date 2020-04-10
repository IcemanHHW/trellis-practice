<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class TemplateProjects extends Controller
{

    public function projects_loop() {
        $args = array(
            'post_type' => 'post',
            );       
        $project_query = new WP_Query( $args );
        return $project_query;
    }

}