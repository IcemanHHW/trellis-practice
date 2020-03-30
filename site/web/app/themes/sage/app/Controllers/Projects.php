<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Projects extends Controller
{

 use Partials\Header;

 /* Images */
 public function portfolio_image_1() {
     return get_field('portfolio_image_1');
 }

 public function portfolio_image_2() {
    return get_field('portfolio_image_2');
}

public function portfolio_image_3() {
    return get_field('portfolio_image_3');
}

public function portfolio_image_4() {
    return get_field('portfolio_image_4');
}

public function portfolio_image_5() {
    return get_field('portfolio_image_5');
}


/* Titles */
 public function portfolio_title_1() {
     return get_field('portfolio_title_1');
 }

 public function portfolio_title_2() {
    return get_field('portfolio_title_2');
}

public function portfolio_title_3() {
    return get_field('portfolio_title_3');
}

public function portfolio_title_4() {
    return get_field('portfolio_title_4');
}

public function portfolio_title_5() {
    return get_field('portfolio_title_5');
}


/* Texts */

public function portfolio_text_1() {
    return get_field('portfolio_text_1');
}

public function portfolio_text_2() {
   return get_field('portfolio_text_2');
}

public function portfolio_text_3() {
   return get_field('portfolio_text_3');
}

public function portfolio_text_4() {
   return get_field('portfolio_text_4');
}

public function portfolio_text_5() {
   return get_field('portfolio_text_5');
}

}