<?php

namespace App\Controllers\Partials;

use Sober\Controller\Controller;

trait Header
{
    public function header_subtitle(){
        return get_field('header_subtitle');
    }
}