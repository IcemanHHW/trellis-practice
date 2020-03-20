<?php
/**
 * About section ACF fields
 * 
 * @author Maarten Kampmeijer
 * 
 */

 class ACF_About {

    public function about_text() {
        return get_field('about_text');
    }
   
    public function about_image() {
        return get_field('about_image');
    }
    
 }