<?php
/**
 * About section ACF fields
 * 
 * @author Maarten Kampmeijer
 * 
 */

 function about_text() {
     return get_field('about_text');
 }

 function about_image() {
     return get_field('about_image');
 }