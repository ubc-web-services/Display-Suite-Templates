<?php

/**
 * @file
 * Display Suite Media Object configuration.
 */

function ds_media_object_conditional() {
  return array(
    'label' => t('Media Object with a conditional region'),
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
