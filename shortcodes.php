<?php
require_once('layout/EventGridClass.php');
require_once('layout/EventSlideshowClass.php');
/*
========================================================================================================================================================================
SHORTCODES USED FOR THE SITE
========================================================================================================================================================================
*/


function display_event_slideshow( $atts, $content = null ) {
  $a = shortcode_atts( array(
    'time' => 'future',
    'order' => 'ASC',
    'orderby' => 'event_start_date'
  ), $atts, 'event_slideshow');
  $slideshow = new EventSlideshow($a['time'],$a['order'],$a['event_start_date']);
  $html = $slideshow -> get_event_html();
  return $html;
}

add_shortcode("event_slideshow","display_event_slideshow");





function display_event_grid( $atts, $content = null ) {
  $a = shortcode_atts( array(
    'time' => 'future',
    'order' => 'DESC',
    'orderby' => 'event_start_date'
  ), $atts, 'event_slideshow');
  $grid = new EventGrid($a['time'],$a['order'],$a['event_start_date']);
  $html = $grid -> get_event_html();
  return $html;
}

add_shortcode("event_gallery","display_event_grid");

?>
