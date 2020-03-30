<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

    public function about_text() {
        return get_field('about_text');
    }
   
    public function about_image() {
        return get_field('about_image');
    }

    public function hp_title_1() {
        return get_field('hp_title_1');
    }
    
    public function hp_title_2() {
       return get_field('hp_title_2');
    }
    
     public function hp_image_1() {
        return get_field('hp_image_1');
    }
    
    public function hp_image_2() {
       return get_field('hp_image_2');
    }
    
    public function hp_text_1() {
        return get_field('hp_text_1');
    }
    
    public function hp_text_2() {
       return get_field('hp_text_2');
    }
}
