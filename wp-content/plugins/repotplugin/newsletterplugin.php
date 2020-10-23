<?php

/*
* Plugin Name: Newsletter Plugin
* Plugin URI: http://rasmus-christensen.dk/repot
* Description: This is a newsletter plugin for the company RePot.
* Version: 1.0.0
* Author: Rasmus Christesen
* Author: URI: http://rasmus-christensen.dk/repot
* License: GPL2

*/


function newsletter_form(){
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<section>';
    $content .= '<h3 id="velkommen">Følg vores rejse</h3>';
    $content .= '<img id="logo" src=" '.plugins_url("repotplugin/img/repot-logo.png").' " >';
    $content .= '<h5 id="tilmeld">Du kan både få nyhedsbrev eller følge os på de sociale medier</h5>';
  	$content .= '</section>';
     $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Indtast dit navn her..." required><i class="fas fa-user-edit"></i>';
    $content .= '<input type="email" name="email" id="email" placeholder="Indtast din mail her..." required><i class="fas fa-envelope"></i>';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="tilmeld nyhedsbrev" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="button" value="Sociale medier" name="submitBtn" id="submitBtn">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}



function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('repotplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('repotplugin/js/script.js'), array('jquery'), null, true);
    }


#First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_repotplugin','newsletter_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');











