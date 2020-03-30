<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class AboutAcf extends Controller
{

public function about_text() {
        return get_field('about_text');
    }
   
public function about_image() {
    return get_field('about_image');
}

}