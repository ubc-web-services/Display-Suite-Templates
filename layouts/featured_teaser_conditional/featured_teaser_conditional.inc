<?php

/**
 * @file
 * Display Suite Featured Teaser Conditional configuration.
 */

function ds_featured_teaser_conditional() {
  return array(
    'label' => t('Featured Teaser with a conditional region'),
    'regions' => array(
      'image_area' => t('Image Area'),
      'content_area' => t('Content Area'),
	  'if_area' => t('If Area'),
	  'else_area' => t('Else Area'),
    ),
    // Uncomment if you want to include a CSS file for this layout (media_object.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (media_object.png)
    // 'image' => TRUE,
  );
}
