<?php 
add_action('easter_egg_activate', 'egg_disappear');
function egg_disappear() {
  echo "$('body').animate({opacity: 0}, 250, function() {});";
}