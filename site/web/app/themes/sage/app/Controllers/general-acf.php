<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class GeneralAcf extends Controller
{
    public function header_subtitle(){
        return get_field('header_subtitle');
    }
}